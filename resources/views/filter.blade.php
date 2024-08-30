@extends('layout')

@section('title')
    
@endsection

@section('content')
   

    <div class="w-full flex flex-1 flex-col px-[5%] py-5">
       
        <x-category-navbar/>    



        <div class="flex flex-1">
            <h2 class="border-l-4 border-orange-600 pl-2 text-xl">{{$category->cat_title}}</h2>
        </div>

       <div class="grid grid-cols-4 gap-5 mt-5">
          @foreach ($category->products as $product)
          <x-product-card :product="$product"/>  
          @endforeach
            
       </div>
    </div>
@endsection