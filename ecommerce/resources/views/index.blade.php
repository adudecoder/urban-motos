@extends('layouts.default')

@section('content')
    {{-- {{ dd($products) }} --}}
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            {{-- <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://www.revzilla.com/product_images/0170/4246/dynojet_power_commander_v_750x750.jpg"> --}}
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ $product->cover }}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                            <p class="mt-1">${{ $product->price }}</p>
                        </div>
                        <a href="{{ route('product', $product->slug) }}" class="mt-3 text-indigo-500 inline-flex items-center">Read More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0893/1126/akrapovic_slip_on_exhausts_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Akrapovic Slip-On Exhausts</h2>
                        {{-- <p class="mt-1">$493.16</p>
                        <span class="mny"><span class="mny__c">$</span>493<sup class="mny__s">.</sup><sup>16</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0080/0742/yuasa_agm_battery_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Yuasa AGM Battery</h2>
                        <span class="mny"><span class="mny__c">$</span>53<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0130/4326/yoshimura_r77_slip_on_exhaust_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Yoshimura R77 Slip-On Exhaust</h2>
                        <span class="mny"><span class="mny__c">$</span>343<sup class="mny__s">.</sup><sup>96</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0292/1300/akrapovic_gp_slip_on_exhaust_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Akrapovic GP Slip-On Exhaust </h2>
                        <span class="mny"><span class="mny__c">$</span>347<sup class="mny__s">.</sup><sup>88</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0086/1626/tech_spec_snake_skin_tank_pads_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">TechSpec Snake Skin Tank Pads</h2>
                        <span class="mny"><span class="mny__c">$</span>21<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0290/2517/vortex_v3_wss_chainand_sprocket_kit_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Vortex V3 WSS Chain And Sprocket Kit</h2>
                        <span class="mny"><span class="mny__c">$</span>167<sup class="mny__s">.</sup><sup>19</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://www.revzilla.com/product_images/0285/8715/kn_oil_filters_300x300.jpg">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">K&N Oil Filters</h2>
                        <span class="mny"><span class="mny__c">$</span>10<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                    </div>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
