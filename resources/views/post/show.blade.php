<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>


    <!-- component -->
    <div class="overflow-x-hidden bg-gray-100 flex-wrapper">


        <!-- component -->
        <div class="max-w-screen-xl mx-auto">

            <main class="mt-10">

                <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                    <div class="absolute left-0 bottom-0 w-full h-full z-10" style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="{{ asset('/storage/' . $post->image) }}" class="h-full w-full" />
                        <div class="p-4 absolute bottom-0 left-0 z-20">
                            <a href="#" class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
                            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                                {{ $post->title }}
                            </h2>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/97.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                <p class="font-semibold text-gray-200 text-sm"> {{ $post->user->name }} </p>
                                <p class="font-semibold text-gray-400 text-xs"> {{ $post->created_at->format("d M") }} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                    <p class="pb-6">
                        {{ $post->content }}
                    </p>

                </div>

            </main>
            <!-- main ends here -->

        </div>

        @include('partials.footer')
    </div>
</x-app-layout>
