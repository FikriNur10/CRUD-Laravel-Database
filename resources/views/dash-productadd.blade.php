<x-app-layout>
    <x-slot name="title">
        {{ __('Add Product') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- input form --}}
                    <form action="/dashboard/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}
                        <div class="mb-6">
                          <label for="code_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product id</label>
                          <input name="code_product" type="text" id="code_product" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Product id" required>
                        </div>
                        <div class="mb-6">
                          <label for="name_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product name</label>
                          <input name="name_product" type="text" id="name_product" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                        </div>
                        <div class="mb-6">
                            <label for="category_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product category</label>
                            <input name="category_product" type="text" id="category_product" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                          </div>
                          <div class="mb-6">
                            <label for="price_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product price</label>
                            <input name="price_product" type="number" id="price_product" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                          </div>
                          <div>
                            <label for="photo_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product photo</label>
                            <input name="photo_product" accept="images/*" type="file" id="photo_product" class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="py-5">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Product</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>