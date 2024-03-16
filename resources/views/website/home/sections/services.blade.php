<div id="services-section" data-section-name="Services" data-section-id="services-section"
    class="relative mt-[20px] pt-[10px] pb-[150px] lg:mt-[130px] md:mt-[130px] sm:mt-[130px] xsm:mt-[130px] lg:pt-[60px] md:pt-[60px] sm:pt-[60px] xsm:pt-[60px] lg:pb-[60px] md:pb-[60px] sm:pb-[60px] xsm:pb-[60px] z-[1] after:content-[''] after:absolute after:w-full after:h-10 after:bg-cover after:bottom-[-38px] after:z-[-2] after:left-0 before:content-[''] before:absolute before:w-full before:h-[26px] before:bg-cover before:top-[-25px] before:z-[-1] before:left-0 bg-[#F5F5F5] before:bg-no-repeat before:bg-[center_top]  ">
    <div class="container mx-auto max-w-screen-xl lg:py-12">
        <div class="flex flex-wrap mx-4 lg:mx-[-12px]">
            <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] px-[12px] max-w-full !mr-auto mt-10 md:mt-[10px] sm:mt-[10px] xsm:mt-[10px] wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="pt-8">
                    <h2 class="font-extrabold text-black text-2xl xl:text-7xl">Let’s <br> <span
                            class=" inline-block relative z-[1] before:content-[''] before:absolute before:w-[98%] before:h-3 before:z-[-1] before:left-1 before:bottom-2.5 before:bg-[rgba(255,139,37,0.4)]">Discover</span>
                        all our Services.</h2>
                </div>
            </div>
            @foreach ($services as $service)
                <div class="xl:w-3/12 lg:w-3/12 md:w-6/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full flex mt-10 wow fadeInUp"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div
                        class="card-style-ten w-full rounded-[10px] flex flex-col bg-white !pr-[1rem] !pl-[1rem] xl:!pr-[3rem] xl:!pl-[3rem]  pt-[60px] pb-[45px] lg:pt-10 md:pt-10 sm:pt-10 xsm:pt-10 lg:pb-[30px] md:pb-[30px] sm:pb-[30px] xsm:pb-[30px] ">
                        <div class="icon h-[65px] lg:h-[50px] md:h-[50px] sm:h-[50px] xsm:h-[50px] flex items-end">
                            <img src="{{ asset('images/icons/sample-icon.svg') }}" alt=""
                                class="lazy-img max-h-full" style="">
                        </div>
                        <h4 class="font-bold mt-5">
                            {{ $service->name }}
                        </h4>
                        <p class="text-sm text-gray-700 my-4">
                            {{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}
                        </p>
                        <a href="{{ url('services/' . $service->slug) }}"
                            class="read-btn mt-auto tran3s hover:translate-x-[3px]"><img
                                src="images/icons/sample-icon-1.svg" alt="" class="lazy-img" style=""></a>
                    </div>
                </div>
            @endforeach
            <div class="xxl:w-2/12 xl:w-3/12 lg:w-3/12 sm:w-5/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto flex items-center justify-center xsm:text-center text-left mt-10 wow fadeInUp"
                data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="block">
                    <div class="text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px]  font-medium"
                        style="color:#FF7228;">Need more?</div>
                    <h4 class="font-normal text-[26px]">Looking for other service.</h4>
                    <a href="{{ url('services') }}"
                        class="leading-[50px] text-gray-700 rounded-[30px] hover:text-gray-900 font-medium">
                        View all services
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-[50%] absolute z-[-1] w-9 h-9 right-[21%] -top-10 bg-[#007BFF] "></div>
    <div class="rounded-[50%] absolute z-[-1] w-9 h-9 left-[30%] -bottom-10 bg-[#FF7228]"></div>
    <div
        class="rounded-[50%] absolute z-[-1] w-2.5 h-2.5 animate-[jumpThree_5s_infinite_linear] left-[4%] top-[43%] bg-[#00D8AF]">
    </div>
    <img src="{{ asset('images/shapes/shape_88.svg') }}" alt="" class="absolute z-[-1] left-0 bottom-[6%]"
        style="">
    <img src="{{ asset('images/shapes/shape_89.svg') }}" alt="" class="absolute z-[-1] right-0 top-[6%]"
        style="">
</div>
