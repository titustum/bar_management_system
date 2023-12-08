@extends('admin')

@section('content')

<div class="grid md:grid-cols-3 mt-6 gap-3">
            <div class="border p-3 text-center rounded">
                <div class="text-3xl font-bold">KSH 206,500</div>
                <div class="mt-1">Total Stock</div>
            </div>
            <div class="border p-3 text-center rounded">
                <div class="text-3xl font-bold">KSH 156,500</div>
                <div class="mt-1">Sold Stock</div>
            </div>
            <div class="border p-3 text-center rounded">
                <div class="text-3xl font-bold">87</div>
                <div class="mt-1">Total Bottles</div>
            </div>
        </div>

        <div class="mt-6">
            <div class="text-3xl font-bold">Recent.</div>

            

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Available
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                250ml Chrome
                            </th>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                Spirits
                            </td>
                            <td class="px-6 py-4">
                                @ Ksh. 250
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                500Ml Sprite
                            </th>
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                Soda
                            </td>
                            <td class="px-6 py-4">
                                @ Ksh. 120
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Captain Morgan
                            </th>
                            <td class="px-6 py-4">
                                24
                            </td>
                            <td class="px-6 py-4">
                                Spirits
                            </td>
                            <td class="px-6 py-4">
                                @ Ksh. 350
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                300ml Tusker
                            </th>
                            <td class="px-6 py-4">
                                13
                            </td>
                            <td class="px-6 py-4">
                                Beer
                            </td>
                            <td class="px-6 py-4">
                                @ Ksh. 250
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                250ml Gilbeys
                            </th>
                            <td class="px-6 py-4">
                                5
                            </td>
                            <td class="px-6 py-4">
                                Spirits
                            </td>
                            <td class="px-6 py-4">
                                @ Ksh. 500
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
@endsection