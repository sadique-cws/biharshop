

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{route('view.product',[
    'category'=>$product->category->cat_title,
    'slug' => $product->slug
    ])}}">
        <img class="rounded-t-lg" src="/images/{{$product->featured_image}}" alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="{{route('view.product',[
    'category'=>$product->category->cat_title,
    'slug' => $product->slug
    ])}}">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
        </a>
       
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900 dark:text-white">₹{{$product->discount_price}} <del class="text-xs text-slate-400">₹{{$product->price}}</del></span>
           
        </div>
    </div>
</div>
