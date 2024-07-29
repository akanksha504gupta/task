<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use Spatie\FlareClient\Api as FlareClientApi;

class SubscriptionController extends Controller
{
    public function viewSubscriptions()
    {
        
        return view('dashboard');
    }

    public function history()
    {
        $his = Subscription::where('user_id',Auth::user()->id)->get();
        // dd($his);
        return view('history',compact('his'));
    }

    public function subscribe(Request $request)
    {
        
        $user = auth()->user()->id;
       
        $tier = $request->tier;
        $amount = $request->amount;

        // Create a new subscription record
        $subscription = Subscription::updateOrCreate(
            ['user_id' => $user],
            ['tier' => $tier, 'amount' => $amount]
        );
       
        if ($tier != 'Silver') {
            return view('payment', ['orderId'=>$subscription->id,'amount'=>$subscription->amount]);
        }

        // Session::put('success', 'Payment successful');
        return redirect()->back()->with('message','Order Successfully Done!');
    }



    public function store(Request $request)
    {
        
        
        $input = $request->all();
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);
       
        if (count($input)  && !empty($input['razorpay_payment_id'])) {

            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                 Subscription::where('id', $input['order_ids'])->update(['payment_id'=>$input['razorpay_payment_id'],'payment_status'=>1]);
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        
        return redirect()->route('subscriptions')->with('message', 'Payment successful');
    }
}

