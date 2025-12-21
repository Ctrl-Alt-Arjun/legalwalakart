@extends('layouts.app')

@section('content')
    {{-- Services Page --}}
    {{-- Hero --}}
    <section id="services-hero" class="bg-white flex flex-col items-center px-28 py-16">
        <div class="flex flex-col items-center justify-center max-w-[1280px] w-full">
            <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
                <div class="flex flex-col gap-4 items-center text-center w-full">
                    <h1 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                        Register your company in under 90 minutes!
                    </h1>
                    <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                        Reach out to us with any question or inquiry you have and we'll do our best to get back to you as soon as possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact / Register Form --}}
    <section id="services-form" class="bg-white flex flex-col items-center px-28 py-16">
        <form class="bg-white border border-[#e5e5e7] flex flex-wrap gap-6 items-start p-8 rounded-xl shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-full max-w-[1280px]">
            {{-- First Name --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    First Name
                </label>
                <input type="text" placeholder="Your First Name" class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full text-[15px] font-normal leading-[22px] text-[#858c95] focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]">
            </div>

            {{-- Email --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    Email
                </label>
                <input type="email" placeholder="Email" class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full text-[15px] font-normal leading-[22px] text-[#858c95] focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]">
            </div>

            {{-- Resume --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                    Resume
                </label>
                <div class="border border-[#e5e5e7] flex items-start rounded-md w-full">
                    <div class="bg-[#f8f9fb] border-r border-[#e5e5e7] flex flex-[1_0_0] gap-2 h-[46px] items-center px-4 py-3 rounded-l-md">
                        <span class="flex-1 text-[15px] font-normal leading-[22px] text-[#858c95]">No File Chosen</span>
                    </div>
                    <button type="button" class="bg-white flex gap-1.5 items-center justify-center px-5 py-3 text-[15px] font-semibold leading-[22px] text-[#323539]">
                        Upload
                    </button>
                </div>
            </div>

            {{-- Portfolio --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                    Portfolio
                </label>
                <div class="border border-[#e5e5e7] flex items-start rounded-md w-full">
                    <div class="bg-[#f8f9fb] border-r border-[#e5e5e7] flex flex-[1_0_0] gap-2 h-[46px] items-center px-4 py-3 rounded-l-md">
                        <span class="flex-1 text-[15px] font-normal leading-[22px] text-[#858c95]">No File Chosen</span>
                    </div>
                    <button type="button" class="bg-white flex gap-1.5 items-center justify-center px-5 py-3 text-[15px] font-semibold leading-[22px] text-[#323539]">
                        Upload
                    </button>
                </div>
            </div>

            {{-- Message --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[720px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    Message
                </label>
                <textarea placeholder="Message" rows="5" class="bg-[#f8f9fb] border border-[#e5e5e7] flex h-[124px] items-start px-4 py-3 rounded-md w-full text-[15px] font-medium leading-[22px] text-[#858c95] resize-none focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]"></textarea>
            </div>

            {{-- Footer --}}
            <div class="flex flex-[1_0_0] gap-[292px] items-center min-w-[720px]">
                <p class="flex-1 font-medium leading-[20px] text-[14px] text-[#858c95] tracking-[-0.1px]">
                    Your request will be sent securely and remain private.
                </p>
                <button type="submit" class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] text-[15px] font-semibold leading-[22px] text-white hover:opacity-90 transition-opacity">
                    Send your message
                </button>
            </div>
        </form>
    </section>

    {{-- Pricing Cards --}}
    <section id="services-pricing" class="bg-white flex flex-col items-center px-28 py-16">
        <div class="flex flex-col items-center w-full max-w-[1280px]">
            <div class="flex gap-8 items-end w-full">
                {{-- Card 1: Starter --}}
                <div class="bg-white border border-[#e5e5e7] flex flex-[1_0_0] flex-col gap-8 items-start p-8 rounded-[10px] shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                    <div class="flex flex-col gap-4 items-start w-full">
                        {{-- Price --}}
                        <div class="flex items-baseline w-full">
                            <p class="font-bold leading-[44px] text-[36px] text-[#323539] tracking-[-0.36px]">$25</p>
                            <div class="flex flex-1 flex-row items-baseline">
                                <div class="flex flex-1 flex-col items-start justify-end py-1.5">
                                    <p class="font-normal leading-[28px] text-[20px] text-[#858c95] tracking-[-0.2px]">/month</p>
                                </div>
                            </div>
                        </div>
                        {{-- Content --}}
                        <div class="flex flex-col gap-6 items-start w-full">
                            {{-- Title & Description --}}
                            <div class="flex flex-col gap-2 items-start w-full">
                                <p class="font-medium leading-[28px] text-[20px] text-[#323539] tracking-[-0.2px] w-full">Starter</p>
                                <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">Demonstrate empathy maps and finally improve outcomes.</p>
                            </div>
                            {{-- Divider --}}
                            <div class="h-px w-full border-t border-[#e5e5e7]"></div>
                            {{-- Features --}}
                            <div class="flex flex-col gap-3 items-start w-full">
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">5 watchlists included</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#e5e5e7] rounded-full w-[22px] h-[22px]"></div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Exclusive premium widgets</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#e5e5e7] rounded-full w-[22px] h-[22px]"></div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-full text-[15px] font-semibold leading-[22px] text-[#eea23e]">
                        Buy now
                    </button>
                </div>

                {{-- Card 2: Advanced --}}
                <div class="bg-white border border-[#e5e5e7] flex flex-[1_0_0] flex-col gap-8 items-start p-8 rounded-[10px] shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                    <div class="flex flex-col gap-4 items-start w-full">
                        {{-- Price --}}
                        <div class="flex items-baseline w-full">
                            <p class="font-bold leading-[44px] text-[36px] text-[#323539] tracking-[-0.36px]">$45</p>
                            <div class="flex flex-1 flex-row items-baseline">
                                <div class="flex flex-1 flex-col items-start justify-end py-1.5">
                                    <p class="font-normal leading-[28px] text-[20px] text-[#858c95] tracking-[-0.2px]">/month</p>
                                </div>
                            </div>
                        </div>
                        {{-- Content --}}
                        <div class="flex flex-col gap-6 items-start w-full">
                            {{-- Title & Description --}}
                            <div class="flex flex-col gap-2 items-start w-full">
                                <p class="font-medium leading-[28px] text-[20px] text-[#323539] tracking-[-0.2px] w-full">Advanced</p>
                                <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">Demonstrate empathy maps and finally improve outcomes.</p>
                            </div>
                            {{-- Divider --}}
                            <div class="h-px w-full border-t border-[#e5e5e7]"></div>
                            {{-- Features --}}
                            <div class="flex flex-col gap-3 items-start w-full">
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">5 watchlists included</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Exclusive premium widgets</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#e5e5e7] rounded-full w-[22px] h-[22px]"></div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-full text-[15px] font-semibold leading-[22px] text-[#eea23e]">
                        Buy now
                    </button>
                </div>

                {{-- Card 3: Pro --}}
                <div class="bg-white border border-[#e5e5e7] flex flex-[1_0_0] flex-col gap-8 items-start p-8 rounded-[10px] shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                    <div class="flex flex-col gap-4 items-start w-full">
                        {{-- Price --}}
                        <div class="flex items-baseline w-full">
                            <p class="font-bold leading-[44px] text-[36px] text-[#323539] tracking-[-0.36px]">$75</p>
                            <div class="flex flex-1 flex-row items-baseline">
                                <div class="flex flex-1 flex-col items-start justify-end py-1.5">
                                    <p class="font-normal leading-[28px] text-[20px] text-[#858c95] tracking-[-0.2px]">/month</p>
                                </div>
                            </div>
                        </div>
                        {{-- Content --}}
                        <div class="flex flex-col gap-6 items-start w-full">
                            {{-- Title & Description --}}
                            <div class="flex flex-col gap-2 items-start w-full">
                                <p class="font-medium leading-[28px] text-[20px] text-[#323539] tracking-[-0.2px] w-full">Pro</p>
                                <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">Demonstrate empathy maps and finally improve outcomes.</p>
                            </div>
                            {{-- Divider --}}
                            <div class="h-px w-full border-t border-[#e5e5e7]"></div>
                            {{-- Features --}}
                            <div class="flex flex-col gap-3 items-start w-full">
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">5 watchlists included</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Exclusive premium widgets</p>
                                </div>
                                <div class="flex gap-3 items-center w-full">
                                    <div class="flex items-center justify-center py-0.5">
                                        <div class="bg-[#0b2b4a] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                            <svg class="w-[14px] h-[14px] text-[#eea23e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="flex-1 font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Access to all features</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-full text-[15px] font-semibold leading-[22px] text-[#eea23e]">
                        Buy now
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing Comparison Table --}}
    <section id="services-comparison" class="bg-[#fafbfc] flex flex-col items-center px-28 py-16">
        {{-- Header --}}
        <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
            <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
                <div class="flex flex-col gap-4 items-center text-center w-full">
                    <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                        Pricing that Adapts to You
                    </h2>
                    <div class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                        <p>Have a quick look over our pricing plans and what we have to offer as a part of our product and subscription plans offering.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Table --}}
        <div class="flex items-center justify-center w-full max-w-[1280px]">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b border-[#e5e5e7]">
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Plan</p>
                        </th>
                        <th class="px-0 py-4 border-b border-[#e5e5e7]" style="width: 156px;"></th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Hosting</p>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <div class="flex gap-2 items-center">
                                <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Domain Connection</p>
                                <button class="w-6 h-6 flex items-center justify-center">
                                    <svg class="w-full h-full text-[#858c95]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">SSL Certificate</p>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Monthly Visits</p>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <div class="flex gap-2 items-center">
                                <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Form Submissions</p>
                                <button class="w-6 h-6 flex items-center justify-center">
                                    <svg class="w-full h-full text-[#858c95]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <div class="flex gap-1.5 items-center">
                                <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">CMS Items</p>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </th>
                        <th class="px-6 py-4 text-left border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">SSL Certificate</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Basic Row --}}
                    <tr class="border-b border-[#e5e5e7]">
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Basic</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]" style="height: 156px;">
                            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Vestibulum venenatis cursus risus eros, lacus vestibulum, leo suspendisse ornare. Risus, sed eu sed amet accumsan id proin. Morbi egestas tortor</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">23,500</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">500</p>
                        </td>
                        <td class="px-0 py-4 border-b border-[#e5e5e7]"></td>
                        <td class="px-0 py-4 border-b border-[#e5e5e7]"></td>
                    </tr>

                    {{-- Pro Row --}}
                    <tr class="border-b border-[#e5e5e7]">
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Pro</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]" style="height: 156px;">
                            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Sed habitasse duis duis in elementum viverra. Iaculis velit nulla volutpat leo commodo, auctor id porttitor. Sed pulvinar venenatis libero</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">50,000</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex flex-col gap-1.5">
                                <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">1,000</p>
                                <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Donec ut turpis feugiat, laoreet arcu quis, lobortis mauris.</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">2,000</p>
                        </td>
                        <td class="px-0 py-4 border-b border-[#e5e5e7]"></td>
                    </tr>

                    {{-- Advanced Row --}}
                    <tr class="border-b border-[#e5e5e7]">
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Advanced</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]" style="height: 156px;">
                            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">Bibendum adipiscing aliquam sit amet sem iaculis ac feugiat. Netus euismod nisl nibh neque blandit in sed. Pretium, morbi quam sed fames suspendisse.</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">100,000</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">Unlimited</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <p class="font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">10,000</p>
                        </td>
                        <td class="px-6 py-4 border-b border-[#e5e5e7]">
                            <div class="flex items-center justify-center py-0.5">
                                <div class="bg-white border-2 border-[#0e69e2] rounded-full w-[22px] h-[22px] flex items-center justify-center">
                                    <svg class="w-[14px] h-[14px] text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="services-faq" class="bg-white flex flex-col items-center px-28 py-16">
        {{-- Header --}}
        <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
            <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
                <div class="flex flex-col gap-4 items-center text-center w-full">
                    <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                        Frequently Asked Questions
                    </h2>
                    <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                        Our FAQ area is the best place to look to find answers to your questions. Our community and support team constantly updates the questions and answers.
                    </p>
                </div>
            </div>
        </div>

        {{-- FAQ Items --}}
        <div class="flex flex-wrap gap-4 items-start w-full max-w-[1280px]">
            {{-- FAQ Item 1 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        How does your SaaS Product work?
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            {{-- FAQ Item 2 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        Do you offer unlimited updates?
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            {{-- FAQ Item 3 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        Can I customize my preferences?
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            {{-- FAQ Item 4 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        Can I update my payment method
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            {{-- FAQ Item 5 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        Are you GDPR compliant?
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>

            {{-- FAQ Item 6 --}}
            <div class="bg-white border border-[#e5e5e7] flex flex-1 gap-2 h-14 items-center min-w-[500px] px-5 py-4 rounded-md">
                <div class="flex flex-1 items-baseline">
                    <p class="flex-1 font-semibold leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                        How to restore my account?
                    </p>
                </div>
                <div class="w-5 h-5 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full text-[#323539]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
@endsection