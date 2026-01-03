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

            {{-- Last Name --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    Last Name
                </label>
                <input type="text" placeholder="Last Name" class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full text-[15px] font-normal leading-[22px] text-[#858c95] focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]">
            </div>

            {{-- Email --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    Email
                </label>
                <input type="email" placeholder="Email" class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full text-[15px] font-normal leading-[22px] text-[#858c95] focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]">
            </div>

            {{-- Phone number --}}
            <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[560px]">
                <label class="font-medium leading-[22px] text-[15px] text-[#323539] w-full">
                    Phone Number
                </label>
                <input type="email" placeholder="Phone Number" class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full text-[15px] font-normal leading-[22px] text-[#858c95] focus:outline-none focus:ring-2 focus:ring-[#0b2b4a]">
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

    {{-- Service Details Tabs (Replaces Pricing Comparison Table) --}}
    <section id="service-details-tabs" class="bg-[#fafbfc] py-16">
        <div class="max-w-[1280px] mx-auto px-6">
            <div class="mb-8">
                <h1 class="font-bold text-[32px] text-[#323539] text-center">
                    Private Limited Company Registration
                </h2>
                <p class="text-[#858c95] text-center max-w-[700px] mx-auto">
                    Learn everything you need to know before registering your company.
                </p>
            </div>

            <!-- Tabs Section -->
            <div class="border-b border-gray-200">
                <div class="max-w-[1280px] mx-auto px-6">
                    <div class="grid grid-cols-8">
                        <button
                            data-tab="overview"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#0b2b4a] border-b-2 border-[#0b2b4a]">
                            Overview
                        </button>

                        <button
                            data-tab="why"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Why
                        </button>

                        <button
                            data-tab="benefits"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Benefits
                        </button>

                        <button
                            data-tab="procedure"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Procedure
                        </button>

                        <button
                            data-tab="pricing"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Pricing & Fees
                        </button>

                        <button
                            data-tab="compilance"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Compliance
                        </button>

                        <button
                            data-tab="timeline"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Timeline
                        </button>

                        <button
                            data-tab="why legalwalakart"
                            class="tab-btn relative px-4 py-3 text-sm font-medium whitespace-nowrap text-center text-[#858c95] hover:text-[#0b2b4a]">
                            Why Legalwalakart
                        </button>
                    </div>
                </div>
            </div>
            <!-- Tabs Content -->
            <div class="max-w-[1280px] mx-auto px-6 py-10">

            <!-- Overview -->
            <div data-tab-content="overview">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">About Private Limited Company</h2>
            <p class="text-[#858c95] max-w-7xl">
                A Private Limited Company is an independent legal entity established by a group of individuals, typically 
                with restricted share transfer and limited liability features. It can own property, sue or be sued, and continue 
                operating irrespective of shareholder changes. This model suits partnerships among professionals, family businesses, 
                or startup founders seeking flexible but credible structures.

            </p>
            <h2 class="text-2xl font-semibold text-[#323539] mb-4"><br>Launch Your Company the Right Way with LegalWalaKart</br></h2>
            <p class="text-[#858c95] max-w-7xl">
                Setting up a Private Limited Company (Pvt Ltd) in India is a smart 
                move for businesses aiming for professionalism, legal protection, and future growth. 
                This form of organization, regulated by the Companies Act, 2013, balances operational freedom with 
                corporate accountability. LegalWalaKart guides your entrepreneurial journey from the very first 
                paperwork all the way to the final seal of approval, ensuring your company formation is stress-free and fully 
                compliant.
            </p>
            </div>

            <!-- Why -->
            <div data-tab-content="why" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4"><br>Why Private Limited Company is Important for Business</br></h2>
            <p class="text-[#858c95] max-w-7xl">
            LegalWalaKart simplifies company registration through:<br></br>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li><strong>Complete guidance:</strong> Every step, from digital paperwork to MCA approval, is managed.</li>
                    <li><strong>Legal expertise:</strong> Our specialists are seasoned in Indian corporate law, so your company’s foundation is robust and error-free.</li>
                    <li><strong>Transparent operations:</strong> We keep you informed at every stage, so you always know where things stand.</li>
                    <li><strong>Pan-India coverage:</strong> Wherever you are, our remote service ensures smooth registration.</li>
                    <li><strong>Dedicated support:</strong> An assigned expert walks you through documentation, queries, and compliance.</li>

            </p>
            </div>

            <!-- Benefits -->
            <div data-tab-content="benefits" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">Benefits for Entrepreneurs</h2>
            <p class="text-[#858c95] max-w-7xl">
                Entrepreneurs opting for a Private Limited Company enjoy:<br></br>
            </p>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li><strong>Protection of personal assets: </strong>Owners are not personally liable for business debts beyond their invested capital.</li>
                    <li><strong>Trust and reputation:</strong>Vendors and customers tend to favor entities with structured governance.</li>
                    <li><strong>Investment opportunities: </strong>This framework attracts venture capital and other funding.</li>
                    <li><strong>Secure longevity:</strong>The company survives even if founders leave or new managers take over.</li>
                </ul>
            </div>

            <!-- Procedure -->
             <div data-tab-content="procedure" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">LegalWalaKart follows a streamlined registration process:</h2>
            <p class="text-[#858c95] max-w-7xl">
                Entrepreneurs opting for a Private Limited Company enjoy:<br></br>
            </p>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li><strong>Preliminary consultation: </strong>Gather all relevant details and explain requirements.</li>
                    <li><strong>Digital Signature setup:</strong>Issue DSCs for proposed directors to enable secure digital filings.</li>
                    <li><strong>Director Identification: </strong>Secure DINs for all directors.</li>
                    <li><strong>Naming your company: </strong>Submit preferred names for approval through MCA’s RUN or SPICe+ portals.</li>
                    <li><strong>Charter documents draft: </strong>Prepare Memorandum and Articles setting out objectives and internal rules.</li>
                    <li><strong>Online submission:  </strong>File incorporation papers digitally, including requests for PAN and TAN.</li>
                    <li><strong>Registrar review:  </strong>ROC verifies all documentation and processes approvals.</li>
                    <li><strong>Certification: </strong>Upon acceptance, official incorporation and registration documents are delivered.</li>
                </ul>
            </div>

            <!-- pricing -->
            <div data-tab-content="pricing" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">Pricing & Government Fees</h2>
            <p class="text-[#858c95] max-w-7xl">
            Formation charges cover statutory filings, documentation, digital signatures, and government fees, which can vary based on authorized share capital and state-specific levies. Reach out to LegalWalaKart for a customized quotation, ensuring full transparency and no hidden costs.
            </p>
            </div>

            <!-- Compilance -->
            <div data-tab-content="compilance" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">Post Incorporation Compliances</h2>
            <p class="text-[#858c95] max-w-7xl">
                After registration, businesses must fulfill ongoing obligations such as:<br></br>
            </p>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li>Registering for mandatory tax numbers (PAN, TAN, etc.).</li>
                    <li>Setting up statutory registers and minutes.</li>
                    <li>Secure DINs for all directors.</li>
                    <li>Filing annual returns and financial statements.</li>
                    <li>Maintaining books of accounts and conducting board meetings.</li>
                    <li>Enrolling under PF, ESIC, and other social schemes if applicable.</li>
                </ul>
            <h2 class="text-2xl font-semibold text-[#323539] mb-4"><br>Compliance Calendar</br></h2>
            <p class="text-[#858c95] max-w-7xl">
                A typical compliance calendar includes:<br></br>
            </p>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li><strong>Annual returns submission: </strong>Once a year.</li>
                    <li><strong>Board meetings:</strong>At least twice annually.</li>
                    <li><strong>Statutory audit: </strong>Yearly requirement.</li>
                    <li><strong>Tax filings: </strong>In accordance with deadlines set by tax authorities.</li>
                </ul>
            </div>

            <!-- timeline -->
            <div data-tab-content="timeline" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4">Timeline for Registration</h2>
            <p class="text-[#858c95] max-w-7xl">
                Most Private Limited Company registrations complete within 7 to 10 working days, provided all documents are 
                supplied quickly and approvals proceed smoothly. Document readiness and prompt submission help speed things along.
            </p>
            </div>

            <!-- Why Legalwalakart -->
            <div data-tab-content="why legalwalakart" class="hidden">
            <h2 class="text-2xl font-semibold text-[#323539] mb-4"><br>Why Choose Us for Pvt Ltd Company Registration</br></h2>
            <p class="text-[#858c95] max-w-7xl">
            LegalWalaKart simplifies company registration through:<br></br>
                <ul class="text-[#858c95] max-w-7xl list-disc pl-5 space-y-2">
                    <li><strong>Complete guidance:</strong> Every step, from digital paperwork to MCA approval, is managed.</li>
                    <li><strong>Legal expertise:</strong> Our specialists are seasoned in Indian corporate law, so your company’s foundation is robust and error-free.</li>
                    <li><strong>Transparent operations:</strong> We keep you informed at every stage, so you always know where things stand.</li>
                    <li><strong>Pan-India coverage:</strong> Wherever you are, our remote service ensures smooth registration.</li>
                    <li><strong>Dedicated support:</strong> An assigned expert walks you through documentation, queries, and compliance.</li>

            </p>
            </div>

            </div>
    </section>

    {{-- FAQ --}}
    <section id="services-faq" class="bg-white flex flex-col items-center px-28 py-16">

        {{-- Header --}}
        <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
            <h1 class="font-bold text-[32px] text-[#323539] text-center">
                Frequently Asked Questions
            </h2>
            <p class="text-[#858c95] text-center max-w-[700px] mx-auto">
                Our FAQ area is the best place to look to find answers to your questions. Our community and support team constantly updates the questions and answers.
            </p>
        </div>

        {{-- FAQ Items Wrapper --}}
        <div class="flex flex-wrap gap-4 items-start w-full max-w-[1280px] mx-auto">

            {{-- FAQ Item 1 --}}
            <div class="bg-white border border-[#e5e5e7] rounded-md px-5 py-4 w-full md:w-[48%]">

                <button type="button"
                    class="faq-toggle flex items-center justify-between w-full text-left">
                    <p class="font-semibold text-[16px] text-[#323539]">
                        How long does registration take?
                    </p>
                    <svg
                        class="faq-icon w-5 h-5 text-[#858c95] transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden mt-3 text-[#858c95]">
                    Usually 7–10 business days, provided documentation is in order.
                </div>

            </div> <!-- ✅ CLOSED -->

            {{-- FAQ Item 2 --}}
            <div class="bg-white border border-[#e5e5e7] rounded-md px-5 py-4 w-full md:w-[48%]">

                <button type="button"
                    class="faq-toggle flex items-center justify-between w-full text-left">
                    <p class="font-semibold text-[16px] text-[#323539]">
                        Do I need to appear in person?
                    </p>
                    <svg
                        class="faq-icon w-5 h-5 text-[#858c95] transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden mt-3 text-[#858c95]">
                    No. The digital process eliminates the need for physical presence.
                </div>

            </div>

            {{-- FAQ Item 3 --}}
            <div class="bg-white border border-[#e5e5e7] rounded-md px-5 py-4 w-full md:w-[48%]">

                <button type="button"
                    class="faq-toggle flex items-center justify-between w-full text-left">
                    <p class="font-semibold text-[16px] text-[#323539]">
                        Can foreign nationals participate?
                    </p>
                    <svg
                        class="faq-icon w-5 h-5 text-[#858c95] transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden mt-3 text-[#858c95]">
                    Yes, as long as one director is a resident Indian.
                </div>

            </div>

            {{-- FAQ Item 4 --}}
            <div class="bg-white border border-[#e5e5e7] rounded-md px-5 py-4 w-full md:w-[48%]">

                <button type="button"
                    class="faq-toggle flex items-center justify-between w-full text-left">
                    <p class="font-semibold text-[16px] text-[#323539]">
                        Is conversion to a public company possible?
                    </p>
                    <svg
                        class="faq-icon w-5 h-5 text-[#858c95] transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden mt-3 text-[#858c95]">
                    Yes, following compliance procedures outlined by law.
                </div>

            </div>

    </div> {{-- END FAQ Items Wrapper --}}

           
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('[data-tab-content]');

            tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');

                // Reset all tabs
                tabs.forEach(t => {
                t.classList.remove('text-[#0b2b4a]', 'border-b-2', 'border-[#0b2b4a]');
                t.classList.add('text-[#858c95]');
                });

                // Hide all content
                contents.forEach(c => c.classList.add('hidden'));

                // Activate clicked tab
                tab.classList.remove('text-[#858c95]');
                tab.classList.add('text-[#0b2b4a]', 'border-b-2', 'border-[#0b2b4a]');

                // Show matching content
                document
                .querySelector(`[data-tab-content="${target}"]`)
                .classList.remove('hidden');
            });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".faq-toggle").forEach(button => {
                button.addEventListener("click", () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector(".faq-icon");

                    content.classList.toggle("hidden");
                    icon.classList.toggle("rotate-180");
                });
            });
        });
    </script>
@endsection