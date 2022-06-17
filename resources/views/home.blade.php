@extends('layouts.main_home')
@section('container')
{{-- hero section --}}
<section class="">
    <div class="dark:bg-gray-900">
        <div class="container mx-auto py-9 md:py-12 lg:py-24">
            <div class="relative mx-4">
                <img src="/images/HeroImage-Poster.svg" alt="A work table with house plants" role="img" class="w-full h-full hidden lg:block" />
                <img src="/images/HeroImage-Poster.svg" alt="A work table with house plants" role="img" class="hidden sm:block lg:hidden w-full h-full" />
                <img src="/images/HeroImage-Poster.svg" alt="A work table with house plants" role="img" class="sm:hidden w-full h-full" />

                <div class="absolute z-10 top-0 left-0 mx-4 sm:mx-0 mt-36 sm:mt-0 sm:py-20 md:py-28 lg:py-20 xl:py-28 sm:pl-14 flex flex-col sm:justify-start items-start">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-white sm:w-8/12">Always Ada for your pet</h1>
                    <p class="text-base leading-normal text-white mt-4 sm:mt-5 sm:w-5/12">Your pet is our responsibility so don't hesitate.</p>
                    <a href="/product" class="hidden sm:flex bg-gray-800 py-4 px-8 text-base font-medium text-white mt-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700">Explore</a>
                </div>
                <a href="/product" class="absolute bottom-0 sm:hidden dark:bg-white dark:text-gray-800 bg-gray-800 py-4 text-base font-medium text-white mt-8 flex justify-center items-center w-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700">Explore</a>
            </div>
        </div>
    </div>
</section>
{{-- end hero section --}}
{{-- highlight --}}
<section class="highlight-section px-5">
    <div class="2xl:container 2xl:mx-auto md:py-12 py-9">
        <div class="bg-gray-50 dark:bg-gray-800 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-12 gap-14 lg:px-20 lg:py-12 py-10 md:px-12 px-4">
            <!-- Delivery grid Card -->
            <div class="">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1.svg" alt="delivery">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1dark.svg" alt="delivery">
                <h3 class="text-xl leading-5 dark:text-white font-semibold text-gray-800 lg:mt-10 mt-8">Delivery</h3>
                <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Free worldwide delivery over orders above $100</p>
            </div>

            <!-- customer Grid Card -->

            <div class="">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2.svg" alt="Customer Care">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2dark.svg" alt="Customer Care">
                <h3 class="text-xl leading-5 dark:text-white font-semibold text-gray-800 lg:mt-10 mt-8">Customer Care</h3>
                <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Our customer care is available 24/7 at <span class="font-semibold cursor-pointer">+495-589-509</span> and <span class="font-semibold cursor-pointer">customercare@gmail.com</span></p>
            </div>

            <!-- Recycle Grid Card -->

            <div class="">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3.svg" alt="Recycle">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3dark.svg" alt="Recycle">
                <h3 class="text-xl leading-5 dark:text-white font-semibold text-gray-800 lg:mt-10 mt-8">Recycle</h3>
                <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">All out products are 100 percent recycable</p>
            </div>

            <!-- Secure Payment Card -->

            <div class="">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4.svg" alt="Secure Payment">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4dark.svg" alt="Secure Payment">
                <h3 class="text-xl leading-5 dark:text-white font-semibold text-gray-800 lg:mt-10 mt-8">Secure Payment</h3>
                <p class="text-base leading-6 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Transaction process has end to end encryption</p>
            </div>
        </div>
    </div>
</section>
{{-- end highlight --}}
{{-- about section --}}
<section class="about-section px-5" id="about">
   
    <div class="mx-auto container flex justify-center items-center py-12 px-4 sm:px-6 2xl:px-0">
        <div class="flex flex-col lg:flex-row justify-center items-center space-y-6 lg:space-y-0">
            <div class="w-80 sm:w-auto flex flex-col justify-start items-start">
                <div>
                    <p class="text-3xl xl:text-4xl font-semibold leading-9 text-gray-800 dark:text-white">Best Choice for your pet</p>
                </div>
                <div class="mt-4 lg:w-4/5 xl:w-3/5">
                    <p class="text-base leading-6 text-gray-600 dark:text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <div class="mt-16 w-full">
                    <a href="/product"class="px-4 bg-gray-900 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-200  flex justify-between items-center w-full lg:w-72 h-14 text-white hover:bg-gray-700 focus:ring-2 outline-none focus:ring-offset-2 focus:ring-gray-800>
                        <p class= "text-xl font-medium leading-5"> See More</p>
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-III-svg1.svg" alt="arrow">
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-III-svg1dark.svg" alt="arrow">
                    </a>
                </div>
            </div>
  
            <div class="flex flex-col sm:flex-row jusitfy-center items-center sm:space-x-5 xl:space-x-8 space-y-4 sm:space-y-0">
                <div class="">
                    <img class="hidden lg:block" src="https://jejakpiknik.com/wp-content/uploads/2021/07/grosir-petshop-solo.jpg" alt="sofa" />
                    <img class="w-80 sm:w-auto lg:hidden" src="https://i.ibb.co/QvxmJjB/olena-sergienko-gx-KL334b-UK4-unsplash-1-1.png" alt="sofa" />
                </div>
                <div class="flex flex-col justify-center items-center space-y-4 sm:space-y-0 lg:space-y-5 xl:space-y-8">
                    <div>
                        <img class="hidden lg:block" src="https://assets.petpintar.com/cache/720/720/article/509/1653880956-pet-shop-di-bekasi-banner-update.jpg" alt="chairs" />
                        <img class="w-80 sm:w-auto lg:hidden" src="https://i.ibb.co/r0rvcCh/behzad-ghaffarian-nh-Wg-ZNV85-LQ-unsplash-1-1-1.png" alt="chairs" />
                    </div>
                    <div>
                        <img class="hidden lg:block" src="https://media.istockphoto.com/photos/portrait-of-man-with-beloved-dog-in-pet-shop-picture-id1301071009?b=1&k=20&m=1301071009&s=170667a&w=0&h=KYOzibOEMGu6Qn-uvtE4Va5VBTVJTbVMqUCYFi-HVlY=" alt="chairs" />
                        <img class="w-80 sm:w-auto lg:hidden" src="https://i.ibb.co/0BFt400/nirzar-pangarkar-Csw-Kf-D546-Z8-unsplash-2.png" alt="chairs" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection