@extends('layouts.app')

@section('title', 'Blog - ' . config('app.name'))

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative bg-gray-900 py-32 lg:py-48">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/blog-hero-bg.jpg') }}" 
             alt="Blog Hero Background" 
             class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-gray-900/90"></div>
    </div>
    <div class="container mx-auto px-6 relative">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Explore Our Latest Insights
            </h1>
            <p class="text-xl text-gray-300 mb-8">
                Discover industry trends, expert analysis, and valuable resources
            </p>
            <!-- Optional Search Bar -->
            <div class="max-w-xl mx-auto">
                <form class="relative">
                    <input type="text" 
                           placeholder="Search articles..." 
                           class="w-full px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Featured Post (First Post) -->
        @if($blogs->isNotEmpty())
        <div class="mb-16">
            <article class="bg-white rounded-2xl shadow-xl overflow-hidden lg:flex">
                <div class="lg:w-1/2">
                    @if($blogs->first()->featured_image)
                    <img src="{{ Storage::url($blogs->first()->featured_image) }}" 
                         alt="{{ $blogs->first()->title }}" 
                         class="w-full h-[400px] object-cover">
                    @endif
                </div>
                <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center mb-4">
                        <span class="px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">
                            Featured
                        </span>
                        <span class="ml-4 text-gray-500">
                            {{ $blogs->first()->created_at->format('M d, Y') }}
                        </span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 hover:text-blue-600 transition duration-300">
                        <a href="{{ route('blog.show', $blogs->first()->slug) }}">
                            {{ $blogs->first()->title }}
                        </a>
                    </h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ Str::limit(strip_tags($blogs->first()->content), 200) }}
                    </p>
                    <a href="{{ route('blog.show', $blogs->first()->slug) }}" 
                       class="inline-flex items-center px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 transform hover:-translate-y-1">
                        Read Article
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- Regular Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($blogs->skip(1) as $blog)
            <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                @if($blog->featured_image)
                <div class="relative h-56 overflow-hidden group">
                    <img src="{{ Storage::url($blog->featured_image) }}" 
                         alt="{{ $blog->title }}" 
                         class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="text-sm text-blue-600">
                            {{ $blog->created_at->format('M d, Y') }}
                        </span>
                        <!-- Optional Category Tag -->
                        <span class="ml-4 px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                            Technology
                        </span>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition duration-300 line-clamp-2">
                        <a href="{{ route('blog.show', $blog->slug) }}">
                            {{ $blog->title }}
                        </a>
                    </h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ Str::limit(strip_tags($blog->content), 150) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('blog.show', $blog->slug) }}" 
                           class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition duration-300">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <!-- Optional Share Button -->
                        <button class="p-2 hover:bg-gray-100 rounded-full transition duration-300">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <div class="text-center py-20">
            <div class="max-w-md mx-auto">
                <svg class="w-20 h-20 text-gray-400 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Articles Yet</h3>
                <p class="text-gray-600">
                    Check back soon for our latest insights and updates.
                </p>
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Optional Newsletter Section -->
<section class="bg-blue-600 py-16">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-4">
                Stay Updated with Our Newsletter
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
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush