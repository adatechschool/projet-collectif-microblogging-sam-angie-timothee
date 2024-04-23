<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <textarea
                name="content"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('content') }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
        </form>
        <div>
            @foreach ($posts as $post)
                <div style="margin: 12px" class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl"><!--horizantil margin is just for display-->
                    <div class="flex items-start justify-between px-4 py-6">
                    <img style="margin-right:6px" class="w-6 h-6 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                    <div class="">
                        <div class="flex items-stretch">
                            <h2 class="text-lg font-semibold text-gray-900 -mt-1">UserId : {{ $post['user_id']}} </h2>
                            <small class="text-sm text-gray-700">{{ $post['created_at'] }}</small>
                        </div>
                        <p class="mt-3 text-gray-700 text-sm">
                            {{ $post['content'] }}
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                <span>12</span>
                            </div>
                            <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                </svg>
                                <span>8</span>
                            </div>
                            <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                </svg>
                                <span>share</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>

</x-app-layout>