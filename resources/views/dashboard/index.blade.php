@extends('layouts.dashboard')

@section('content')

        {{-- Page Content --}}
        <main class="flex-1 p-8">
            {{-- Dashboard Page Header --}}
            <div class="bg-gradient-to-r from-[#0b2b4a] to-[#135ba1] border border-white h-[190px] rounded-[10px] relative flex items-center justify-between px-[15px] py-[15px] mb-8">
                {{-- Left: MY PROFILE Text --}}
                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-white leading-[normal]">
                    MY PROFILE
                </p>

                {{-- Right: My Data Buttons --}}
                <div class="flex items-center gap-4">
                    <button class="bg-[rgba(255,255,255,0.3)] h-[26px] rounded-[5px] px-4 flex items-center justify-center hover:bg-[rgba(255,255,255,0.4)] transition-colors">
                        <p class="font-['Outfit',sans-serif] font-medium leading-[normal] text-[12px] text-white">
                            My Data
                        </p>
                    </button>
                    <button class="bg-[rgba(255,255,255,0.3)] h-[26px] rounded-[5px] px-4 flex items-center justify-center hover:bg-[rgba(255,255,255,0.4)] transition-colors">
                        <p class="font-['Poppins',sans-serif] font-medium leading-[normal] text-[12px] text-white">
                            My Data
                        </p>
                    </button>
                </div>
            </div>

            {{-- Two Column Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- Left Column: Profile Card --}}
                <div class="bg-white border-2 border-[#ebebee] rounded-[10px] shadow-[0px_4px_6px_0px_rgba(0,0,0,0.15)] p-[28px]">
                    {{-- Profile Image --}}
                    <div class="w-[100px] h-[100px] relative mb-6">
                        <img src="https://www.figma.com/api/mcp/asset/de8933f0-b3d6-42e2-89c3-341fb300f36b" alt="Profile" class="w-full h-full object-cover rounded-full">
                    </div>

                    {{-- Upload Photo Button --}}
                    <button class="bg-[#f0effa] px-4 py-[5px] rounded-[100px] mb-8 hover:bg-[#e0dff5] transition-colors">
                        <p class="font-['Outfit',sans-serif] font-medium text-[10px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                            Upload Photo
                        </p>
                    </button>

                    {{-- Personal Info Card --}}
                    <div class="border border-[rgba(0,0,0,0.15)] rounded-[5px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] p-[15px] mb-6">
                        {{-- Name Field --}}
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(31,31,31,0.7)] leading-[normal]">
                                    Your Name
                                </p>
                                <button class="bg-[#f0effa] px-2 py-1 rounded-[72.661px] hover:bg-[#e0dff5] transition-colors">
                                    <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                        Edit
                                    </p>
                                </button>
                            </div>
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                Sid
                            </p>
                        </div>

                        {{-- Email Field --}}
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(31,31,31,0.7)] leading-[normal]">
                                    Email
                                </p>
                                <button class="bg-[#f0effa] px-2 py-1 rounded-[72.661px] hover:bg-[#e0dff5] transition-colors">
                                    <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                        Edit
                                    </p>
                                </button>
                            </div>
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                siddxd@growthx.com
                            </p>
                        </div>

                        {{-- Phone Field --}}
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(31,31,31,0.7)] leading-[normal]">
                                    Phone Number
                                </p>
                                <button class="bg-[#f0effa] px-2 py-1 rounded-[72.661px] hover:bg-[#e0dff5] transition-colors">
                                    <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                        Edit
                                    </p>
                                </button>
                            </div>
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                +91 49652845732
                            </p>
                        </div>
                    </div>

                    {{-- About Section --}}
                    <div class="border border-[rgba(0,0,0,0.15)] rounded-[5px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] p-[15px] mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <p class="font-['Poppins',sans-serif] font-medium text-[16px] leading-[normal]">
                                <span class="text-[rgba(34,34,34,0.9)]">About</span> <span class="text-[#413b89]">Sid</span>
                            </p>
                            <button class="bg-[#f0effa] px-2 py-1 rounded-[72.661px] hover:bg-[#e0dff5] transition-colors">
                                <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                    Edit
                                </p>
                            </button>
                        </div>
                        <p class="font-['Outfit',sans-serif] font-normal text-[12px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.12px]">
                            Lorem ipsum dolor sit amet consectetur. Erat auctor a aliquam vel congue luctus. Leo diam cras neque mauris ac arcu elit ipsum dolor sit amet consectetur.
                        </p>
                    </div>

                    {{-- Legal Section --}}
                    <div class="border border-[rgba(0,0,0,0.15)] rounded-[5px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] p-[15px]">
                        <p class="font-['Outfit',sans-serif] font-medium text-[16px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-4">
                            Legal
                        </p>
                        
                        {{-- KYC Status --}}
                        <div class="flex items-center justify-between mb-4">
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                KYC Status
                            </p>
                            <div class="bg-[#99fdd2] px-2 py-1 rounded-[72.661px]">
                                <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                    Verified
                                </p>
                            </div>
                        </div>

                        {{-- KYC Details --}}
                        <div class="flex items-center justify-between">
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                KYC Details
                            </p>
                            <button class="bg-[#f0effa] px-2 py-1 rounded-[72.661px] hover:bg-[#e0dff5] transition-colors">
                                <p class="font-['Outfit',sans-serif] font-medium text-[7.266px] text-[rgba(31,31,31,0.8)] leading-[normal]">
                                    View
                                </p>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Professional Details Card --}}
                <div class="bg-white border-2 border-[#ebebee] rounded-[10px] shadow-[0px_4px_6px_0px_rgba(0,0,0,0.15)] p-[28px]">
                    {{-- Professional Details Card --}}
                    <div class="border border-[rgba(0,0,0,0.15)] rounded-[10px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] p-8 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal]">
                                Professional Details
                            </p>
                            <div class="w-[54px] h-[54px] flex items-center justify-center">
                                <img src="https://www.figma.com/api/mcp/asset/65958635-287d-401e-9767-68f5682c034b" alt="Professional" class="block max-w-none size-full">
                            </div>
                        </div>
                        <p class="font-['Outfit',sans-serif] font-normal text-[12px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.12px]">
                            This are the professional details shown to users in the app.
                        </p>
                    </div>

                    {{-- Expertise In Section --}}
                    <div class="mb-6">
                        <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-4">
                            Expertise In
                        </p>
                        <div class="flex flex-wrap gap-3">
                            {{-- Career Pill --}}
                            <div class="bg-white border border-[#cecece] h-[30px] rounded-[30px] px-[9px] py-[6px] flex items-center gap-2">
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/191cee3d-47ba-453a-822f-787a4b6efca6" alt="Career" class="block max-w-none size-full">
                                </div>
                                <p class="font-['Outfit',sans-serif] font-normal text-[14px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.14px]">
                                    Career
                                </p>
                            </div>

                            {{-- Money Pill --}}
                            <div class="bg-white border border-[#cecece] h-[30px] rounded-[30px] px-[9px] py-[6px] flex items-center gap-2">
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/2a18034d-ab6b-47fd-a3ad-36a303bc3c74" alt="Money" class="block max-w-none size-full">
                                </div>
                                <p class="font-['Outfit',sans-serif] font-normal text-[14px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.14px]">
                                    Money
                                </p>
                            </div>

                            {{-- Stock Pill --}}
                            <div class="bg-white border border-[#cecece] h-[30px] rounded-[30px] px-[9px] py-[6px] flex items-center gap-2">
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/be5b932d-e9bd-4c99-bdc1-ec71dbe08df5" alt="Stock" class="block max-w-none size-full">
                                </div>
                                <p class="font-['Outfit',sans-serif] font-normal text-[14px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.14px]">
                                    Stock
                                </p>
                            </div>

                            {{-- Mortgage Pill --}}
                            <div class="bg-white border border-[#cecece] h-[30px] rounded-[30px] px-[9px] py-[6px] flex items-center gap-2">
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/75233785-f7ac-44bb-a28f-a11bd742a059" alt="Mortgage" class="block max-w-none size-full">
                                </div>
                                <p class="font-['Outfit',sans-serif] font-normal text-[14px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.14px]">
                                    Mortgage
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Total Experience Section --}}
                    <div class="mb-6">
                        <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-4">
                            Total Experience
                        </p>
                        <div class="border border-[rgba(0,0,0,0.15)] rounded-[10px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] h-[53px] relative overflow-hidden">
                            <div class="bg-[#ffa78d] h-full w-[53.887px] absolute right-0 rounded-r-[9px] flex items-center justify-center">
                                <div class="w-[30px] h-[30px] flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/0c3d96aa-c8f2-49c4-9490-79ab3e65b606" alt="Experience" class="block max-w-none size-full">
                                </div>
                            </div>
                            <div class="absolute left-3 top-1/2 -translate-y-1/2">
                                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-1">
                                    7 Years
                                </p>
                                <p class="font-['Outfit',sans-serif] font-normal text-[12px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.12px]">
                                    of total experience
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Ratings Section --}}
                    <div class="mb-6">
                        <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-4">
                            Ratings
                        </p>
                        <div class="border border-[rgba(0,0,0,0.15)] rounded-[10px] shadow-[0px_2px_2px_0px_rgba(0,0,0,0.1)] h-[53px] relative overflow-hidden">
                            <div class="bg-[rgba(255,203,0,0.7)] h-full w-[53.887px] absolute right-0 rounded-r-[9px] flex items-center justify-center">
                                <div class="w-[30px] h-[30px] flex items-center justify-center">
                                    <img src="https://www.figma.com/api/mcp/asset/04abbead-1796-4b8c-97b9-571ec7d534b8" alt="Star" class="block max-w-none size-full">
                                </div>
                            </div>
                            <div class="absolute left-3 top-1/2 -translate-y-1/2">
                                <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-1">
                                    4 Stars
                                </p>
                                <p class="font-['Outfit',sans-serif] font-normal text-[12px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.12px]">
                                    from 34 customers
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Customer Reviews Section --}}
                    <div>
                        <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(34,34,34,0.9)] leading-[normal] mb-4">
                            Customer Reviews
                        </p>
                        {{-- Review Card --}}
                        <div class="bg-white border border-[#cecece] rounded-[10.036px] shadow-[0px_3.797px_5.696px_0px_rgba(65,59,137,0.1)] p-[15px] mb-2">
                            <p class="font-['Outfit',sans-serif] font-medium text-[13.291px] text-[#413b89] leading-[normal] tracking-[0.1329px] mb-2">
                                Ankit Srivastava
                            </p>
                            {{-- Stars --}}
                            <div class="mb-2">
                                <img src="https://www.figma.com/api/mcp/asset/bb052f7c-a3b1-4bdf-b10b-c29ff2338846" alt="Stars" class="h-[22.784px]">
                            </div>
                            <p class="font-['Outfit',sans-serif] font-normal text-[13.291px] text-[rgba(73,69,79,0.8)] leading-[normal] tracking-[0.1329px]">
                                excelent conversation with him.. very knowledgeble personhappy to talk towith him
                            </p>
                        </div>
                        <p class="font-['Outfit',sans-serif] font-medium text-[12px] text-[rgba(193,11,14,0.8)] leading-[normal]">
                            See all reviews -
                        </p>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
@endsection