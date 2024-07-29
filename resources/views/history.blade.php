@extends('layouts.index')

@section('conatiner')
<div class="container my-5">
    <div class="col-12">
        <h3 class="pb-3">Your Plan</h3>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Plan Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Status</th>
            </tr>
        </thead>
        <tbody>
           
            @if (count($his) > 0)
            
                @foreach ($his as $key=>$hiss)
                    @php
                        if($hiss->payment_status == 1){
                            $status = "Paid";
                        }
                        elseif($hiss->payment_status == 0 && $hiss->tier == 'Silver'){
                            $status = "Free";
                        }
                        else{
                            $status = "Unpaid";
                        }
                    @endphp
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$hiss->tier}}</td>
                        <td>{{$hiss->amount}}</td>
                        <td>{{$status}}</td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
    </div>
</div>
    
@endsection
