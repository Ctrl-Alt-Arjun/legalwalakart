@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- Hero Section --}}
<section class="relative w-full min-h-[731px] overflow-hidden">
    {{-- Hero Gradient Background --}}
    <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#0b2b4a] via-[#0f3c66] to-[#081e33]"></div>

    <div class="container mx-auto px-28 py-20">
        <div class="grid grid-cols-2 gap-16 items-center">
            {{-- Hero Content --}}
            <div class="flex flex-col gap-9">
                <div class="flex flex-col gap-3">
                    <h1 class="text-5xl font-bold leading-[60px] tracking-[-1.04px] text-white">
                        Your Supercharged Design Workflow.
                    </h1>
                    <p class="text-lg leading-[26px] tracking-[-0.18px] text-white/80">
                        We've been told it is possible to revolutionize the payment industry. We have not reinvented the wheel, we decided to build upon it - successfully. We've been told it is possible to revolutionize the payment industry.
                    </p>
                </div>
                
                {{-- Search Bar --}}
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm flex items-center gap-3 pl-4 pr-2 py-2">
                    <svg class="w-4.5 h-4.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Input search query..." class="flex-1 text-sm font-medium text-gray-500 focus:outline-none">
                    <button class="bg-[#0b2b4a] text-white px-4 py-2.5 rounded-md text-sm font-semibold shadow-sm">
                        Search Now
                    </button>
                </div>
            </div>

            {{-- Quote Form --}}
            <div class="bg-white border border-gray-200 rounded-[10px] shadow-sm">
                <div class="bg-gray-50 px-12 py-6 rounded-t-[10px]">
                    <h2 class="text-[32px] font-semibold leading-[44px] text-center text-black">
                        Get Quote Instantly in a Minute!
                    </h2>
                </div>
                
                <form class="flex flex-col gap-6 px-12 py-0">
                    {{-- Name Field --}}
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium text-gray-900 tracking-[-0.1px]">Name</label>
                        <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                            <input type="text" value="Bryan Koelpin" class="flex-1 text-sm font-medium text-gray-900 focus:outline-none bg-transparent">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Email Field --}}
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-medium text-gray-900 tracking-[-0.1px]">Email*</label>
                        <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                            <input type="email" placeholder="Email Address" class="flex-1 text-sm font-normal text-gray-500 focus:outline-none bg-transparent">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-sm font-normal text-gray-500 tracking-[-0.1px]">Input your email address</p>
                    </div>

                    {{-- Password Section (City & Looking for) --}}
                    <div class="flex gap-4">
                        <div class="flex-1 flex flex-col gap-2">
                            <label class="text-sm font-medium text-gray-900 tracking-[-0.1px]">City</label>
                            <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                                <input type="text" placeholder="Password" class="flex-1 text-sm font-normal text-gray-500 focus:outline-none bg-transparent">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="text-sm font-normal text-gray-500 tracking-[-0.1px]">Please enter your password</p>
                        </div>
                        <div class="flex-1 flex flex-col gap-2">
                            <label class="text-sm font-medium text-gray-900 tracking-[-0.1px]">Looking for?</label>
                            <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                                <input type="text" placeholder="Choose an option" class="flex-1 text-sm font-normal text-gray-500 focus:outline-none bg-transparent">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="text-sm font-normal text-gray-500 tracking-[-0.1px]">Passwords need to match</p>
                        </div>
                    </div>

                    {{-- Checkbox --}}
                    <div class="flex gap-2 items-center">
                        <input type="checkbox" id="terms" checked class="w-5 h-5 rounded-md bg-[#0b2b4a] border-[#0b2b4a]">
                        <label for="terms" class="text-base font-medium text-gray-700 tracking-[-0.16px]">
                            I accept the Terms and Privacy Policy
                        </label>
                    </div>
                </form>

                {{-- CTA Button --}}
                <div class="bg-gray-50 px-12 py-4 rounded-b-[10px]">
                    <button class="w-full bg-[#0b2b4a] text-white px-5 py-3 rounded-md text-[15px] font-semibold shadow-sm flex items-center justify-center gap-1.5">
                        Get Started Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Features Section --}}
<section class="bg-white py-16 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-4 mb-16">
            <h2 class="text-[32px] font-bold leading-[40px] tracking-[-0.48px] text-gray-900 text-center max-w-[800px]">
                India's largest tax and financial services platform
            </h2>
            <p class="text-lg leading-[26px] tracking-[-0.18px] text-gray-500 text-center max-w-[800px]">
                Here's a quick overview of our main features and what we have to offer. For more in-depth reviews, browse around our website and articles.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-8 mb-16">
            {{-- Feature 1 --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm flex flex-col gap-6 p-8 h-[332px]">
                <div class="bg-[#0b2b4a] w-14 h-14 rounded-md flex items-center justify-center shadow-sm">
                    <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-gray-900">Wireless</h3>
                    <p class="text-base leading-[24px] tracking-[-0.16px] text-gray-500">
                        Rest easy knowing your data is protected with robust security measures, including encryption, secure user access.
                    </p>
                </div>
                <button class="bg-white border border-gray-200 rounded-md px-5 py-3 text-[15px] font-semibold text-gray-900 shadow-sm flex items-center gap-1.5 w-fit">
                    Show more
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm flex flex-col gap-6 p-8 h-[332px]">
                <div class="bg-[#0b2b4a] w-14 h-14 rounded-md flex items-center justify-center shadow-sm">
                    <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-gray-900">Synergistic</h3>
                    <p class="text-base leading-[24px] tracking-[-0.16px] text-gray-500">
                        Scale your operations effortlessly as your business grows, with a flexible SaaS solution
                    </p>
                </div>
                <button class="bg-white border border-gray-200 rounded-md px-5 py-3 text-[15px] font-semibold text-gray-900 shadow-sm flex items-center gap-1.5 w-fit">
                    Show more
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            {{-- Feature 3 --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm flex flex-col gap-6 p-8 h-[332px]">
                <div class="bg-[#0b2b4a] w-14 h-14 rounded-md flex items-center justify-center shadow-sm">
                    <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-gray-900">Distributed</h3>
                    <p class="text-base leading-[24px] tracking-[-0.16px] text-gray-500">
                        Receive exceptional customer support from a dedicated team of experts who are ready to assist you with any inquiries
                    </p>
                </div>
                <button class="bg-white border border-gray-200 rounded-md px-5 py-3 text-[15px] font-semibold text-gray-900 shadow-sm flex items-center gap-1.5 w-fit">
                    Show more
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex justify-center">
            <button class="bg-[#0b2b4a] text-white px-5 py-3 rounded-md text-[15px] font-semibold shadow-sm">
                Reveal all channels
            </button>
        </div>
    </div>
</section>

{{-- Testimonial Bar Section --}}
<section class="bg-white py-16 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="flex gap-12 items-center">
            {{-- Avatars --}}
            <div class="flex-1 flex flex-col gap-4 items-center">
                <div class="flex items-center gap-2 -space-x-2">
                    <div class="w-9 h-9 rounded-full border-2 border-white overflow-hidden">
                        <img src="https://via.placeholder.com/36" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                    <div class="w-9 h-9 rounded-full border-2 border-white overflow-hidden">
                        <img src="https://via.placeholder.com/36" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                    <div class="w-9 h-9 rounded-full border-2 border-white overflow-hidden">
                        <img src="https://via.placeholder.com/36" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                    <div class="w-9 h-9 rounded-full border-2 border-white overflow-hidden">
                        <img src="https://via.placeholder.com/36" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                </div>
                <p class="text-base font-medium leading-[24px] tracking-[-0.16px] text-gray-900 text-center">
                    Constantly rated as a top UX design product & service
                </p>
            </div>

            {{-- Divider --}}
            <div class="w-px h-[93px] bg-gray-200"></div>

            {{-- Stars --}}
            <div class="flex-1 flex flex-col gap-6 items-center">
                <div class="flex gap-1">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-7 h-7 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-base font-medium leading-[24px] tracking-[-0.16px] text-gray-900 text-center">
                    4.5 out of 5 stars from 123 reviews from our users
                </p>
            </div>

            {{-- Divider --}}
            <div class="w-px h-[93px] bg-gray-200"></div>

            {{-- Icons --}}
            <div class="flex-1 flex flex-col gap-4 items-center">
                <div class="flex gap-2">
                    <div class="w-7 h-7 bg-blue-500 rounded"></div>
                    <div class="w-7 h-7 bg-blue-500 rounded"></div>
                    <div class="w-7 h-7 bg-blue-500 rounded"></div>
                </div>
                <p class="text-base font-medium leading-[24px] tracking-[-0.16px] text-gray-900 text-center">
                    Various payment and purchase options for our customers
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Left to Right Section --}}
<section class="bg-gradient-to-r from-[#0b2b4a] from-[33.173%] to-[#1a66b0] py-16 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 gap-36 items-center">
            {{-- Left: Image/Cards --}}
            <div class="bg-white rounded-[20px] shadow-lg p-10">
                <div class="relative h-44 mb-4">
                    <img src="https://via.placeholder.com/520x176" alt="Dashboard" class="w-full h-full object-cover rounded-[20px]">
                </div>
                {{-- Top Cards --}}
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-white border border-gray-200 rounded-[10px] p-4 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2.5">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <span class="text-sm font-medium text-gray-900">Slack</span>
                            </div>
                            <div class="w-5 h-5 bg-gray-300 rounded"></div>
                        </div>
                        <p class="text-[28px] font-bold leading-[36px] tracking-[-0.42px] text-gray-900">$852.00</p>
                        <div class="mt-2">
                            <span class="bg-gray-100 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded-full">Offline</span>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-[10px] p-4 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2.5">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <span class="text-sm font-medium text-gray-900">Slack</span>
                            </div>
                            <div class="w-5 h-5 bg-gray-300 rounded"></div>
                        </div>
                        <p class="text-[28px] font-bold leading-[36px] tracking-[-0.42px] text-gray-900">$852.00</p>
                        <div class="mt-2">
                            <span class="bg-gray-100 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded-full">Offline</span>
                        </div>
                    </div>
                </div>
                {{-- Bottom Cards --}}
                <div class="space-y-4">
                    <div class="bg-white border border-gray-200 rounded-[10px] p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <div>
                                    <p class="text-base font-semibold text-gray-900">Erica Harris</p>
                                    <p class="text-sm font-medium text-gray-500">Tactics Director</p>
                                </div>
                            </div>
                            <p class="text-lg font-semibold text-green-600">32%</p>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-[10px] p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <div>
                                    <p class="text-base font-semibold text-gray-900">Armando Hodkiewicz</p>
                                    <p class="text-sm font-medium text-gray-500">Chief Producer</p>
                                </div>
                            </div>
                            <p class="text-lg font-semibold text-green-600">32%</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Features --}}
            <div class="flex-1">
                <div class="grid grid-cols-2 gap-12">
                    <div class="flex flex-col gap-4">
                        <div class="w-7 h-7 bg-white/20 rounded flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-white">Great Design</h3>
                            <p class="text-base leading-[24px] tracking-[-0.16px] text-blue-100">
                                Stay up to date with the latest features, enhancements, and fixes
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="w-7 h-7 bg-white/20 rounded flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-white">Easy to Use</h3>
                            <p class="text-base leading-[24px] tracking-[-0.16px] text-blue-100">
                                Effortlessly integrate our SaaS product with your existing systems
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="w-7 h-7 bg-white/20 rounded flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-white">Happy Customers</h3>
                            <p class="text-base leading-[24px] tracking-[-0.16px] text-blue-100">
                                Tailor the SaaS product to fit your unique business processes.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="w-7 h-7 bg-white/20 rounded flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-white">Streamlined</h3>
                            <p class="text-base leading-[24px] tracking-[-0.16px] text-blue-100">
                                Gain valuable insights and make data-driven decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Tags Section --}}
<section class="bg-white py-16 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-4 mb-16">
            <h2 class="text-[32px] font-bold leading-[40px] tracking-[-0.48px] text-gray-900 text-center max-w-[800px]">
                India's largest tax and financial services platform
            </h2>
            <p class="text-lg leading-[26px] tracking-[-0.18px] text-gray-500 text-center max-w-[800px]">
                Here's a quick overview of our main features and what we have to offer. For more in-depth reviews, browse around our website and articles.
            </p>
        </div>

        {{-- Tags Grid --}}
        <div class="flex flex-wrap gap-4 justify-center">
            @for($i = 0; $i < 18; $i++)
                <span class="bg-blue-50 text-blue-600 px-2.5 py-0.5 rounded-full text-sm font-semibold tracking-[-0.1px]">
                    1% OF THE INDUSTRY
                </span>
            @endfor
        </div>
    </div>
</section>

{{-- Client Success Stories Section --}}
<section class="bg-blue-50 py-36 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-4 mb-12">
            <p class="text-sm font-medium leading-5 text-blue-600 tracking-[0.84px] uppercase">Testimonial</p>
            <h2 class="text-5xl font-bold leading-[60px] text-gray-900 text-center">
                Client Success Stories
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-8">
            @for($i = 0; $i < 3; $i++)
                <div class="bg-white rounded-[45px] p-8 shadow-lg flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/136x24" alt="Rating" class="h-6">
                        </div>
                        <p class="text-lg leading-6 text-gray-800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="relative w-12 h-12">
                            <div class="w-12 h-12 rounded-full bg-blue-200 flex items-center justify-center">
                                <span class="text-lg font-semibold text-blue-50">MW</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-800">Maxin Will</p>
                            <p class="text-lg text-gray-600">Product Manager</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

{{-- Blog Posts Section --}}
<section class="bg-white py-16 px-28">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-4 mb-16">
            <h2 class="text-[32px] font-bold leading-[40px] tracking-[-0.48px] text-gray-900 text-center max-w-[800px]">
                Latest Blog Posts
            </h2>
            <p class="text-lg leading-[26px] tracking-[-0.18px] text-gray-500 text-center max-w-[800px]">
                Here's a quick glance over our latest blog posts and media articles written by our team members, staff and guest writers.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-8 mb-16">
            @php
                $blogPosts = [
                    ['title' => 'Organize your digital assets with a new methodology.', 'category' => 'Article', 'desc' => "In today's digital age, managing and organizing an ever-expanding array of digital assets can be a daunting task."],
                    ['title' => 'Faster ways to reach your customers and their needs.', 'category' => 'Guide', 'desc' => 'In a rapidly evolving business landscape, the ability to connect with customers quickly and effectively is paramount.'],
                    ['title' => 'Gestalt psychology in UI/UX design and beyond.', 'category' => 'Interview', 'desc' => 'Gestalt psychology, a groundbreaking theory that examines how humans perceive and interpret visual information.']
                ];
            @endphp

            @foreach($blogPosts as $post)
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden flex flex-col">
                    <div class="relative h-[250px]">
                        <img src="https://via.placeholder.com/384x250" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
                        <div class="absolute bottom-[-24px] right-8 w-12 h-12 rounded-full bg-white shadow-lg border border-gray-200"></div>
                    </div>
                    <div class="flex flex-col gap-6 p-8 mt-6">
                        <div class="flex flex-col gap-5">
                            <div>
                                <span class="bg-blue-50 text-[#0b2b4a] px-3 py-1 rounded-full text-base font-medium tracking-[-0.16px]">
                                    {{ $post['category'] }}
                                </span>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-[22px] font-bold leading-[30px] tracking-[-0.22px] text-gray-900">
                                    {{ $post['title'] }}
                                </h3>
                                <p class="text-base leading-6 tracking-[-0.16px] text-gray-500">
                                    {{ $post['desc'] }}
                                </p>
                            </div>
                        </div>
                        <a href="#" class="flex items-center gap-1.5 text-[#0b2b4a] text-[15px] font-semibold w-fit">
                            Learn more
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center">
            <button class="bg-[#0b2b4a] text-white px-5 py-3 rounded-md text-[15px] font-semibold shadow-sm">
                View All
            </button>
        </div>
    </div>
</section>

{{-- Newsletter Section --}}
<section class="bg-[#0b2b4a] py-16 px-28">
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col gap-8 items-center">
            <div class="flex flex-col gap-4 items-center text-center max-w-[752px]">
                <h2 class="text-[32px] font-bold leading-[40px] tracking-[-0.48px] text-white">
                    Welcome to your new digital reality
                </h2>
                <p class="text-base leading-6 tracking-[-0.16px] text-blue-100">
                    Let us help you take you from zero to serious business and beyond. Our no-strings attached free trial lets you test our product today.
                </p>
            </div>
            
            <div class="flex gap-4 items-start w-full max-w-[752px]">
                <div class="flex-1 flex flex-col gap-2">
                    <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                        <input type="email" placeholder="Enter your email" class="flex-1 text-sm font-normal text-gray-500 focus:outline-none bg-transparent">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="bg-gray-50 border border-gray-200 rounded-md flex items-center gap-2 h-[46px] px-3">
                        <input type="text" placeholder="Enter your name" class="flex-1 text-sm font-normal text-gray-500 focus:outline-none bg-transparent">
                    </div>
                </div>
                <button class="bg-[#eea23e] text-white px-5 py-3 rounded-md text-[15px] font-semibold leading-[22px] shadow-sm hover:bg-[#d8912f] transition-colors">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
