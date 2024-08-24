@extends('layout')


@section('content')
    <div class="flex px-[10%] mt-5 gap-5">
        <div class="flex-[0.6]">
            <img src="/images/{{$product->featured_image}}" class="w-full" alt="">
        </div>
        <div class="flex-[1.4]">
            <h1 class="text-2xl font-semibold">{{$product->name}}</h1>
            <p>Category: {{$product->category->cat_title}}</p>
        </div>
    </div>
@endsection