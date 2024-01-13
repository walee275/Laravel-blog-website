<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full text-center " style="padding-top: 16rem; padding-bottom: 16rem; background-color:#fffae6;">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span style="color:#4a1872;">NeotronicDev's Blog</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="{{ route('posts.index') }}">Start
                Reading</a>
        </div>
    @endsection
    <div class="mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-dark-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featured_posts as $feature_post)
                            <x-posts.post-card :post="$feature_post" class="md:col-span-1 col-span-3"/>
                    @endforeach

                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-dark-500 font-semibold"
                href="{{ route('posts.index') }}">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-dark-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latest_posts as $latest_post)
                        <x-posts.post-card :post="$latest_post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-dark-500 font-semibold" href="{{ route('posts.index') }}">More
            Posts</a>
    </div>


</x-app-layout>
