@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

{{-- Contact Hero --}}
<section id="contact-hero" class="bg-white flex flex-col items-center justify-center pb-[92px] pt-20 px-28">
    <div class="flex flex-col gap-4 items-center w-[640px]">
        {{-- Label Badge --}}
        <div class="bg-[#ecf4fc] flex gap-0 items-center px-2.5 py-0.5 rounded-full">
            <p class="font-semibold leading-[20px] text-[#0b2b4a] text-[14px] tracking-[-0.1px]">
                1% OF THE INDUSTRY
            </p>
        </div>

        {{-- Title and Description --}}
        <div class="flex flex-col gap-12 items-center w-full">
            <div class="flex flex-col gap-6 items-center text-center w-full">
                <h1 class="font-bold leading-[60px] text-[52px] text-[#323539] tracking-[-1.04px] w-full">
                    Reaching out to us has never been easier.
                </h1>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.1px] w-full">
                    We've been told it is possible to revolutionize the payment industry. We have not reinvented the wheel, we decided to build upon it - successfully.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Contact Info + Map --}}
<section id="contact-info" class="bg-white flex flex-col items-center px-28 py-16">
    {{-- Header --}}
    <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
        <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
            <div class="flex flex-col gap-4 items-center text-center w-full">
                <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                    Get in Touch with Us
                </h2>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                    Reach out to us with any question or inquiry you have and we'll do our best to get back to you as soon as possible.
                </p>
            </div>
        </div>
    </div>

    {{-- Map + Info Two Column Layout --}}
    <div class="flex gap-[88px] items-start w-full max-w-[1280px]">
        {{-- Map (Left) --}}
        <div class="flex-1 border border-[#e5e5e7] relative rounded-xl overflow-hidden self-stretch">
            <img src="https://www.figma.com/api/mcp/asset/c5292470-f310-4aa2-9519-7886969b9f7f" alt="Map" class="absolute inset-0 w-full h-full object-cover rounded-xl">
            
            {{-- Pan Icon (Top Right) --}}
            <div class="absolute bg-white border border-[#e5e5e7] p-2 right-8 top-8 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                <div class="w-5 h-5 flex items-center justify-center">
                    <img src="https://www.figma.com/api/mcp/asset/338381bf-5eb8-4809-b97d-61a078bcb2c1" alt="Pan" class="block max-w-none size-full">
                </div>
            </div>

            {{-- Zoom Controls (Bottom Right) --}}
            <div class="absolute bg-white border border-[#e5e5e7] bottom-8 right-8 flex flex-col gap-2.5 p-2.5 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                {{-- Plus Icon --}}
                <div class="w-4 h-4 flex items-center justify-center">
                    <img src="https://www.figma.com/api/mcp/asset/ce0622da-a55b-46d6-a995-da359e917380" alt="Zoom in" class="block max-w-none size-full">
                </div>
                {{-- Divider --}}
                <div class="h-px w-full relative">
                    <img src="https://www.figma.com/api/mcp/asset/dd8f9a10-10da-4cf4-8ab2-e697dc4753b5" alt="" class="block max-w-none size-full">
                </div>
                {{-- Minus Icon --}}
                <div class="w-4 h-4 flex items-center justify-center">
                    <img src="https://www.figma.com/api/mcp/asset/d7a4e4be-0555-4439-8e95-7954ca0a5a29" alt="Zoom out" class="block max-w-none size-full">
                </div>
            </div>
        </div>

        {{-- Contact Info (Right) --}}
        <div class="flex flex-1 flex-col gap-8 items-start">
            {{-- Get in touch Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col gap-4 items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Get in touch
                    </p>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        Perferendis est inventore ratione. Et numquam cupiditate ut id delectus aut et. Aliquam ipsa ut beatae provident
                    </p>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <span class="font-semibold leading-[22px] text-[#0b2b4a] text-[15px]">Read more</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/21938450-c6e9-43a3-aff6-3a7269e2caf1" alt="Arrow right" class="block max-w-none size-full">
                    </div>
                </a>
            </div>

            {{-- Address Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col gap-4 items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Address
                    </p>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        63751 Reichel Island, Ignacio Fort, South Georgia and the South Sandwich Islands
                    </p>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/8a864b29-7c90-4cbf-925e-ca3aac8c72f4" alt="Phone" class="block max-w-none size-full">
                    </div>
                    <span class="font-semibold leading-[22px] text-[#0b2b4a] text-[15px]">Make a phone call</span>
                </a>
            </div>

            {{-- Social Media Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Social media
                    </p>
                </div>
                <div class="flex gap-4 items-start justify-center">
                    <div class="w-6 h-6 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/4503bd16-85e6-438a-a218-ed644cd95153" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-6 h-6 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/59f5f8ca-0240-41bf-a977-35c56d2b607c" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-6 h-6 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/a8b0d343-a6aa-4402-b2aa-0f1a9ec4e70f" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-6 h-6 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/5dd46dcf-3227-4403-a177-f3de18bcd9ad" alt="Social" class="block max-w-none size-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section id="contact-form" class="bg-white flex flex-col items-center py-16 px-0">
    <div class="flex gap-12 items-start px-8 w-[1280px]">
        {{-- Form (Left) --}}
        <form class="bg-white flex flex-1 flex-col gap-6 items-start p-8 rounded-lg min-h-[553px]">
            {{-- Row 1: First Name + Email Address --}}
            <div class="flex gap-6 items-start w-full">
                {{-- First Name --}}
                <div class="flex flex-1 flex-col gap-2 items-start">
                    <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                        First Name
                    </label>
                    <div class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full">
                        <input type="text" placeholder="Please input" class="flex-1 font-normal leading-[22px] text-[15px] text-[#858c95] bg-transparent border-none focus:ring-0 focus:outline-none">
                    </div>
                </div>

                {{-- Email Address --}}
                <div class="flex flex-1 flex-col gap-2 items-start">
                    <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                        Email Address
                    </label>
                    <div class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full">
                        <input type="email" placeholder="Please input" class="flex-1 font-normal leading-[22px] text-[15px] text-[#858c95] bg-transparent border-none focus:ring-0 focus:outline-none">
                    </div>
                </div>
            </div>

            {{-- Row 2: Phone Number + Contact Method --}}
            <div class="flex gap-6 items-start w-full">
                {{-- Phone Number --}}
                <div class="flex flex-1 flex-col gap-2 items-start">
                    <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                        Phone Number
                    </label>
                    <div class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-2 h-[46px] items-center p-3 rounded-md w-full">
                        <input type="tel" placeholder="+000" class="flex-1 font-normal leading-[22px] text-[15px] text-[#858c95] bg-transparent border-none focus:ring-0 focus:outline-none">
                    </div>
                </div>

                {{-- Contact Method Dropdown --}}
                <div class="flex flex-1 flex-col gap-2 items-start justify-end">
                    <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px]">
                        Contact method
                    </label>
                    <div class="bg-[#f8f9fb] border border-[#e5e5e7] flex gap-3 h-[46px] items-center px-4 py-3 rounded-md w-full">
                        <span class="flex-1 font-normal leading-[22px] text-[15px] text-[#858c95]">Choose method</span>
                        <div class="w-5 h-5 flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/e50537b3-b3c1-4a26-aba2-a1dd0ef03e7f" alt="Dropdown" class="block max-w-none size-full">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Message Textarea --}}
            <div class="flex flex-1 flex-col gap-2 items-start w-full">
                <label class="font-medium leading-[20px] text-[14px] text-[#323539] tracking-[-0.1px] w-full">
                    Message
                </label>
                <div class="bg-[#f8f9fb] border border-[#e5e5e7] flex flex-1 items-start px-4 py-3 rounded-md w-full min-h-[120px]">
                    <textarea placeholder="Hi! We are Lookscout..." class="flex-1 font-medium leading-[22px] text-[15px] text-[#858c95] bg-transparent border-none focus:ring-0 focus:outline-none resize-none min-h-[120px]"></textarea>
                </div>
            </div>

            {{-- Checkbox --}}
            <div class="flex gap-3 items-start w-full">
                <div class="flex items-start pt-0.5">
                    <div class="bg-[#f8f9fb] border-2 border-[#e5e5e7] rounded-md shrink-0 size-5"></div>
                </div>
                <div class="flex flex-1 flex-col items-start">
                    <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px] w-full">
                        I agree with Legalwalakart Privacy Policy
                    </p>
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="flex gap-2 items-start w-full">
                <button type="submit" class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                    <span class="font-semibold leading-[22px] text-[15px] text-white">Submit</span>
                </button>
            </div>
        </form>

        {{-- Contact Info Sidebar (Right) --}}
        <div class="flex flex-col gap-8 items-start w-[328px]">
            {{-- Get in touch Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col gap-4 items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Get in touch
                    </p>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        Perferendis est inventore ratione. Et numquam cupiditate ut id delectus aut et. Aliquam ipsa ut beatae provident
                    </p>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <span class="font-semibold leading-[22px] text-[#0b2b4a] text-[15px]">Read more</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/bdb899c3-e8b3-414b-a397-7a2836996556" alt="Arrow right" class="block max-w-none size-full">
                    </div>
                </a>
            </div>

            {{-- Address Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col gap-4 items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Address
                    </p>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        63751 Reichel Island,
                    </p>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        South Georgia and the South Sandwich Islands
                    </p>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/dea5986d-fb2d-4ae4-812b-d779ea4164be" alt="Phone" class="block max-w-none size-full">
                    </div>
                    <span class="font-semibold leading-[22px] text-[#0b2b4a] text-[15px]">Make a phone call</span>
                </a>
            </div>

            {{-- Social Media Section --}}
            <div class="flex flex-col gap-2 items-start justify-center w-full">
                <div class="flex flex-col items-start w-full">
                    <p class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px] w-full">
                        Social media
                    </p>
                </div>
                <div class="flex gap-2 items-start justify-center">
                    <div class="bg-white border border-[#e5e5e7] flex items-center justify-center p-2 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                        <div class="w-[18px] h-[18px] flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/7551485d-c3b2-4533-b522-c65c2cdca099" alt="Social" class="block max-w-none size-full">
                        </div>
                    </div>
                    <div class="bg-white border border-[#e5e5e7] flex items-center justify-center p-2 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                        <div class="w-[18px] h-[18px] flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/1ce6c19e-3fed-4439-b277-794378bf5d7d" alt="Social" class="block max-w-none size-full">
                        </div>
                    </div>
                    <div class="bg-white border border-[#e5e5e7] flex items-center justify-center p-2 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                        <div class="w-[18px] h-[18px] flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/33813176-84a6-492c-abdc-3ceaffa4729b" alt="Social" class="block max-w-none size-full">
                        </div>
                    </div>
                    <div class="bg-white border border-[#e5e5e7] flex items-center justify-center p-2 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                        <div class="w-[18px] h-[18px] flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/ae74d622-11d4-4a19-9026-e9f6bda735fb" alt="Social" class="block max-w-none size-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection