<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer') }} : <strong>{{ $post->title }}</strong>
        </h2>
    </x-slot>


    <!-- component -->
    <div class="overflow-x-hidden bg-gray-100">


        <!-- component -->
        <div class="w-full">

            <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
                <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
                    <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">

                    <p class="text-3xl font-bold leading-7 text-center">Modifier Post</p>

                    <!-- Alert Error -->
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-200 px-6 py-4 my-4 rounded-md text-lg flex items-center mx-auto w-full">
                            <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                            </svg>
                            <span class="text-red-800"> {{ $error }}. </span>
                        </div>
                    @endforeach
                    <!-- End Alert Error -->

                    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">

                        @method('put')
                        @csrf

                        <div class="md:flex items-center mt-8">
                            <div class="w-full flex flex-col">
                                <label class="font-semibold leading-none">Catgory du post</label>
                                <select type="select" name="category" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="md:flex items-center mt-8">
                            <div class="w-full flex flex-col">
                                <label class="font-semibold leading-none">Titre du post</label>
                                <input type="text" name="title" value="{{ $post->title }}" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mt-8">
                                <label class="font-semibold leading-none">Contenu du post</label>
                                <textarea type="text" name="content" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200">{{ $post->content }}</textarea>
                            </div>
                        </div>

                        <!-- component -->
                        <div class="flex w-full items-center justify-center bg-grey-lighter mt-8">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' name="image" class="hidden" />
                            </label>
                        </div>


                        <div class="flex items-center justify-center w-full">
                            <button type="submit" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                                Modifier
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @include('partials.footer')
    </div>
</x-app-layout>
