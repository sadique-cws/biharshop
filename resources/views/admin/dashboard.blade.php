@extends('admin.adminbase')


@section('title',"Dashboard |")

@section('content')
<div class="flex flex-1 p-5 flex-col gap-5">
    <div class="flex flex-1">
        <h2 class="border-l-4 border-orange-600 pl-2 text-xl">Statics</h2>
    </div>
    <div class="grid grid-cols-3 gap-5">
        <div class="flex flex-col items-center justify-center bg-slate-100 px-5 py-3 rounded-2xl">
            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
            <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
        </div>
        <div class="flex flex-col items-center justify-center bg-slate-100 px-5 py-3 rounded-2xl">
            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
            <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
        </div>
        <div class="flex flex-col items-center justify-center bg-slate-100 px-5 py-3 rounded-2xl">
            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
            <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
        </div>
       
    </div>

    <div class="flex flex-1">
        <h2 class="border-l-4 border-orange-600 pl-2 text-xl">Recent Orders</h2>
    </div>

    {{-- recent order area --}}
    

<div class="relative overflow-x-auto">
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
    <th scope="col" class="px-6 py-3">
        Product name
    </th>
    <th scope="col" class="px-6 py-3">
        Color
    </th>
    <th scope="col" class="px-6 py-3">
        Category
    </th>
    <th scope="col" class="px-6 py-3">
        Price
    </th>
</tr>
</thead>
<tbody>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        Apple MacBook Pro 17"
    </th>
    <td class="px-6 py-4">
        Silver
    </td>
    <td class="px-6 py-4">
        Laptop
    </td>
    <td class="px-6 py-4">
        $2999
    </td>
</tr>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        Microsoft Surface Pro
    </th>
    <td class="px-6 py-4">
        White
    </td>
    <td class="px-6 py-4">
        Laptop PC
    </td>
    <td class="px-6 py-4">
        $1999
    </td>
</tr>
<tr class="bg-white dark:bg-gray-800">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        Magic Mouse 2
    </th>
    <td class="px-6 py-4">
        Black
    </td>
    <td class="px-6 py-4">
        Accessories
    </td>
    <td class="px-6 py-4">
        $99
    </td>
</tr>
</tbody>
</table>
</div>

</div>
@endsection