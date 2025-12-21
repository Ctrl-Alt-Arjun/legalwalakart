@extends('layouts.app')

@section('title', 'Blog')

@section('content')

{{-- Blog Hero --}}
<section id="blog-hero" class="bg-[#f8f9fb] flex flex-col items-center justify-center pb-[92px] pt-20 px-28">
    <div class="flex flex-col gap-6 items-center w-[640px]">
        {{-- Rating Stars --}}
        <div class="flex gap-px items-center">
            <div class="flex items-start p-px w-6 h-6">
                <img src="https://www.figma.com/api/mcp/asset/543557fb-2e79-4a05-91f7-e9162ce7b643" alt="" class="w-full h-full object-contain">
            </div>
            <div class="flex items-start p-px w-6 h-6">
                <img src="https://www.figma.com/api/mcp/asset/543557fb-2e79-4a05-91f7-e9162ce7b643" alt="" class="w-full h-full object-contain">
            </div>
            <div class="flex items-start p-px w-6 h-6">
                <img src="https://www.figma.com/api/mcp/asset/543557fb-2e79-4a05-91f7-e9162ce7b643" alt="" class="w-full h-full object-contain">
            </div>
            <div class="flex items-start p-px w-6 h-6">
                <img src="https://www.figma.com/api/mcp/asset/543557fb-2e79-4a05-91f7-e9162ce7b643" alt="" class="w-full h-full object-contain">
            </div>
            <div class="flex items-start p-px w-6 h-6">
                <img src="https://www.figma.com/api/mcp/asset/543557fb-2e79-4a05-91f7-e9162ce7b643" alt="" class="w-full h-full object-contain">
            </div>
        </div>

        {{-- Title and Description --}}
        <div class="flex flex-col gap-12 items-center text-center w-full">
            <div class="flex flex-col gap-6 items-center w-full">
                <h1 class="font-bold leading-[60px] text-[52px] text-[#323539] tracking-[-1.04px] w-full">
                    Maximize User Reach and Engagement with the Latest Tools
                </h1>
                <p class="font-normal leading-[26px] text-[18px] text-[#858c95] tracking-[-0.18px] w-full">
                    We've been told it is possible to revolutionize the payment industry. We have not reinvented the wheel, we decided to build upon it - successfully.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Blog Content --}}
<section id="blog-content" class="bg-white flex flex-col items-center py-12">
    <div class="flex flex-col gap-12 items-start w-[840px]">
        {{-- Section 1 --}}
        <div class="flex flex-col gap-4 items-start w-full">
            <h2 class="font-medium leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                Recognizing the Influence of Thoughts:
            </h2>
            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                The human mind possesses an incredible ability to shape our experiences and outcomes. It is said that our thoughts create our reality, and this notion forms the foundation of positive thinking. The power of positive thinking goes beyond mere optimism; it is a mindset that can influence our actions, emotions, and ultimately, our success. By understanding and harnessing the power of our thoughts, we can transform our lives and achieve remarkable results.
            </p>
        </div>

        {{-- Section 2: Image --}}
        <div class="flex flex-col gap-4 items-start w-full">
            <div class="h-[553px] relative w-full">
                <img src="https://www.figma.com/api/mcp/asset/5a6880ce-80f7-4368-8e33-13e1293e6355" alt="" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                It is a long established fact that a reader
            </p>
        </div>

        {{-- Section 3 --}}
        <div class="flex flex-col gap-4 items-start w-full">
            <h2 class="font-medium leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                Shifting from Limiting Beliefs to Empowering Thoughts:
            </h2>
            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                Our thoughts have a profound impact on our perception of the world and our ability to navigate through challenges. Negative thoughts tend to breed self-doubt, fear, and limitations, while positive thoughts foster confidence, resilience, and a sense of possibility. By becoming aware of our thoughts and their influence, we gain the first step towards harnessing their power.
            </p>
            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                Limiting beliefs act as mental roadblocks that hinder our progress. They often stem from past experiences, societal conditioning, or self-imposed limitations. To unlock the power of positive thinking, we must challenge and replace these limiting beliefs with empowering thoughts. This involves cultivating self-awareness, reframing negative situations, and adopting affirmations that align with our goals and aspirations.
            </p>
        </div>

        {{-- Section 4 --}}
        <div class="flex flex-col gap-4 items-start w-full">
            <h2 class="font-medium leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                Cultivating a Positive Mindset:
            </h2>
            <ul class="list-disc ml-6 font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full space-y-0">
                <li>Facere necessitatibus labore</li>
                <li>Vero fugiat consequatur</li>
                <li>Numquam repellat</li>
                <li>Mollitia exercitationem sunt</li>
                <li>Quis sed sed consectetur.</li>
                <li>Nobis eos provident</li>
            </ul>
            <p class="font-normal leading-[24px] text-[16px] text-[#858c95] tracking-[-0.16px] w-full">
                A positive mindset is a key ingredient in harnessing the power of positive thinking. It involves consciously choosing to focus on the good, seek opportunities in challenges, and maintain a resilient attitude in the face of setbacks. By cultivating gratitude, practicing mindfulness, and surrounding ourselves with positivity, we can shape our mindset and pave the way for success.
            </p>
        </div>
    </div>
</section>

{{-- Key Takeaways --}}
<section id="blog-takeaways"></section>

{{-- Latest Blog Posts --}}
<section id="blog-latest" class="bg-[#fafbfc] flex flex-col items-center px-28 py-16">
    {{-- Header --}}
    <div class="flex flex-col items-center justify-center max-w-[1280px] w-full mb-16">
        <div class="flex flex-col gap-2 items-center justify-center w-[800px]">
            <h2 class="font-bold leading-[40px] text-[32px] text-[#323539] text-center tracking-[-0.48px] w-full">
                Latest Blog Posts
            </h2>
        </div>
    </div>

    {{-- Blog Cards Grid --}}
    <div class="flex gap-8 items-center justify-center w-full max-w-[1280px]">
        {{-- Card 1 --}}
        <div class="flex flex-1 flex-col gap-4 items-start min-w-[250px]">
            <div class="flex-1 relative w-full rounded-md">
                <img src="https://www.figma.com/api/mcp/asset/7e19a81a-b94d-4c5a-8cd9-cbb95eb7446f" alt="" class="absolute inset-0 w-full h-full object-cover rounded-md">
            </div>
            <div class="flex flex-col gap-4 items-start w-full">
                <div class="flex flex-col gap-2 items-start w-full">
                    <p class="font-semibold leading-[20px] text-[14px] text-[#0a77ff] tracking-[-0.1px]">
                        25 Apr 2023
                    </p>
                    <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                        Organize your digital assets with a new methodology and there.
                    </h3>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <span class="font-semibold leading-[22px] text-[15px] text-[#0a77ff]">Learn more</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <svg class="w-full h-full text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="flex flex-1 flex-col gap-4 items-start min-w-[250px]">
            <div class="flex-1 relative w-full rounded-md">
                <img src="https://www.figma.com/api/mcp/asset/160c94bf-e0b0-40b6-bb5c-694c5bc7b198" alt="" class="absolute inset-0 w-full h-full object-cover rounded-md">
            </div>
            <div class="flex flex-col gap-4 items-start w-full">
                <div class="flex flex-col gap-2 items-start w-full">
                    <p class="font-semibold leading-[20px] text-[14px] text-[#0a77ff] tracking-[-0.1px]">
                        25 Apr 2023
                    </p>
                    <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                        Faster ways to reach your customers and their needs.
                    </h3>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <span class="font-semibold leading-[22px] text-[15px] text-[#0a77ff]">Learn more</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <svg class="w-full h-full text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="flex flex-1 flex-col gap-4 items-start min-w-[250px]">
            <div class="flex-1 relative w-full rounded-md">
                <img src="https://www.figma.com/api/mcp/asset/310cad13-37ef-4fbf-8582-2a0851bb8822" alt="" class="absolute inset-0 w-full h-full object-cover rounded-md">
            </div>
            <div class="flex flex-col gap-4 items-start w-full">
                <div class="flex flex-col gap-2 items-start w-full">
                    <p class="font-semibold leading-[20px] text-[14px] text-[#0a77ff] tracking-[-0.1px]">
                        25 Apr 2023
                    </p>
                    <h3 class="font-bold leading-[30px] text-[22px] text-[#323539] tracking-[-0.22px] w-full">
                        Gestalt psychology in UI/UX design and beyond.
                    </h3>
                </div>
                <a href="#" class="flex gap-1.5 items-center justify-center rounded-[5px]">
                    <span class="font-semibold leading-[22px] text-[15px] text-[#0a77ff]">Learn more</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <svg class="w-full h-full text-[#0a77ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Newsletter --}}
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