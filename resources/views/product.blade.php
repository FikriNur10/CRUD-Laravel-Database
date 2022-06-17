@extends('layouts.main_home')
@section('container')
{{-- carousel --}}
<section class="py-5">
    <div id="default-carousel" class="relative" data-carousel="static">

        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                data-carousel-item="">
                <span
                    class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                    Slide</span>
                <img src="/images/carousel/Welcome-Poster.svg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <img src="/images/carousel/NewUserPromo-Poster.svg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                data-carousel-item="">
                <img src="/images/carousel/HeyJune-Poster.svg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>

        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>

        <button type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</section>
{{-- end carousel --}}
{{-- product list --}}
 <section>
<div class="2xl:container 2xl:mx-auto">
    <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
        <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800">THIS JUNE PRODUCT</p>
    </div>
    <div class="py-6 lg:px-20 md:px-6 px-4">
        <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">Home / Product</p>
        <hr class="w-full bg-gray-200 my-6" />

        <div class="flex justify-between items-center">
            <div class="flex space-x-3 justify-center items-center text-gray-800 dark:text-white">
              <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1.svg" alt="toggler">
              <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1dark.svg

" alt="toggler">
                <p class="font-normal text-base leading-4 text-gray-800 dark:text-white">Filter</p>
            </div>
            <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-600 dark:text-gray-300">Showing products</p>
        </div>

        <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
          @foreach($data as $item)
            <div class="relative">
                <div class="bg-white bg-opacity-50 absolute top-0 right-0 px-2 py-1"><p class="text-white fonr-normal text-base leading-4">XS , S , M , L</p></div>
                <div class="relative group">
                    <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
                    <img class="w-full" src="{{ asset('ada-photo-product/'.$item -> photo_product) }}" alt="A girl wearing white suit and googgles" />
                    <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                        <button class="dark:bg-gray-800 dark:text-gray-300 font-medium text-base leading-4 text-gray-800 bg-white py-3 w-full">Add to bag</button>
                        <button class="bg-transparent font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-white">Quick View</button>
                    </div>
                </div>
                <p class="font-normal dark:text-white text-xl leading-5 text-gray-800 md:mt-6 mt-4">{{ $item -> name_product }}</p>
                <p class="font-semibold dark:text-gray-300 text-xl leading-5 text-gray-800 mt-4">Rp.{{ $item -> price_product }}</p>
            </div>
            @endforeach
           
        </div>

        <div class="flex justify-center items-center">
            <button class="hover:bg-gray-700 dark:text-gray-300 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 py-5 md:px-16 md:w-auto w-full lg:mt-28 md:mt-12 mt-10 text-white font-medium text-base leading-4">Load More</button>
        </div>
    </div>
</div>
</section>
@endsection