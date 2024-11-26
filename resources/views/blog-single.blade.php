@extends('layouts.app')

@section('title', $blog->title . ' - ' . config('app.name'))

@section('content')
<!-- Hero Section with Dynamic Background -->
<section class="relative bg-gray-900 py-32">
    <div class="absolute inset-0 overflow-hidden">
        @if($blog->featured_image)
            <img src="{{ Storage::url($blog->featured_image) }}" 
                 alt="{{ $blog->title }}" 
                 class="w-full h-full object-cover opacity-20">
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/90 to-gray-900/70"></div>
    </div>
    <div class="container mx-auto px-6 relative">
        <div class="max-w-4xl mx-auto">
            <nav class="mb-8">
                <a href="{{ route('blog.index') }}" 
                   class="inline-flex items-center text-blue-400 hover:text-blue-300 transition duration-300 group">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Articles
                </a>
            </nav>
            <div class="text-center">
                <div class="flex items-center justify-center space-x-4 mb-6">
                    <span class="px-4 py-1 bg-blue-600/20 text-blue-400 rounded-full text-sm">
                        Article
                    </span>
                    <span class="text-gray-400">
                        {{ $blog->created_at->format('F d, Y') }}
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    {{ $blog->title }}
                </h1>
                <!-- Optional Author Section -->
                <div class="flex items-center justify-center mt-8">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF" 
                             alt="Author" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="text-left">
                        <div class="text-white font-medium">Admin</div>
                        <div class="text-gray-400 text-sm">Content Writer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-16 lg:py-24">
    <div class="container mx-auto px-6">
        <article class="max-w-3xl mx-auto">
            @if($blog->featured_image)
            <div class="mb-12 rounded-2xl overflow-hidden shadow-2xl">
                <img src="{{ Storage::url($blog->featured_image) }}" 
                     alt="{{ $blog->title }}" 
                     class="w-full h-auto transform hover:scale-105 transition duration-700">
            </div>
            @endif

            <!-- Table of Contents (Optional) -->
            <div class="bg-gray-50 rounded-xl p-6 mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Table of Contents</h2>
                <nav class="space-y-2">
                    <a href="#" class="block text-gray-600 hover:text-blue-600 transition duration-300">Introduction</a>
                    <a href="#" class="block text-gray-600 hover:text-blue-600 transition duration-300">Main Content</a>
                    <a href="#" class="block text-gray-600 hover:text-blue-600 transition duration-300">Conclusion</a>
                </nav>
            </div>

            <div class="prose prose-lg md:prose-xl max-w-none">
                {!! $blog->content !!}
            </div>

            <!-- Tags Section -->
            <div class="mt-12 flex flex-wrap gap-2">
                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition duration-300">
                    #technology
                </span>
                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition duration-300">
                    #webdev
                </span>
            </div>

            <!-- Share Section -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Share this article</h3>
                <div class="flex flex-wrap gap-4">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" 
                       target="_blank"
                       class="flex items-center px-6 py-3 bg-[#1DA1F2] text-white rounded-lg hover:bg-opacity-90 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                        Twitter
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                       target="_blank"
                       class="flex items-center px-6 py-3 bg-[#1877F2] text-white rounded-lg hover:bg-opacity-90 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($blog->title) }}" 
                       target="_blank"
                       class="flex items-center px-6 py-3 bg-[#0A66C2] text-white rounded-lg hover:bg-opacity-90 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- Related Posts -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($blogs->where('id', '!=', $blog->id)->take(3) as $relatedPost)
            <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                @if($relatedPost->featured_image)
                <div class="relative h-48 overflow-hidden group">
                    <img src="{{ Storage::url($relatedPost->featured_image) }}" 
                         alt="{{ $relatedPost->title }}" 
                         class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>
                @endif
                <div class="p-6">
                    <div class="text-sm text-blue-600 mb-2">
                        {{ $relatedPost->created_at->format('M d, Y') }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition duration-300">
                        <a href="{{ route('blog.show', $relatedPost->slug) }}">
                            {{ $relatedPost->title }}
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ Str::limit(strip_tags($relatedPost->content), 100) }}
                    </p>
                    <a href="{{ route('blog.show', $relatedPost->slug) }}" 
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="bg-blue-600 py-16">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-4">
                Subscribe to Our Newsletter
            </h2>
            <p class="text-blue-100 mb-8">
                Get the latest articles and insights delivered straight to your inbox
            </p>
            <form class="flex flex-col sm:flex-row gap-4">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" 
                        class="px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush