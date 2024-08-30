@extends('layout')

@section('content')

@php
    $total_amount = 0;
    $total_discount = 0;
    $total_discount_amount = 0;
    $total_tax = 0;
    $total_payable = 0;



@endphp
    <div class="flex flex-1 flex-col gap-4 px-[5%] py-5">
        <div class="w-full">
            <h2 class="text-black font-bold text-3xl mb-4">My Cart (3)</h2>
        </div>
        <div class="flex flex-1 gap-5">
            <div class="w-9/12">
{{-- {{$order->orderItems}} --}}
@foreach ($order->orderItems as $item)

@php
    $total_amount += $item->qty * $item->product->price;
    $total_discount_amount += $item->qty * $item->product->discount_price;
    $total_discount = $total_amount - $total_discount_amount;
    $total_tax = $total_discount_amount * 0.18;
    $total_payable = $total_discount_amount + $total_tax;
@endphp
<div class="flex items-center gap-4 mb-3 bg-slate-200 p-3">
    <img class="size-32 rounded-sm" src="/images/{{$item->product->featured_image}}" alt="">
    <div class="font-medium dark:text-white">
        <div>{{$item->product->name}}</div>
        <div class="text-xl font-light">{{$item->product->discount_price}} <del>{{$item->product->price}}</del></div>
        <div class="text-sm mt-5 text-gray-500 dark:text-gray-400">
            <a href="{{route('removeFromCart', $item->product->slug)}}" class="bg-red-500 text-xl  text-white px-3 py-2">-</a>
            <span class="text-xl p-3">{{$item->qty}}</span>
            <a href="{{route('addToCart', $item->product->slug)}}" class=" text-xl bg-green-500 text-white px-3 py-2">+</a>
        </div>
    </div>
</div>
@endforeach
                

            </div>
            <div class="w-3/12">
                

<div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <div aria-current="true"  class="w-full px-4 py-2 font-medium text-left rtl:text-right text-white bg-gray-700 border-b border-gray-200 rounded-t-lg cursor-pointer focus:outline-none dark:bg-gray-800 dark:border-gray-600">
        Price Details
    </div>
    <div class="w-full px-4 py-2 font-medium text-left rtl:text-right border-b border-gray-200 cursor-pointer">
        Total Price 
        <span class="float-end font-normal">Rs. {{$total_amount}}/-</span>
    </div>
    <div class="w-full px-4 py-2 font-medium text-left rtl:text-right border-b border-gray-200 cursor-pointer bg-green-200">
        Total Discount 
        <span class="float-end font-normal">Rs. {{$total_discount}}/-</span>
    </div>
    <div class="w-full px-4 py-2 font-medium text-left rtl:text-right border-b border-gray-200 cursor-pointer">
        Total TAX (GST 18%) 
        <span class="float-end font-normal">Rs. {{$total_tax}}/-</span>
    </div>
    {{-- <div class="w-full px-4 py-2 font-medium bg-orange-200 text-left rtl:text-right border-b border-gray-200 cursor-pointer">
        Total Coupon Discount (FIRST50) 
        <span class="float-end font-normal">Rs. 4000/-</span>
    </div> --}}
    <div class="w-full px-4 py-2 font-medium text-xl text-left rtl:text-right border-b border-gray-200 cursor-pointer">
        Total Payable
        <span class="float-end font-normal">Rs. {{$total_payable}}/-</span>
    </div>
    
</div>

            </div>
        </div>
    </div>
@endsection
