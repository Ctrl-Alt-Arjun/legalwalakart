@extends('layouts.app')

@section('title', 'About Us')

@section('content')

{{-- About Hero --}}
<section id="about-hero" class="bg-[#f8f9fb] flex items-center justify-between pb-20 pt-12 px-28">
    {{-- Left Column: Text Content --}}
    <div class="flex flex-col gap-8 items-start justify-center w-[524px]">
        {{-- Label Badge --}}
        <div class="flex flex-col gap-3 items-start w-full">
            <div class="bg-[#ecf4fc] flex gap-0 items-center px-2.5 py-0.5 rounded-full">
                <p class="font-semibold leading-[20px] text-[#0b2b4a] text-[14px] tracking-[-0.1px]">
                    1% OF THE INDUSTRY
                </p>
            </div>

            {{-- Title and Description --}}
            <div class="flex flex-col gap-6 items-start w-full">
                <h1 class="font-bold leading-[60px] text-[52px] text-[#323539] tracking-[-1.04px] w-full">
                    <span class="block">Come for the features. Stay for</span>
                    <span class="block">the support.</span>
                </h1>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.1px] w-full">
                    We've been told it is not possible to overachieve our customers' expectations. We have not reinvented the wheel, we decided to build upon it.
                </p>
            </div>
        </div>

        {{-- Buttons --}}
        <div class="flex gap-4 items-center">
            {{-- Get Started Button --}}
            <button class="bg-[#0b2b4a] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                <span class="font-semibold leading-[22px] text-[15px] text-white">Get Started</span>
            </button>

            {{-- Contact Us Button --}}
            <button class="bg-white border border-[#e5e5e7] flex gap-1.5 items-center justify-center px-5 py-3 rounded-md shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)]">
                <span class="font-semibold leading-[22px] text-[15px] text-[#323539]">Contact Us</span>
                <div class="w-5 h-5 flex items-center justify-center">
                    <img src="https://www.figma.com/api/mcp/asset/c8d05252-7ead-485b-a008-828c70584b69" alt="Arrow right" class="block max-w-none size-full">
                </div>
            </button>
        </div>
    </div>

    {{-- Right Column: Visual Dashboard --}}
    <div class="flex-1 h-[528px] relative">
        <div class="absolute flex h-[680px] items-center justify-center left-[76px] top-[-18px] w-[804px]">
            <div class="flex-none rotate-[350deg]">
                <div class="flex gap-8 h-[564px] items-start relative shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-[717px]">
                    {{-- Left Card: Success Completion --}}
                    <div class="bg-white border border-[#e5e5e7] flex flex-col h-[451px] items-center justify-between pb-8 pt-6 px-8 rounded-[10px] w-[240px]">
                        <div class="flex flex-col gap-1 items-start w-full">
                            <p class="font-medium leading-[20px] text-[14px] text-[#858c95] tracking-[-0.1px]">
                                Successful Completion
                            </p>
                            <p class="font-semibold h-[35px] leading-[32px] text-[24px] text-black tracking-[-0.48px] w-[156px]">
                                $6.127
                            </p>
                        </div>
                        <div class="flex flex-col gap-1 items-center leading-0">
                            <div class="inline-grid grid-cols-[max-content] grid-rows-[max-content] justify-items-start">
                                <div class="col-[1] h-[200px] row-[1] w-[182px] relative">
                                    <div class="absolute inset-[0.41px_-0.12px_17.47px_0]">
                                        <img src="https://www.figma.com/api/mcp/asset/93820f5c-dc04-4cf2-8e66-7d888229d834" alt="" class="block max-w-none size-full">
                                    </div>
                                    <p class="absolute font-semibold h-[35px] leading-[32px] left-[95px] text-[24px] text-black text-center top-[65px] translate-x-[-50%] w-[79px]">
                                        77.5%
                                    </p>
                                    <p class="absolute font-medium h-[19px] leading-[20px] left-[91px] text-[14px] text-[#858c95] text-center top-[97px] translate-x-[-50%] w-[84px]">
                                        Fulfilled
                                    </p>
                                </div>
                            </div>
                            <div class="inline-grid grid-cols-[max-content] grid-rows-[max-content] justify-items-start">
                                <div class="bg-[#efeff1] col-[1] h-[13px] ml-[18px] rounded-[10px] row-[1] w-[69px]"></div>
                                <div class="bg-[#efeff1] col-[1] h-[13px] ml-0 mt-[21px] rounded-[10px] row-[1] w-[109px]"></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="h-[41px] w-[174px] relative">
                                <img src="https://www.figma.com/api/mcp/asset/8088d797-104e-460c-90b8-3bff1b0f2e18" alt="" class="block max-w-none size-full">
                            </div>
                        </div>
                    </div>

                    {{-- Right Cards Container --}}
                    <div class="flex flex-col gap-8 items-start">
                        {{-- Top Two Cards --}}
                        <div class="flex gap-8 items-start">
                            {{-- Sales Card --}}
                            <div class="bg-white border border-[#e5e5e7] flex flex-col items-start justify-between p-8 rounded-[10px] size-[240px]">
                                <p class="font-medium h-[19px] leading-[20px] text-[18px] text-black tracking-[-0.1px] w-[82px]">
                                    Sales
                                </p>
                                <div class="h-[75px] w-[181px] relative">
                                    <img src="https://www.figma.com/api/mcp/asset/994aba7b-4dde-41f9-8385-65e29b5f640b" alt="" class="block max-w-none size-full">
                                </div>
                                <div class="h-[41px] w-[174px] relative">
                                    <img src="https://www.figma.com/api/mcp/asset/c4ece999-188c-4dab-9265-ce9f1d62a231" alt="" class="block max-w-none size-full">
                                </div>
                            </div>

                            {{-- Progression Card --}}
                            <div class="bg-white border border-[#e5e5e7] flex flex-col items-start justify-center p-8 rounded-[10px] size-[240px]">
                                <div class="flex flex-col gap-1 items-start">
                                    <p class="font-medium h-[19px] leading-[20px] text-[14px] text-[#858c95] tracking-[-0.1px] w-[137px]">
                                        Progression
                                    </p>
                                    <p class="font-semibold h-[35px] leading-[32px] text-[24px] text-black tracking-[-0.48px] w-[156px]">
                                        $2.749
                                    </p>
                                </div>
                                <div class="h-[134px] relative w-full">
                                    <img src="https://www.figma.com/api/mcp/asset/7ec149ca-80d9-4d29-b5de-ef79d7259c80" alt="" class="block max-w-none size-full">
                                </div>
                            </div>
                        </div>

                        {{-- Bottom Calendar Card --}}
                        <div class="inline-grid grid-cols-[max-content] grid-rows-[max-content] justify-items-start leading-0">
                            <div class="bg-white border border-[#e5e5e7] col-[1] h-[101px] row-[1] rounded-[10px] w-[507px]"></div>
                            <div class="col-[1] inline-grid grid-cols-[max-content] grid-rows-[max-content] justify-items-start ml-[15px] mt-[18px] row-[1] relative">
                                <div class="bg-[#f5f5f5] col-[1] h-[66px] rounded-[5px] row-[1] w-[52px]"></div>
                                <p class="col-[1] font-normal h-[20px] leading-[21px] ml-[25px] mt-[10px] row-[1] text-[12.5px] text-black text-center translate-x-[-50%] w-[33px]">
                                    Tue
                                </p>
                                <p class="col-[1] font-bold h-[20px] leading-[21px] ml-[27px] mt-[36px] row-[1] text-[21px] text-black text-center translate-x-[-50%] w-[42px]">
                                    20
                                </p>
                            </div>
                            <p class="col-[1] font-bold h-[20px] leading-[21px] ml-[235px] mt-[52px] row-[1] text-[18px] text-[#252525] w-[110px]">
                                56 min
                            </p>
                            <p class="col-[1] font-bold h-[20px] leading-[21px] ml-[97px] mt-[52px] row-[1] text-[18px] text-[#32d74b] w-[43px]">
                                83%
                            </p>
                            <p class="col-[1] font-bold h-[20px] leading-[21px] ml-[368px] mt-[52px] row-[1] text-[18px] text-[#252525] w-[101px]">
                                8h 45m
                            </p>
                            <p class="col-[1] font-medium h-[20px] leading-[21px] ml-[97px] mt-[23px] row-[1] text-[12.5px] text-[#858c95] w-[107px]">
                                Success Rate
                            </p>
                            <p class="col-[1] font-medium h-[20px] leading-[21px] ml-[235px] mt-[23px] row-[1] text-[12.5px] text-[#858c95] w-[125px]">
                                Time Used
                            </p>
                            <p class="col-[1] font-medium h-[20px] leading-[21px] ml-[368px] mt-[23px] row-[1] text-[12.5px] text-[#858c95] w-[114px]">
                                Some other
                            </p>
                            <div class="col-[1] h-[11px] ml-[146px] mt-[54px] row-[1] w-[35px] relative">
                                <img src="https://www.figma.com/api/mcp/asset/0168af91-7089-49cb-8e0b-868b18c949d3" alt="" class="block max-w-none size-full">
                            </div>
                            <div class="bg-[#efeff1] col-[1] h-[49px] ml-[208px] mt-[23px] rounded-[16px] row-[1] w-[1px]"></div>
                            <div class="bg-[#efeff1] col-[1] h-[49px] ml-[329px] mt-[24px] rounded-[16px] row-[1] w-[1px]"></div>
                        </div>

                        {{-- Transaction Cards --}}
                        <div class="flex flex-col gap-8 items-start">
                            {{-- Success Transaction Card --}}
                            <div class="bg-white border border-[#e5e5e7] flex gap-4 h-[90px] items-center px-6 py-2 rounded-[10px] w-[432px]">
                                <div class="relative shrink-0 size-16">
                                    <img src="https://www.figma.com/api/mcp/asset/6befa2f2-85be-4589-a7aa-d15190e3563e" alt="" class="block max-w-none size-full" height="64" width="64">
                                </div>
                                <div class="bg-white flex flex-1 flex-col gap-2 items-start rounded-[10px]">
                                    <p class="font-medium h-[17px] leading-[22px] text-[15px] text-[#858c95] w-full">
                                        Successful Transaction
                                    </p>
                                    <p class="font-semibold leading-[20px] text-[14px] text-[#252525] tracking-[-0.1px]">
                                        $175.55 USD
                                    </p>
                                </div>
                                <div class="bg-[#f3fff6] flex items-start px-4 py-2 rounded-full">
                                    <p class="font-semibold leading-[18px] text-[13px] text-[#32d74b] tracking-[-0.1px]">
                                        Success
                                    </p>
                                </div>
                            </div>

                            {{-- Pending Transaction Card --}}
                            <div class="bg-white border border-[#e5e5e7] flex gap-4 h-[90px] items-center px-6 py-2 rounded-[10px] w-[432px]">
                                <div class="relative shrink-0 size-16">
                                    <img src="https://www.figma.com/api/mcp/asset/6a8b3682-e08c-4a8c-83e1-7bc4bfcb0797" alt="" class="block max-w-none size-full" height="64" width="64">
                                </div>
                                <div class="bg-white flex flex-1 flex-col gap-2 items-start rounded-[10px]">
                                    <p class="font-medium h-[17px] leading-[22px] text-[15px] text-[#858c95] w-full">
                                        Successful Transaction
                                    </p>
                                    <p class="font-semibold leading-[20px] text-[14px] text-[#252525] tracking-[-0.1px]">
                                        $175.55 USD
                                    </p>
                                </div>
                                <div class="bg-[#b2d5ff] flex items-start px-4 py-2 rounded-full">
                                    <p class="font-semibold leading-[18px] text-[13px] text-[#0a77ff] tracking-[-0.1px]">
                                        Pending
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team Section --}}
<section id="about-team" class="bg-white flex flex-col items-center px-28 py-16">
    {{-- Header --}}
    <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
        <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
            <div class="flex flex-col gap-4 items-center text-center w-full">
                <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                    The Core of Our Team
                </h2>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                    We're happy to say that our team is what makes us strong and unite. Here are our beloved team members that make us who we are.
                </p>
            </div>
        </div>
    </div>

    {{-- Team Grid --}}
    <div class="flex flex-wrap gap-16 items-start w-full max-w-[1280px]">
        {{-- Team Member 1: Lisa Clarc --}}
        <div class="flex flex-1 gap-6 items-center min-w-[550px] rounded-md">
            {{-- Profile Image --}}
            <div class="flex flex-1 flex-row items-center self-stretch">
                <div class="flex flex-1 flex-col h-full items-start rounded-[5px]">
                    <div class="flex-1 relative rounded-[5px] w-full">
                        <img src="https://www.figma.com/api/mcp/asset/b4d4a29d-62ec-4e19-902d-bf242f9cdc1e" alt="Lisa Clarc" class="absolute inset-0 w-full h-full object-cover rounded-[5px]">
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col gap-8 items-start px-0 py-8">
                <div class="flex flex-col gap-4 items-start w-full">
                    <div class="flex flex-col items-start w-full">
                        <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                            Lisa Clarc
                        </h3>
                        <p class="font-normal leading-[24px] text-[#0b2b4a] text-[16px] tracking-[-0.16px] w-full">
                            UI/UX Designer
                        </p>
                    </div>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        Lisa's proactive support and problem-solving abilities make her an invaluable advocate for our customers.
                    </p>
                </div>
                {{-- Social Icons --}}
                <div class="flex gap-4 items-start">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/a21f64d0-7b2b-4f40-8458-ec828e96bb92" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/4986b0c1-db43-4ccd-8c0e-0a5ff1c81ad5" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/ba04f521-e63d-474b-96a7-23d4705e93fb" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/85354649-3a65-4e5b-ba26-43f1117ccc1b" alt="Social" class="block max-w-none size-full">
                    </div>
                </div>
            </div>
        </div>

        {{-- Team Member 2: Olivia Manson --}}
        <div class="flex flex-1 gap-6 items-center min-w-[550px] rounded-md">
            {{-- Profile Image --}}
            <div class="flex flex-1 flex-row items-center self-stretch">
                <div class="flex flex-1 flex-col h-full items-start rounded-[5px]">
                    <div class="flex-1 relative rounded-[5px] w-full">
                        <img src="https://www.figma.com/api/mcp/asset/2f04866f-ec2f-440a-bb61-9a853bd415cf" alt="Olivia Manson" class="absolute inset-0 w-full h-full object-cover rounded-[5px]">
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-row items-center self-stretch">
                <div class="flex flex-1 flex-col gap-8 h-full items-start justify-center px-0 py-8">
                    <div class="flex flex-col gap-4 items-start w-full">
                        <div class="flex flex-col items-start w-full">
                            <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                                Olivia Manson
                            </h3>
                            <p class="font-normal leading-[24px] text-[#0b2b4a] text-[16px] tracking-[-0.16px] w-full">
                                Cloud Architect
                            </p>
                        </div>
                        <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                            With a deep understanding of user behavior and industry best practices, she crafts engaging experiences that seamlessly blend form and function.
                        </p>
                    </div>
                    {{-- Social Icons --}}
                    <div class="flex gap-4 items-start">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/a21f64d0-7b2b-4f40-8458-ec828e96bb92" alt="Social" class="block max-w-none size-full">
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/4986b0c1-db43-4ccd-8c0e-0a5ff1c81ad5" alt="Social" class="block max-w-none size-full">
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/ba04f521-e63d-474b-96a7-23d4705e93fb" alt="Social" class="block max-w-none size-full">
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center">
                            <img src="https://www.figma.com/api/mcp/asset/85354649-3a65-4e5b-ba26-43f1117ccc1b" alt="Social" class="block max-w-none size-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Team Member 3: Andrew Drue --}}
        <div class="flex flex-1 gap-6 items-center min-w-[550px] rounded-md">
            {{-- Profile Image --}}
            <div class="flex flex-1 flex-row items-center self-stretch">
                <div class="flex flex-1 flex-col h-full items-start rounded-[5px]">
                    <div class="flex-1 relative rounded-[5px] w-full">
                        <img src="https://www.figma.com/api/mcp/asset/1a2cb47a-bbb6-44b8-aa9c-9c75c83746fd" alt="Andrew Drue" class="absolute inset-0 w-full h-full object-cover rounded-[5px]">
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col gap-8 items-start px-0 py-8">
                <div class="flex flex-col gap-4 items-start w-full">
                    <div class="flex flex-col items-start w-full">
                        <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                            Andrew Drue
                        </h3>
                        <p class="font-normal leading-[24px] text-[#0b2b4a] text-[16px] tracking-[-0.16px] w-full">
                            Project Manager
                        </p>
                    </div>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        An ambitious and exquisite personality that always strives to exceed expectations. Always there when someone is in need.
                    </p>
                </div>
                {{-- Social Icons --}}
                <div class="flex gap-4 items-start">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/a21f64d0-7b2b-4f40-8458-ec828e96bb92" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/4986b0c1-db43-4ccd-8c0e-0a5ff1c81ad5" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/ba04f521-e63d-474b-96a7-23d4705e93fb" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/85354649-3a65-4e5b-ba26-43f1117ccc1b" alt="Social" class="block max-w-none size-full">
                    </div>
                </div>
            </div>
        </div>

        {{-- Team Member 4: Morgan John --}}
        <div class="flex flex-1 gap-6 items-center min-w-[550px] rounded-md">
            {{-- Profile Image --}}
            <div class="flex flex-1 flex-row items-center self-stretch">
                <div class="flex flex-1 flex-col h-full items-start rounded-[5px]">
                    <div class="flex-1 relative rounded-[5px] w-full">
                        <img src="https://www.figma.com/api/mcp/asset/10ca2912-f525-49d0-81de-65dff64d95fe" alt="Morgan John" class="absolute inset-0 w-full h-full object-cover rounded-[5px]">
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="flex flex-1 flex-col gap-8 items-start px-0 py-8">
                <div class="flex flex-col gap-4 items-start w-full">
                    <div class="flex flex-col items-start w-full">
                        <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                            Morgan John
                        </h3>
                        <p class="font-normal leading-[24px] text-[#0b2b4a] text-[16px] tracking-[-0.16px] w-full">
                            CEO
                        </p>
                    </div>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                        With his expertise in digital marketing channels and data analytics, Michael consistently helps our SaaS company succeed.
                    </p>
                </div>
                {{-- Social Icons --}}
                <div class="flex gap-4 items-start">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/a21f64d0-7b2b-4f40-8458-ec828e96bb92" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/4986b0c1-db43-4ccd-8c0e-0a5ff1c81ad5" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/ba04f521-e63d-474b-96a7-23d4705e93fb" alt="Social" class="block max-w-none size-full">
                    </div>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/85354649-3a65-4e5b-ba26-43f1117ccc1b" alt="Social" class="block max-w-none size-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section id="about-faq" class="bg-white flex flex-col items-center px-28 py-16">
    {{-- Header --}}
    <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
        <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
            <div class="flex flex-col gap-4 items-center text-center w-full">
                <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] tracking-[-0.48px] w-full">
                    Frequently asked questions
                </h2>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                    Our FAQ area is the best place to look to find answers to your questions. Our community and support team constantly updates the questions and answers.
                </p>
            </div>
        </div>
    </div>

    {{-- FAQ Table/Accordion --}}
    <div class="flex flex-col items-center rounded-[5px] w-full max-w-[1280px]">
        <div class="bg-white border border-[#e5e5e7] flex flex-col items-start rounded-[5px] shadow-[0px_1px_2px_0px_rgba(16,24,40,0.04)] w-full">
            {{-- Header Row --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 flex-col items-start justify-center px-8 py-5">
                    <h3 class="font-medium leading-[28px] text-[18px] text-[#323539] tracking-[-0.18px]">
                        General Product Questions
                    </h3>
                    <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Generic questions about our product
                    </p>
                </div>
                <div class="flex flex-row items-center self-stretch">
                    <div class="border-b border-[#e5e5e7] flex h-full items-center px-8 py-4">
                        <div class="bg-[#f8f9fb] flex gap-0 items-center px-3 py-1 rounded-full">
                            <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                                New
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FAQ Row 1 --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 gap-3 h-[80px] items-center min-w-0 px-8 py-4">
                    <div class="flex flex-col items-start">
                        <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                            How does your SaaS Product work?
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#e5e5e7] flex gap-3 h-[80px] items-center p-4">
                    <p class="font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Updated last week
                    </p>
                </div>
                <div class="border-b border-[#e5e5e7] flex h-[80px] items-center pl-4 pr-8 py-4">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/86ac2ba0-8652-4583-b1ed-c85499dc1280" alt="Chevron down" class="block max-w-none size-full">
                    </div>
                </div>
            </div>

            {{-- FAQ Row 2 --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 gap-3 h-[80px] items-center min-w-0 px-8 py-4">
                    <div class="flex flex-col items-start">
                        <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                            Can I update my payment method?
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#e5e5e7] flex gap-3 h-[80px] items-center p-4">
                    <p class="font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Updated today
                    </p>
                </div>
                <div class="border-b border-[#e5e5e7] flex h-[80px] items-center pl-4 pr-8 py-4">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/86ac2ba0-8652-4583-b1ed-c85499dc1280" alt="Chevron down" class="block max-w-none size-full">
                    </div>
                </div>
            </div>

            {{-- FAQ Row 3 --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 gap-3 h-[80px] items-center min-w-0 px-8 py-4">
                    <div class="flex flex-col items-start">
                        <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                            Are you GDPR compliant?
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#e5e5e7] flex gap-3 h-[80px] items-center p-4">
                    <p class="font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Updated 2 days ago
                    </p>
                </div>
                <div class="border-b border-[#e5e5e7] flex h-[80px] items-center pl-4 pr-8 py-4">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/86ac2ba0-8652-4583-b1ed-c85499dc1280" alt="Chevron down" class="block max-w-none size-full">
                    </div>
                </div>
            </div>

            {{-- FAQ Row 4 --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 gap-3 h-[80px] items-center min-w-0 px-8 py-4">
                    <div class="flex flex-col items-start">
                        <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                            Can I set limitations for my payment account?
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#e5e5e7] flex gap-3 h-[80px] items-center p-4">
                    <p class="font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Updated 3 days ago
                    </p>
                </div>
                <div class="border-b border-[#e5e5e7] flex h-[80px] items-center pl-4 pr-8 py-4">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/86ac2ba0-8652-4583-b1ed-c85499dc1280" alt="Chevron down" class="block max-w-none size-full">
                    </div>
                </div>
            </div>

            {{-- FAQ Row 5 --}}
            <div class="flex items-center w-full">
                <div class="border-b border-[#e5e5e7] flex flex-1 gap-3 h-[80px] items-center min-w-0 px-8 py-4">
                    <div class="flex flex-col items-start">
                        <p class="font-medium leading-[24px] text-[16px] text-[#323539] tracking-[-0.16px]">
                            Do you offer unlimited updates for your product?
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#e5e5e7] flex gap-3 h-[80px] items-center p-4">
                    <p class="font-medium leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px]">
                        Updated 4 days ago
                    </p>
                </div>
                <div class="border-b border-[#e5e5e7] flex h-[80px] items-center pl-4 pr-8 py-4">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <img src="https://www.figma.com/api/mcp/asset/86ac2ba0-8652-4583-b1ed-c85499dc1280" alt="Chevron down" class="block max-w-none size-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection