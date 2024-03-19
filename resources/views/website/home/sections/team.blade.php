{{-- https://flowbite.com/blocks/marketing/team/#cards-with-grid-layout-and-cta --}}
@if ($team_members->isNotEmpty())
    <section class="bg-gray-900" id="team-section" data-section-name="Team" data-section-id="team-section">
        <div class="max-w-screen-xl px-4 py-16 mx-auto lg:px-6 lg:py-24">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Our Team</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Meet our team member
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our team is made up of talented and passionate individuals who are dedicated to providing the best
                    services to our clients. We are always looking for new talents to join our team.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-4 mt-8 lg:mt-16 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($team_members as $member)
                    <div class="relative overflow-hidden rounded-lg group">
                        {{-- <img class="object-cover w-full h-[320px] lg:h-auto scale-100 ease-in duration-300 group-hover:scale-125"
                        src="{{ $member->image }}" alt="{{ $member->name }}"> --}}
                        <img class="object-cover w-full h-[320px] lg:h-auto scale-100 ease-in duration-300 group-hover:scale-125"
                            src="{{ asset('images/freepik-ceo.jpg') }}" alt="{{ $member->name }}">
                        <div
                            class="absolute inset-0 grid items-end justify-center p-4 bg-gradient-to-b from-transparent to-black/60">
                            <div class="text-center">
                                <p class="text-xl font-bold text-white">
                                    {{ $member->name }}
                                </p>
                                <p class="text-base font-medium text-gray-300">
                                    {{ $member->role }}
                                </p>
                                <div>
                                    <ul class="flex justify-center space-x-4 mt-2">
                                        <li>
                                            <a href="https://twitter.com/{{ $member->twitter }}"
                                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                                <i class="fa-brands fa-twitter fa-lg"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/{{ $member->linkedin }}"
                                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                                <i class="fa-brands fa-linkedin fa-lg"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/{{ $member->github }}"
                                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                                <i class="fa-brands fa-github fa-lg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="max-w-3xl p-4 mx-auto mt-8 rounded-md lg:mt-16 bg-gray-50 dark:bg-gray-800">
                <div class="flex flex-col justify-between gap-3 md:gap-6 md:items-center md:flex-row">
                    <div class="flex items-center gap-1.5">
                        <svg aria-hidden="true"
                            class="hidden w-5 h-5 text-gray-800 dark:text-gray-400 md:block shrink-0"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                        <span class="text-base font-normal text-gray-700 dark:text-gray-400">
                            <span class="font-semibold">
                                Want to join to our team?
                            </span>
                            We are growing our community.
                        </span>
                    </div>

                    <a href="#" title=""
                        class="inline-flex items-center text-base font-medium text-gray-600 hover:underline dark:text-gray-500">
                        Join our team
                        <i class="fa-solid fa-arrow-right w-5 h-5 ml-1.5 mt-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif
