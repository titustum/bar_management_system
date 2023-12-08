@extends('admin')

@section('content')

<div class="mt-6 ">
    <div class="text-3xl font-bold">Add Stock.</div>

    <form method="post" action="{{ URL::to('/stock/create') }}" class="px-4 mt-3 max-w-[1000px]">

        @if(Session::has('success'))
        <div class="py-3 px-2 bg-green-200 rounded text-green-600">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::has('errors'))
        <div class="py-3 px-2 bg-red-200 rounded text-red-600">
            {{ Session::get('error') }}
        </div>
        @endif

        @csrf
        <input type="hidden" name="addedby" value="1">
        <div class="pt-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" placeholder="e.g 500Ml Chrome" class="w-full border py-2 px-2 rounded">
        </div>
        <div class="mt-2">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" placeholder="e.g. 20" min="1" class="w-full border py-2 px-2 rounded">
        </div>
        <div class="mt-2">
            <label for="buying_price">Buying Price Per Item (Ksh)</label>
            <input type="number" name="buying_price" placeholder="e.g. 500" min="10" class="w-full border py-2 px-2 rounded">
        </div>
        <div class="mt-2">
            <label for="selling_price">Selling Price Per Item (Ksh)</label>
            <input type="number" name="selling_price" placeholder="e.g. 500" min="10" class="w-full border py-2 px-2 rounded">
        </div>
        <div class="mt-2">
            <label for="category">Category</label>
            <input type="text" name="category" placeholder="e.g. beer" class="w-full border py-2 px-2 rounded">
        </div>
        <button class="bg-green-600 hover:opacity-70 text-white py-2 mt-4 w-full rounded-md font-semibold">
            Submit New Stock
        </button>
    </form>
</div>

@endsection