@extends('app')

@section('body')

<div class="shadow w-full">
    <div class="w-full lg:w-[98%] xl:w-[95%] px-3 flex justify-between items-center">
        <a href="#" class="flex items-center">
            <img src="{{ URL::to('/images/bottles.png') }}" alt="Bottles Img"
            class="h-20">
            <div class="ml-2 font-bold text-green-600 text-2xl">
                MODERN BAR
            </div>
        </a>

        <a href="#" class="flex items-center text-green-600">
            <i class="fas fa-user text-xl"></i>
            <div class="ml-2 text-lg font-medium">Admin</div>
        </a>
    </div>
</div>

<div class="flex w-full lg:w-[98%] xl:w-[95%] min-h-[90vh]">

    <div class="shrink-0 p-3 mt-2 hidden md:inline">
        <div class="flex flex-col">
            <a href="#" class="border py-3 px-4 rounded bg-green-200">
                <i class="fa fa-home mr-1"></i>
                Dashboard.
            </a>
            <a href="#" class="border mt-2 py-3 px-4 rounded hover:bg-green-200">
                <i class="fa fa-wine-glass mr-1"></i>
                Add Stock
            </a>
            <a href="#" class="border mt-2 py-3 px-4 rounded hover:bg-green-200">
                <i class="fa fa-wine-glass-alt mr-1"></i>
                Sell Stock
            </a>
            <a href="#" class="border mt-2 py-3 px-4 rounded hover:bg-green-200">
                <i class="fa fa-user-plus mr-1"></i>
                Add User
            </a>
            <a href="#" class="border mt-2 py-3 px-4 rounded hover:bg-green-200">
                <i class="fa fa-wine-bottle mr-1"></i>
                View Stock
            </a>
            <a href="#" class="border mt-2 py-3 px-4 rounded hover:bg-green-200">
                <i class="fa fa-users mr-1"></i>
                View Users
            </a>

            <a href="#" class="border text-red-600 mt-2 py-3 px-4 rounded hover:bg-red-200">
                <i class="fa fa-sign-out mr-1"></i>
                Logout
            </a>
        </div>

    </div>


    <div class="flex-grow px-3"> 

        @yield('content')

    </div>


   

</div>



@endsection