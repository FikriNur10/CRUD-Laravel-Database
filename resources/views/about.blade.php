@extends('layouts.main_home')
@section('container')
<section class="team-section p-5">

    <h1 class="text-5xl font-semibold leading-10 text-gray-800 dark:text-white text-center">Meet our team</h1>
    <div class="flex flex-wrap items-stretch xl:justify-between justify-center mt-16 xl:gap-6 gap-4">
        <div class="lg:w-96 w-80">
            <img src="https://data.whicdn.com/images/349748916/original.jpg" class="h-72 w-full object-cover object-center rounded-t-md" alt="woman smiling" />
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-b-md py-4 text-center">
                <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">Fikri Nur Diega</p>
                <p class="text-base leading-6 mt-2 text-gray-800 dark:text-white">31200102</p>
            </div>
        </div>

        <div class="bg-indigo-700 rounded-md lg:w-96 w-80 flex flex-col items-center justify-center md:py-0 py-12">
            <h3 class="text-2xl font-semibold leading-6 text-center text-white">About Team</h3>
            <p class="lg:w-80 lg:px-0 px-4 text-base leading-6 text-center text-white mt-6">
                Teamwork is the collaborative effort of a team to achieve a common goal or to complete task in the most effective way. This concept is seen in the greater framework of a team in which indipendent indiviuals who work together towards common goal basic requirement for effective team 
                and company
            </p>
        </div>

        <div class="lg:w-96 w-80">
            <img src="https://wallpapercave.com/uwp/uwp1051737.jpeg" class="h-72 w-full object-cover object-center rounded-t-md" alt="woman in black dress" />
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-b-md py-4 text-center">
                <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">Jeremy Susanto</p>
                <p class="text-base leading-6 mt-2 text-gray-800 dark:text-white">31200066</p>
            </div>
        </div>
        <div class="lg:w-96 w-80">
            <img src="https://pbs.twimg.com/profile_images/1326638394303270914/9HyNv-3P_400x400.jpg" class="h-72 w-full object-cover object-center rounded-t-md" alt="woman smiling" />
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-b-md py-4 text-center">
                <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">Wilson Chandra</p>
                <p class="text-base leading-6 mt-2 text-gray-800 dark:text-white">3120056</p>
            </div>
        </div>
        
        
    </div>

</section>
@endsection