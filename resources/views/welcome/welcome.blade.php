@extends('layouts/app_welcome')
@section('container')

    {{-- CAROUSEL --}}
    <div class="relative flex justify-center bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="bg-white">
            <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel"
                data-interval="100">
                <div class="carousel-inner relative w-full overflow-hidden ">
                    <div class="carousel-item active float-left w-full">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full"
                            alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="https://images.unsplash.com/photo-1507443230259-58673ecb9e8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="block w-full" alt="Camera" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="https://images.unsplash.com/photo-1607013408726-ca84bdace8a4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="block w-full"
                            alt="Exotic Fruits" />
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    {{-- FAVORITE PRODUCT --}}
    <div class="grid grid-rows-2 gap-0 justify-center pt-3 my-3">
        <div class="col-span-1">
            ~~~~~~~ <b>Favorite</b>Product ~~~~~~~
        </div>
        <div class="col-span-1 text-center">
            <small>This example requires Tailwind CSS v2.0</small>
        </div>
    </div>
    <div class="container mx-auto px-14">
        <div class="flex flex-wrap -mx-4 ">
            <div class="w-full xs:w-1/2 sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                <a href="{{route('view_product')}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1611235115922-72aece5cf686?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1599357230525-d34c4e3ee6cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1599364911856-2cbe31e7748b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=475&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1613470124212-8d2d0c791b53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- 3 COLOM --}}
    <div class="grid grid-rows-2 gap-0 justify-center pt-3 my-3">
        <div class="col-span-1">
            ~~~~~~~ <b>Favorite</b>Product ~~~~~~~
        </div>
        <div class="col-span-1 text-center">
            <small>This example requires Tailwind CSS v2.0</small>
        </div>
    </div>
    <div class="container mx-auto px-14">
        <div class="grid grid-rows-2 grid-flow-col gap-4">
            <div class="row-span-2 bg-green-400">
                <div class="bg-white w-128 h-full rounded shadow-md flex card text-grey-darkest">
                    <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
                    <div class="w-1/2 flex flex-col">
                        <div class="p-4 pb-0 flex-1">
                            <h3 class="font-light mb-1 text-grey-darkest">Tower Hotel</h3>
                            <div class="text-xs flex items-center mb-4">
                                <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                                Soho, London
                            </div>
                            <span class="text-5xl text-grey-darkest">£63.00<span class="text-lg">/PPPN</span></span>
                            <div class="flex items-center mt-4">
                                <div class="pr-2 text-xs">
                                    <i class="fas fa-wifi text-green"></i> Free WiFi
                                </div>
                                <div class="px-2 text-xs">
                                    <i class="text-grey-darker far fa-building"></i> 2mins to center
                                </div>
                            </div>
                        </div>
                        <div class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                            Book Now
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
                    <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
                    <div class="w-full flex flex-col">
                        <div class="p-4 pb-0 flex-1">
                            <h3 class="font-light mb-1 text-grey-darkest">Tower Hotel</h3>
                            <div class="text-xs flex items-center mb-4">
                                <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                                Soho, London
                            </div>
                            <span class="text-5xl text-grey-darkest">£63.00<span class="text-lg">/PPPN</span></span>
                            <div class="flex items-center mt-4">
                                <div class="pr-2 text-xs">
                                    <i class="fas fa-wifi text-green"></i> Free WiFi
                                </div>
                                <div class="px-2 text-xs">
                                    <i class="text-grey-darker far fa-building"></i> 2mins to center
                                </div>
                            </div>
                        </div>
                        <div class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                            Book Now
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
                    <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
                    <div class="w-1/2 flex flex-col">
                        <div class="p-4 pb-0 flex-1">
                            <h3 class="font-light mb-1 text-grey-darkest">Tower Hotel</h3>
                            <div class="text-xs flex items-center mb-4">
                                <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                                Soho, London
                            </div>
                            <span class="text-5xl text-grey-darkest">£63.00<span class="text-lg">/PPPN</span></span>
                            <div class="flex items-center mt-4">
                                <div class="pr-2 text-xs">
                                    <i class="fas fa-wifi text-green"></i> Free WiFi
                                </div>
                                <div class="px-2 text-xs">
                                    <i class="text-grey-darker far fa-building"></i> 2mins to center
                                </div>
                            </div>
                        </div>
                        <div class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                            Book Now
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAVORITE PRODUCT --}}
    <div class="grid grid-rows-2 gap-0 justify-center pt-3 my-3">
        <div class="col-span-1">
            ~~~~~~~ <b>Latest</b>Product ~~~~~~~
        </div>
        <div class="col-span-1 text-center">
            <small>This example requires Tailwind CSS v2.0</small>
        </div>
    </div>
    <div class="container mx-auto px-14">
        <div class="flex flex-wrap -mx-4 ">
            <div class="w-full xs:w-1/2 sm:w-1/2 md:w-1/2 xl:w-1/3 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1613470124212-8d2d0c791b53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1613470124212-8d2d0c791b53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1613470124212-8d2d0c791b53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                            ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
