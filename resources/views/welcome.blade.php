@extends('app')

@section('body')
<div class="w-[100%] h-[100vh] flex flex-col justify-center md:bg-gray-100">
    <div class="mx-auto bg-white rounded-md md:shadow p-4">
        <div>
            <img src="{{ URL::to('/images/bottles.png') }}" alt="Bottles Image"
            class="max-h-[300px]">
        </div>
        <div class="text-center font-bold text-green-600 text-2xl">
            MODERN BAR
        </div>
        <div class="px-4 mt-3">
            <div class="pt-3">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="@Username" class="w-full border py-2 px-2 rounded">
            </div>
            <div class="">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="*************" class="w-full border py-2 px-2 rounded">
            </div>
            <button class="bg-green-600 hover:opacity-70 text-white py-2 mt-4 w-full rounded-md font-semibold">
                Sigin
            </button>
        </div>
    </div>
</div>
@endsection