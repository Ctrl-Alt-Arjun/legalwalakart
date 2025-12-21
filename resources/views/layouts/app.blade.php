<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LegalWalakart')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
    {{-- Header / Navigation --}}
    <header class="bg-white border-b border-gray-200">
        <nav class="relative flex items-center px-28 py-5 max-w-8xl mx-auto">
            
            <!-- LOGO (LEFT) -->
            <div class="flex-shrink-0">
                <a href="/" class="block h-10 w-40">
                    <img src="{{ asset('images/logo.png') }}" alt="Legalwalakart" class="h-full w-full object-contain">
                </a>
            </div>

            <!-- RIGHT SIDE (NAV + AUTH) -->
            <div class="ml-auto flex items-center gap-10">

                <!-- NAV LINKS -->
                <div class="flex items-center gap-8">
                    <a href="/" class="text-[15px] font-semibold text-gray-900 hover:text-[#0b2b4a]">Home</a>
                    <a href="/products" class="text-[15px] font-semibold text-gray-900 hover:text-[#0b2b4a]">Our Products</a>

                    <!-- Resources Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 text-[15px] font-semibold text-gray-900 hover:text-[#0b2b4a] transition-colors">
                            Resources
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div class="absolute top-full left-1/3 -translate-x-1/2 mt-6 w-[920px] max-w-[95vw] bg-white border border-gray-200 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="flex flex-wrap gap-6 items-start px-8 py-8">
                                {{-- Column 1 --}}
                                <div class="flex flex-[1_0_0] flex-col gap-2 items-start min-w-[280px]">
                                    <div class="bg-[#0a77ff] flex items-center justify-center p-[10.286px] rounded-full shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                                        <div class="w-[27.429px] h-[27.429px] flex items-center justify-center">
                                            <img src="https://www.figma.com/api/mcp/asset/29920a82-81b0-4930-ae6f-5fc86219fa3a" alt="" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#323539]">
                                        Shop Establishment Registration
                                    </p>
                                    <div class="flex flex-col gap-2 w-full">
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Help & Support</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Tutorials</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Video Guides</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Questions & Answers</a>
                                    </div>
                                </div>
                                
                                {{-- Column 2 --}}
                                <div class="flex flex-[1_0_0] flex-col gap-3 items-start min-w-[280px]">
                                    <div class="bg-[#0b2b4a] flex items-center justify-center p-[10.286px] rounded-full shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                                        <div class="w-[27.429px] h-[27.429px] flex items-center justify-center">
                                            <img src="https://www.figma.com/api/mcp/asset/fee23a64-40ca-4ca5-8e01-271ef054a840" alt="" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#323539]">
                                        FSSAI (Food License) Registration
                                    </p>
                                    <div class="flex flex-col gap-2 w-full">
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Our Academy</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Our E-books</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Longreads</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Written Guides</a>
                                    </div>
                                </div>
                                
                                {{-- Column 3 --}}
                                <div class="flex flex-[1_0_0] flex-col gap-3 items-start min-w-[280px]">
                                    <div class="bg-[#0b2b4a] flex items-center justify-center p-[10.286px] rounded-full shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                                        <div class="w-[27.429px] h-[27.429px] flex items-center justify-center">
                                            <img src="https://www.figma.com/api/mcp/asset/396e263c-932d-49f8-b25e-b4cc39533db0" alt="" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#323539]">
                                        Import Export Code (IEC) Certificate
                                    </p>
                                    <div class="flex flex-col gap-2 w-full">
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Video Guides</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Written Articles</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Online Guides</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Outlined Drafts</a>
                                    </div>
                                </div>
                                
                                {{-- Column 4 --}}
                                <div class="flex flex-[1_0_0] flex-col gap-3 items-start min-w-[280px]">
                                    <div class="bg-[#0b2b4a] flex items-center justify-center p-[10.286px] rounded-full shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                                        <div class="w-[27.429px] h-[27.429px] flex items-center justify-center">
                                            <img src="https://www.figma.com/api/mcp/asset/257bfbcb-6e9a-4afc-8f63-1f1570c5f41d" alt="" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#323539]">
                                        PAN Registration
                                    </p>
                                    <div class="flex flex-col gap-2 w-full">
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Previous Streams</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Video Materials</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Written Materials</a>
                                        <a href="#" class="text-[15px] font-semibold leading-[22px] text-[#858c95] hover:text-[#323539] transition-colors">Our Tutorials</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/contact" class="text-[15px] font-semibold text-gray-900 hover:text-[#0b2b4a]">Contacts</a>
                </div>

                <!-- AUTH BUTTONS -->
                <div class="flex items-center gap-4">
                    <a href="/signup" class="text-[15px] font-semibold text-gray-900 hover:text-[#0b2b4a]">
                        Sign Up
                    </a>
                    <a href="/login" class="bg-[#0b2b4a] text-white px-5 py-2 rounded-md text-sm font-semibold hover:opacity-90">
                        Log In
                    </a>
                </div>

            </div>
        </nav>
    </header>

    @yield('content')

    {{-- Footer --}}
    <footer class="bg-[#181818] px-28 py-16">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col gap-16">
                {{-- Main Footer Content --}}
                <div class="flex items-start justify-between">
                    {{-- Logo Section --}}
                    <div class="flex flex-col gap-4 w-[247px]">
                        <div class="h-10 w-40">
                            <a href="/" class="block h-full w-full">
                                <img src="{{ asset('images/logo.png') }}" alt="LegalWalakart" class="h-full w-full object-contain">
                            </a>
                        </div>
                        <div class="flex flex-col gap-4">
                            <p class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0]">
                                Design outstanding interfaces with advanced Figma features in a matter of minutes.
                            </p>
                            <div class="flex gap-6">
                                <a href="#" class="w-6 h-6" aria-label="Facebook">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6" aria-label="Google">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6" aria-label="Apple">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.05 20.28c-.98.95-2.05.88-3.08.4-1.09-.5-2.08-.48-3.24 0-1.44.62-2.2.44-3.06-.4C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-6 h-6" aria-label="Instagram">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Products Column --}}
                    <nav class="flex flex-col gap-6">
                        <h3 class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#f9f9f9]">
                            Products
                        </h3>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Features</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Solutions</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Integrations</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Enterprise</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Solutions</a></li>
                        </ul>
                    </nav>

                    {{-- Resources Column --}}
                    <nav class="flex flex-col gap-6">
                        <h3 class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#f9f9f9]">
                            Resources
                        </h3>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Partners</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Community</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Developers</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">App</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Blog</a></li>
                        </ul>
                    </nav>

                    {{-- Why Choose Us Column --}}
                    <nav class="flex flex-col gap-6">
                        <h3 class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#f9f9f9]">
                            Why Choose Us?
                        </h3>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Channels</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Scale</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Watch the Demo</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Our Competition</a></li>
                        </ul>
                    </nav>

                    {{-- Company Column --}}
                    <nav class="flex flex-col gap-6">
                        <h3 class="text-base font-semibold leading-6 tracking-[-0.16px] text-[#f9f9f9]">
                            Company
                        </h3>
                        <ul class="flex flex-col gap-3">
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">About Us</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">News</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Leadership</a></li>
                            <li><a href="#" class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] hover:text-[#f9f9f9] transition-colors">Media Kit</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Bottom Section --}}
                <div class="flex flex-col gap-4 items-center max-w-[1280px] mx-auto">
                    <div class="bg-[#0a77ff] p-3 rounded-[30px]">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <p class="text-base font-medium leading-6 tracking-[-0.16px] text-[#979aa0] text-center">
                        © 2023 Legalwalakart. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
