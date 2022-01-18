<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel TailwindCSS</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Main css file -->
    <link rel="stylesheet" href="{{asset('assets/css/index.min.css')}}" />

    <!-- https://material.io/resources/icons/?style=baseline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=outline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=round -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=twotone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Licorice">

    <style>
        body {
            font-family: Licorice;
        }

    </style>
</head>

<body class="antialiased">
    <!-- This example requires Tailwind CSS v2.0+ -->
    {{-- NAVIGASI TOP --}}
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <p>TOKOKU</p>
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        All Product
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Bracelet
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Keychain
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Necklace
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Pin
                    </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="#"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900 mr-2 pr-2">
                        <label class="relative block">
                            <span class="sr-only">Search</span>
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <span class="material-icons-outlined">
                                    search
                                </span>
                            </span>
                            <input
                                class="placeholder:italic placeholder:text-gray-400 block bg-white w-full border border-gray-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                placeholder="Search for anything..." type="text" name="search" />
                        </label>
                    </a>

                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Sign in
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden sm:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Analytics
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Engagement
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Security
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/view-grid -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Integrations
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/refresh -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Automations
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Pricing
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Docs
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Help Center
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Guides
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Events
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Security
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing customer?
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTAINER BODY -->

    @yield('container')

    <!-- FOOTER WEBSITE -->
    <br><!--. DARK VERSION BELOW .-->

    <footer class="bg-black text-white">
        <div class="flex flex-wrap">
            <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                <div class="p-8 rounded-xl">
                    <h4 class="mb-2 text-lg font-semibold">Title</h4><a class="text-base"> Link Text</a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                <div class="p-8 rounded-xl">
                    <h4 class="mb-2 text-lg font-semibold">Title</h4><a class="text-base"> Link Text</a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                <div class="p-8 rounded-xl">
                    <h4 class="mb-2 text-lg font-semibold">Title</h4><a class="text-base"> Link Text</a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a><br><a class="text-base"> Link Text </a>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                <div class="p-8 rounded-xl">
                    <h4 class="mb-2 text-lg font-semibold">More Info</h4>
                    <p class="text-base"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed recusandae libero possimus culpa quod </p>
                </div>
            </div>
        </div>
        <hr>
        <!-- <div class="px-12 py-2">
            <p class="text-sm">© 2000 <a href="https://www.pagesection.com/templates">Company Name</a>. All rights reserved</p>
        </div> -->
        
    <div class="flex flex-wrap flex-col items-center px-12 py-2">
        <div class="flex flex-wrap">
            <img class="h-6 w-6 mx-1 rounded-full bg-blue-200"
            alt="Use any sample image here..."
            src="https://www.pagesection.com/images/sample-image-256px.png">
            <img class="h-6 w-6 mx-1 rounded-full bg-blue-200"
            alt="Use any sample image here..." 
            src="https://www.pagesection.com/images/sample-image-256px.png">
            <img class="h-6 w-6 mx-1 rounded-full bg-blue-200" 
            alt="Use any sample image here..." 
            src="https://www.pagesection.com/images/sample-image-256px.png">
        </div>
        <a href="https://www.pagesection.com/templates" 
        class="font-semibold text-sm m-1">Logo</a>
        <span class="text-xs text-gray-500">© 2022. All rights reserved</span>
    </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Main js file -->
    <script type="text/javascript" src="{{asset('assets/js/index.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script>
        function pilihsize(id) {
            console.log(id);

            if (id == 'coba1') {
                $('#coba1').addClass('ring-2 ring-indigo-500');
                $('#coba2').removeClass('ring-2 ring-indigo-500');
                $('#coba3').removeClass('ring-2 ring-indigo-500');
            } else if (id == 'coba2') {
                $('#coba2').addClass('ring-2 ring-indigo-500');
                $('#coba1').removeClass('ring-2 ring-indigo-500');
                $('#coba3').removeClass('ring-2 ring-indigo-500');
            } else if (id == 'coba3') {
                $('#coba3').addClass('ring-2 ring-indigo-500');
                $('#coba2').removeClass('ring-2 ring-indigo-500');
                $('#coba1').removeClass('ring-2 ring-indigo-500');
            }
        }

    </script>
</body>

</html>