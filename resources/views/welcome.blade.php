<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body class="font-sans antialiased">
<nav class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-black/90">Scholarspace</a>
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-black/50 hover:text-black">How It Works</a>
                <a href="#" class="text-black/50 hover:text-black">Services</a>
                <a href="#" class="text-black/50 hover:text-black">About Us</a>
                <a href="#" class="text-black/50 hover:text-black">Contact</a>
                <a href="{{ route('login') }}"
                   class="bg-blue-500 text-white/90 hover:bg-blue-600 font-semibold py-2 px-4 rounded-md">Login</a>
                <a href="{{ route('register') }}"
                   class="bg-green-500 text-black/90 hover:bg-green-600 font-semibold py-2 px-4 rounded-md">Register</a>
            </div>
            <div class="md:hidden">
                <button>
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="bg-gray-50">
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex px-1 sm:px-4 lg:px-8 flex-col md:flex-row items-center justify-between">
            <div class="text-center w-2/3 relative md:text-left">
                <img src="{{ asset('images/svg2.png') }}" alt="Hero" class="w-64 -top-16 opacity-50 right-0 absolute rounded-lg">
                <div class="top-0 left-0 w-full h-full flex flex-col justify-center">
                    <section class="text-center mb-4 md:text-left">
                        <header class="mb-4">
                            <h1 class="text-4xl font-bold text-black/90 leading-snug">
                                Premium <span class="text-red-500">Essay Writing</span> <br> Services for College Students
                            </h1>
                        </header>
                        <p class="text-lg text-black/50 leading-relaxed">
                            Struggling with essays? Our <span
                                class="font-semibold text-blue-500">professional writers</span> are here to help. <br>
                            We offer <span class="font-semibold text-green-500">top-notch, plagiarism-free essays</span>
                            tailored to your needs. Choose us for <span class="font-semibold text-yellow-500">quality and punctuality</span>.
                            Experience a stress-free academic life with Scholarspace.
                        </p>
                    </section>
                    <div class="flex justify-center mt-4 md:justify-start">
                        <a href="{{ route('login') }}"
                           class="bg-blue-500 text-white/90 hover:bg-blue-600 font-semibold py-2 pl-2 rounded-lg mr-4">
                            Solve my paper
                            <span class="mx-2 rounded-md bg-white bg-opacity-20 btn-ghost btn btn-square btn-sm">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 md:mt-0">
                <livewire:PriceCalculator/>
            </div>
        </div>
    </div>


    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-black/90 mb-4">How It Works</h2>
            <p class="text-lg text-black/50">Our simple and efficient process for getting your assignments done.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $colors = ['text-blue-500', 'text-green-500', 'text-yellow-500', 'text-red-500'];
            @endphp
            @foreach($process_steps as $item)
                <div class="bg-white rounded-lg shadow-md shadow-gray-200 p-6">
                    <i class="{{ $item['icon'] }} fa-3x {{ $colors[$loop->index % 4] }} mb-4"></i>
                    <h3 class="text-xl font-bold text-black/90 mb-2">{{ $item['title'] }}</h3>
                    <p class="text-black/50">{{ $item['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-8 md:mb-0">
                    <img src="{{ asset('images/svg1.png') }}" alt="Writing"
                         class="w-full max-w-md mx-auto rounded-lg">
                </div>
                <div class="text-center md:text-left md:ml-8">
                    <h2 class="text-3xl font-bold text-black/90 mb-4">Professional Writers</h2>
                    <p class="text-lg text-black/50 mb-6">Our team of experienced writers have expertise in various
                        academic disciplines, ensuring you receive high-quality and well-researched assignments.</p>
                    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Learn
                        More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-black/90 mb-4">Trusted by Students</h2>
            <p class="text-lg text-black/50">Hear what our satisfied clients have to say about Scholarspace.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset($testimonial['avatar']) }}" alt="Avatar"
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             style="border: 2px solid {{ $testimonial['color'] }}">
                        <div>
                            <h4 class="text-lg font-bold text-black/90">{{ $testimonial['name'] }}</h4>
                            <p class="text-black/50">{{ $testimonial['subject'] }}</p>
                        </div>
                    </div>
                    <p class="text-black/50">"{{ $testimonial['testimonial'] }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
