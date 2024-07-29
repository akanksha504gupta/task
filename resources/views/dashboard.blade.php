@extends('layouts.index')
@section('conatiner')
    <div class="container my-4">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class=" text-center">
                            <h3 class="text-info">Silver</h3>
                            <span>Free</span>
                        </div>


                        <ul class="list">
                            <li><span><i class="fa-solid fa-check"></i> Completely FREE</span></li>
                            <li><span><i class="fa-solid fa-check"></i> 5 Website Pages</span></li>
                            <li><span><i class="fa-solid fa-check"></i> 500 MB Storage Space</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Basic Web Forms</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Online Store (3 Products)</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> Customizable Web Forms</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> Remove Website.com Banner Ads</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> Premium Support</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> 30-day Money Back Guarantee</span></li>

                        </ul>
                        <div class="text-center">
                            <a href="{{ route('subscribe', ['tier' => 'Silver']) }}" class="btn btn-info">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="text-center">
                            <h3 class="text-info ">Gold (Paid)</h3>
                            <span>INR 2499.</span>
                        </div>
                        <ul class="list">
                            <li><span><i class="fa-solid fa-check"></i> Free Domain For 1 Year </span></li>
                            <li><span><i class="fa-solid fa-check"></i> Unlimited Website Pages</span></li>
                            <li><span><i class="fa-solid fa-check"></i> 2GB Storage Space</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Basic Web Forms</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Online Store (10 Products)</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Customizable Web Forms</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Remove Website.com Banner Ads</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> Premium Support</span></li>
                            <li><span><i class="fa-solid fa-xmark"></i> 30-day Money Back Guarantee</span></li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ route('subscribe', ['tier' => 'Gold', 'amount' => '2499']) }}"class="btn btn-info">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2 ">
                        <div class="text-center">
                            <h3 class="text-info ">Platinum (Paid)</h3>
                            <span>INR 9999.</span>
                        </div>

                        <ul class="list">
                            <li><span><i class="fa-solid fa-check"></i> Free Domain For 3 Year </span></li>
                            <li><span><i class="fa-solid fa-check"></i> Unlimited Website Pages</span></li>
                            <li><span><i class="fa-solid fa-check"></i> 2GB Storage Space</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Basic Web Forms</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Online Store (unlimited Products)</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Customizable Web Forms</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Remove Website.com Banner Ads</span></li>
                            <li><span><i class="fa-solid fa-check"></i> Premium Support</span></li>
                            <li><span><i class="fa-solid fa-check"></i> 30-day Money Back Guarantee</span></li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ route('subscribe', ['tier' => 'Platinum', 'amount' => '9999']) }}"
                                class="btn btn-info">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection