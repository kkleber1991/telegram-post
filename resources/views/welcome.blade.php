<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'PostFlow') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="relative min-h-screen">
            <!-- Navigation -->
            <nav class="relative z-10 w-full bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm">
                <div class="max-w-7xl mx-auto px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <!-- Logo -->
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">PostFlow</span>
                        </div>
                        
                        @if (Route::has('login'))
                            <div class="flex items-center gap-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-800 dark:text-white hover:text-gray-900 dark:hover:text-gray-100">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-800 dark:text-white hover:text-gray-900 dark:hover:text-gray-100">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-[#0088cc] border border-transparent rounded-lg font-semibold text-sm text-white hover:bg-[#0088cc]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0088cc] transition ease-in-out duration-150">Get Started</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <main class="max-w-7xl mx-auto px-6 py-16 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                        Post Once, <span class="text-[#0088cc]">Share Everywhere</span>
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-12 max-w-3xl mx-auto">
                        Streamline your content distribution with automated posting to multiple platforms, including Telegram and more. Powered by n8n automation.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 bg-[#0088cc] text-white font-semibold rounded-lg hover:bg-[#0088cc]/90 transition">
                            Start Posting
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#features" class="inline-flex items-center justify-center px-6 py-3 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-semibold rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            Learn More
                        </a>
                    </div>

                    <!-- Platform Icons -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 max-w-4xl mx-auto">
                        <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <svg class="w-12 h-12 text-[#0088cc]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.69-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.24.27-.48.74-.74 2.93-1.27 4.88-2.11 5.87-2.51 2.8-1.14 3.37-1.34 3.75-1.34.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/>
                            </svg>
                            <h3 class="mt-4 font-semibold text-gray-900 dark:text-white">Telegram</h3>
                        </div>
                        <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <svg class="w-12 h-12 text-blue-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"/>
                            </svg>
                            <h3 class="mt-4 font-semibold text-gray-900 dark:text-white">Twitter</h3>
                        </div>
                        <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <svg class="w-12 h-12 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <h3 class="mt-4 font-semibold text-gray-900 dark:text-white">Facebook</h3>
                        </div>
                        <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <svg class="w-12 h-12 text-pink-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.061-1.277-.256-2.149-.421-2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                            <h3 class="mt-4 font-semibold text-gray-900 dark:text-white">Instagram</h3>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Features Section -->
            <section id="features" class="py-16 bg-white dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid md:grid-cols-3 gap-12">
                        <div class="text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-[#0088cc]/10 rounded-2xl">
                                <svg class="w-8 h-8 text-[#0088cc]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Automated Posting</h3>
                            <p class="text-gray-600 dark:text-gray-300">Schedule and automate your posts across multiple platforms with just a few clicks.</p>
                        </div>
                        <div class="text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-[#0088cc]/10 rounded-2xl">
                                <svg class="w-8 h-8 text-[#0088cc]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">n8n Integration</h3>
                            <p class="text-gray-600 dark:text-gray-300">Powerful workflow automation with n8n integration for seamless content distribution.</p>
                        </div>
                        <div class="text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-[#0088cc]/10 rounded-2xl">
                                <svg class="w-8 h-8 text-[#0088cc]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Analytics</h3>
                            <p class="text-gray-600 dark:text-gray-300">Track your post performance and engagement across all platforms in one place.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
