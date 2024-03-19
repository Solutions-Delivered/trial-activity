{{-- https://flowbite.com/blocks/publisher/related-articles/#carousel-slider-cards --}}
@if ($projects->isNotEmpty())
    <div class="bg-gray-100 py-12" id="project-section" data-section-name="Project" data-section-id="project-section">
        <div class="max-w-7xl mx-auto px-4 lg:px-0">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Our Projects</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Check Out Our Latest Projects
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Here are some of our recent projects that we are proud to showcase. Click on each project to learn
                    more.
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($projects as $project)
                        <div class="p-4">
                            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                                <img class="w-full h-64 object-cover object-center" src="{{ $project->image }}"
                                    alt="{{ $project->name }}">
                                <div class="p-6">
                                    <h3 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">
                                        PROJECT
                                    </h3>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                                        {{ $project->name }}
                                    </h2>
                                    <p class="leading-relaxed mb-3">
                                        {{ \Illuminate\Support\Str::limit($project->description, 70, '...') }}
                                    </p>
                                    <div class="flex items-center flex-wrap">
                                        <a href="{{ url('projects' . $project->slug) }}"
                                            class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn
                                            More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ url('projects') }}" class="text-indigo-500 inline-flex items-center font-bold">View All
                    Projects
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

        </div>
    </div>
@endif
