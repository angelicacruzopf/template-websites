<!-- FAQ -->
<section class="flex justify-center bg-mediumGray">
    <div class="flex flex-col items-center w-[90%] md:w-9/12 py-16 text-white max-w-[1000px]">
        <h2 class="font-bold mb-10 text-2xl md:text-4xl">FAQs</h2>
        <div class="divide-y w-full">
            <!-- QUESTION 1 -->
            <div x-data="{ open: false}">
                <div x-on:click="open = !open" class="flex justify-between py-6">
                    <div class="font-extrabold">
                    What services does M.J. Auto Service offer?
                    </div>
                    <button class="text-white text-2xl">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="pb-4 text-white divide-y">
                At M.J. Auto Service, we offer a wide range of automotive services, including routine maintenance (such as oil changes, tire rotations), major repairs, diagnostics, inspections, and specialized services like alignments and air conditioning maintenance.
                </div>
            </div>

            <!-- QUESTION 2 -->
            <div x-data="{ open: false}">
                <div x-on:click="open = !open" class="flex justify-between py-6">
                    <div class="font-extrabold">
                    How do I schedule an appointment at M.J. Auto Service?
                    </div>
                    <button class="text-white text-2xl">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="pb-4 text-white divide-y">
                Scheduling an appointment with us is easy! You can give us a call at +1 (210) 277 76 89 or use or send us a message using the message box of our website

                </div>
            </div>

            <!-- QUESTION 3 -->
            <div x-data="{ open: false}">
                <div x-on:click="open = !open" class="flex justify-between py-6">
                    <div class="font-extrabold">
                    Are your technicians certified and experienced?
                    </div>
                    <button class="text-white text-2xl">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="pb-4 text-white divide-y">
                Yes, our technicians are highly trained, certified, and experienced in handling a variety of automotive issues. They stay updated with the latest advancements in technology to provide you with top-notch service.
                </div>
            </div>

            <!-- QUESTION 4 -->
            <div x-data="{ open: false}">
                <div x-on:click="open = !open" class="flex justify-between py-6">
                    <div class="font-extrabold">
                    What types of vehicles do you service?
                    </div>
                    <button class="text-white text-2xl">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="pb-4 text-white divide-y">
                We service all makes and models of vehicles, including cars, trucks, SUVs, and vans. Whether you have a domestic or foreign vehicle, you can trust us to take care of it.
                </div>
            </div>

            <!-- QUESTION 5 -->
            <div x-data="{ open: false}">
                <div x-on:click="open = !open" class="flex justify-between py-6">
                    <div class="font-extrabold">
                    Do you offer warranties on your services and parts?
                    </div>
                    <button class="text-white text-2xl">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="pb-4 text-white divide-y">
                    Yes, we stand behind our work and the parts we use. We offer warranties on our services and parts to give you peace of mind knowing that your vehicle is in good hands at M.J. Auto Service.
                </div>
            </div>
        </div>
    </div>
</section>
