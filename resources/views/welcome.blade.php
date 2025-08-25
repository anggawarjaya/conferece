<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings['conference_name'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#2563eb',
                        'primary-dark': '#1d4ed8',
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .hero-pattern::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
                background-size: cover;
            }
            
            .timeline-line::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 2px;
                background: #2563eb;
            }
            
            .timeline-dot::before {
                content: '';
                position: absolute;
                left: -9px;
                top: 6px;
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #2563eb;
            }
            
            .section-title::after {
                content: '';
                display: block;
                width: 80px;
                height: 4px;
                background: #2563eb;
                margin: 20px auto;
                border-radius: 2px;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            
            @keyframes scaleIn {
                from {
                    opacity: 0;
                    transform: scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            
            .animate-fadeInUp {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            
            .animate-fadeIn {
                animation: fadeIn 0.5s ease-out forwards;
            }
            
            .animate-scaleIn {
                animation: scaleIn 0.5s ease-out forwards;
            }
            
            .date-card {
                opacity: 0;
            }
            
            .date-card:nth-child(1) {
                animation-delay: 0.1s;
            }
            
            .date-card:nth-child(2) {
                animation-delay: 0.3s;
            }
            
            .date-card:nth-child(3) {
                animation-delay: 0.5s;
            }
            
            .date-card:nth-child(4) {
                animation-delay: 0.7s;
            }
            
            .topic-card {
                opacity: 0;
            }
            
            .topic-card:nth-child(1) {
                animation-delay: 0.1s;
            }
            
            .topic-card:nth-child(2) {
                animation-delay: 0.3s;
            }
            
            .topic-card:nth-child(3) {
                animation-delay: 0.5s;
            }
            
            .topic-item {
                transition: all 0.3s ease;
            }
            
            .tag-item {
                transition: all 0.3s ease;
            }
            
            .reviewer-card {
                opacity: 0;
            }
            
            .location-info,
            .map-container {
                opacity: 0;
            }
        }
        .marquee-text {
            animation: marquee-left 30s linear infinite;
            top: 50%;
            transform: translateY(-50%);
            left: 100%;
            font-weight: bold;
        }

        @keyframes marquee-left {
            0% {
                left: 100%;
            }
            100% {
                left: -100%;
            }
        }
    </style>
    <style>
@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

.animate-marquee {
    animation: marquee 15s linear infinite;
}
</style>
</head>
<body class="font-sans text-gray-800 leading-normal antialiased">
    
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 text-white hidden lg:block">
    <div class="bg-red-600 text-white py-1 overflow-hidden">
        <div class="whitespace-nowrap animate-marquee">
            <span class="inline-block px-4 text-xl font-bold">
                🔧 Under maintenance by AISTEEL committee PPs UNIMED@2025 🔧
            </span>
        </div>
    </div>

    <div class="container mx-auto px-4 py-5">
        <div class="flex flex-wrap items-center justify-between">
            <a href="#" class="text-xl font-bold">
                {{ $settings['conference_acronym'] }} {{ $settings['conference_year'] }}
            </a>
            
            <button id="menu-toggle" class="lg:hidden block focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <div id="menu" class="hidden lg:flex lg:items-center w-full lg:w-auto">
                <div class="lg:flex lg:ml-auto">
                    <a href="#" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Home</a>
                    <a href="#about" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">About</a>
                    <a href="#dates" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Important Dates</a>
                    <a href="#submission" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Submission</a>
                    <a href="#reviewers" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Reviewers</a>
                    <a href="#location" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Location</a>
                    
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block lg:inline-block px-4 py-2 hover:text-blue-600 font-medium">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>


    <section class="relative overflow-hidden text-white hero-pattern">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/pps-unimed.jpg') }}" alt="Hero Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    </div>

        <div class="container mx-auto px-4 relative z-10 min-h-[700px] flex items-center">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-7/12 mb-12 lg:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold my-6">{{ $settings['conference_name'] }}</h1>
                <p class="text-xl mb-4">{{ $settings['conference_year'] }} | {{ $settings['conference_location'] }}</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#submission" class="bg-white text-blue-700 hover:bg-gray-100 px-6 py-3 rounded-lg font-medium transition-colors duration-300">Submit Paper</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-700 text-white hover:bg-white hover:text-blue-700 px-6 py-3 rounded-lg font-medium transition-colors duration-300">Register Now</a>
                    @endif
                </div>
            </div>
            <div class="w-full lg:w-5/12">
                <div class="bg-white bg-opacity-10 p-6 mb-3 rounded-xl backdrop-blur-md">
                    <h4 class="text-center text-xl font-semibold mb-6">Submission Deadline</h4>
                    <div class="flex flex-wrap justify-center" id="countdown">
                        <div class="bg-white bg-opacity-15 rounded-lg mx-2 mb-2 p-4 min-w-20 text-center">
                            <div id="days" class="text-3xl font-bold">--</div>
                            <div>Days</div>
                        </div>
                        <div class="bg-white bg-opacity-15 rounded-lg mx-2 mb-2 p-4 min-w-20 text-center">
                            <div id="hours" class="text-3xl font-bold">--</div>
                            <div>Hours</div>
                        </div>
                        <div class="bg-white bg-opacity-15 rounded-lg mx-2 mb-2 p-4 min-w-20 text-center">
                            <div id="minutes" class="text-3xl font-bold">--</div>
                            <div>Minutes</div>
                        </div>
                        <div class="bg-white bg-opacity-15 rounded-lg mx-2 mb-2 p-4 min-w-20 text-center">
                            <div id="seconds" class="text-3xl font-bold">--</div>
                            <div>Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">About The Conference</h2>
            
            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-xl text-gray-600">{{ $settings['conference_description'] }}</p>
            </div>
            
            <div class="flex flex-wrap -mx-4 mt-12">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-xl shadow-md p-8 text-center h-full transform transition duration-300 hover:-translate-y-2 hover:shadow-lg">
                        <div class="mb-6 text-blue-600">
                            <i class="fas fa-users text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-4">Networking</h4>
                        <p class="text-gray-600">Connect with leading researchers, academics, and industry professionals in your field.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-xl shadow-md p-8 text-center h-full transform transition duration-300 hover:-translate-y-2 hover:shadow-lg">
                        <div class="mb-6 text-blue-600">
                            <i class="fas fa-lightbulb text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-4">Knowledge Sharing</h4>
                        <p class="text-gray-600">Discover cutting-edge research and the latest developments in the field.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-xl shadow-md p-8 text-center h-full transform transition duration-300 hover:-translate-y-2 hover:shadow-lg">
                        <div class="mb-6 text-blue-600">
                            <i class="fas fa-certificate text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-4">Publication</h4>
                        <p class="text-gray-600">Accepted papers will be published in the conference proceedings with potential for journal special issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  

<section class="bg-blue-800 text-white py-20 px-4">
  <div class="container mx-auto max-w-6xl">
    <h2 class="text-3xl font-bold text-center mb-16 section-title">Keynote Speakers</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- Speaker 1 --}}
      <div class="bg-blue-700 p-8 rounded-lg shadow-xl flex flex-col md:flex-row items-center md:items-start text-center md:text-left space-y-6 md:space-y-0 md:space-x-8 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl hover:bg-blue-600">
        <div class="flex-shrink-0">
          {{-- Perubahan di sini: Kontainer gambar persegi dengan sudut membulat --}}
          <div class="relative w-40 h-40 md:w-48 md:h-48 rounded-lg overflow-hidden border-4 border-blue-400">
            <img
              src="{{ asset('assets/img/Prof syawal.jpg') }}"
              alt="Photo of Prof. Dr. Syawal Gultom"
              class="object-cover w-full h-full" {{-- img mengisi penuh kontainer --}}
            />
          </div>
        </div>
        <div class="flex-grow">
          <h3 class="text-2xl font-extrabold mb-2 pb-2 border-b border-blue-500">Professor Syawal Gultom</h3>
          <p class="text-lg font-medium opacity-90 mt-2">Specializes in teaching, research, and service in educational leadership and administration</p>
          <p class="text-base opacity-80">Universitas Negeri Medan, Indonesia</p>
        </div>
      </div>

      {{-- Speaker 2 --}}
      <div class="bg-blue-700 p-8 rounded-lg shadow-xl flex flex-col md:flex-row items-center md:items-start text-center md:text-left space-y-6 md:space-y-0 md:space-x-8 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl hover:bg-blue-600">
        <div class="flex-shrink-0">
          {{-- Perubahan di sini: Kontainer gambar persegi dengan sudut membulat --}}
          <div class="relative w-40 h-40 md:w-48 md:h-48 rounded-lg overflow-hidden border-4 border-blue-400">
            <img
              src="{{ asset('assets/img/Prof Mine.png') }}"
              alt="Photo of Prof. Dr. Eng. Tsunenori Mine"
              class="object-cover w-full h-full" {{-- img mengisi penuh kontainer --}}
            />
          </div>
        </div>
        <div class="flex-grow">
          <h3 class="text-2xl font-extrabold mb-2 pb-2 border-b border-blue-500">Professor Tsunenori Mine</h3>
          <p class="text-lg font-medium opacity-90 mt-2">Research and Development of Intelligent Information Systems toward Ubiquitous Environemnt</p>
          <p class="text-base opacity-80">Kyushu University, Japan</p>
        </div>
      </div>
      {{-- Speaker 3 --}}
      <div class="bg-blue-700 p-8 rounded-lg shadow-xl flex flex-col md:flex-row items-center md:items-start text-center md:text-left space-y-6 md:space-y-0 md:space-x-8 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl hover:bg-blue-600">
        <div class="flex-shrink-0">
          {{-- Perubahan di sini: Kontainer gambar persegi dengan sudut membulat --}}
          <div class="relative w-40 h-40 md:w-48 md:h-48 rounded-lg overflow-hidden border-4 border-blue-400">
            <img
              src="{{ asset('assets/img/DrBalazsHuszka.png') }}"
              alt="Photo of Prof. Dr. Eng. Tsunenori Mine"
              class="object-cover w-full h-full" {{-- img mengisi penuh kontainer --}}
            />
          </div>
        </div>
        <div class="flex-grow">
          <h3 class="text-2xl font-extrabold mb-2 pb-2 border-b border-blue-500">Dr. Balazs Huszka</h3>
          <p class="text-lg font-medium opacity-90 mt-2">Language Centre</p>
          <p class="text-base opacity-80">Universiti Brunei Darussalam, Brunei</p>
        </div>
      </div>
    </div>
  
</section> 
    
    <section id="dates" class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Important Dates</h2>
            <div class="max-w-5xl mx-auto">
                <div class="hidden md:block">
                    <div class="flex items-center justify-center mb-10">
                        <div class="h-1 bg-gradient-to-r from-blue-500 to-blue-600 rounded w-full"></div>
                    </div>
                    
                    <div class="flex">
                        <div class="w-1/4 px-4">
                            <div class="relative flex flex-col items-center">
                                <div class="absolute -top-5">
                                    <div class="rounded-full bg-blue-600 w-10 h-10 flex items-center justify-center border-4 border-white shadow-lg">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-lg p-6 mt-8 w-full transform transition hover:-translate-y-2 duration-300 hover:shadow-xl date-card">
                                    <div class="text-blue-600 mb-2">
                                        <i class="fas fa-calendar-day mr-2"></i>
                                        @php
                                            $date = \DateTime::createFromFormat('Y-m-d', $settings['submission_deadline']);
                                            $formattedDate = $date ? $date->format('M d, Y') : $settings['submission_deadline'];
                                        @endphp
                                        {{ $formattedDate }}
                                    </div>
                                    <h3 class="font-bold text-lg mb-2">Abstract Submission deadline</h3>
                                    <p class="text-gray-600 text-sm">Deadline for authors to submit their complete papers.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-1/4 px-4">
                            <div class="relative flex flex-col items-center">
                                <div class="absolute -top-5">
                                    <div class="rounded-full bg-blue-600 w-10 h-10 flex items-center justify-center border-4 border-white shadow-lg">
                                        <i class="fas fa-search text-white"></i>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-lg p-6 mt-8 w-full transform transition hover:-translate-y-2 duration-300 hover:shadow-xl date-card">
                                    <div class="text-blue-600 mb-2">
                                        <i class="fas fa-calendar-day mr-2"></i>
                                        @php
                                            $date = \DateTime::createFromFormat('Y-m-d', $settings['review_deadline']);
                                            $formattedDate = $date ? $date->format('M d, Y') : $settings['review_deadline'];
                                        @endphp
                                        {{ $formattedDate }}
                                    </div>
                                    <h3 class="font-bold text-lg mb-2">Abstract acceptance notification</h3>
                                    <p class="text-gray-600 text-sm">Authors will be notified of acceptance decisions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-1/4 px-4">
                            <div class="relative flex flex-col items-center">
                                <div class="absolute -top-5">
                                    <div class="rounded-full bg-blue-600 w-10 h-10 flex items-center justify-center border-4 border-white shadow-lg">
                                        <i class="fas fa-camera text-white"></i>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-lg p-6 mt-8 w-full transform transition hover:-translate-y-2 duration-300 hover:shadow-xl date-card">
                                    <div class="text-blue-600 mb-2">
                                        <i class="fas fa-calendar-day mr-2"></i>
                                        @php
                                            $date = \DateTime::createFromFormat('Y-m-d', $settings['camera_ready_deadline']);
                                            $formattedDate = $date ? $date->format('M d, Y') : $settings['camera_ready_deadline'];
                                        @endphp
                                        {{ $formattedDate }}
                                    </div>
                                    <h3 class="font-bold text-lg mb-2">Full Paper Submission deadline</h3>
                                    <p class="text-gray-600 text-sm">Final revised papers must be submitted.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-1/4 px-4">
                            <div class="relative flex flex-col items-center">
                                <div class="absolute -top-5">
                                    <div class="rounded-full bg-blue-600 w-10 h-10 flex items-center justify-center border-4 border-white shadow-lg">
                                        <i class="fas fa-user-check text-white"></i>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-lg p-6 mt-8 w-full transform transition hover:-translate-y-2 duration-300 hover:shadow-xl date-card">
                                    <div class="text-blue-600 mb-2">
                                        <i class="fas fa-calendar-day mr-2"></i>
                                        @php
                                            $date = \DateTime::createFromFormat('Y-m-d', $settings['registration_deadline']);
                                            $formattedDate = $date ? $date->format('M d, Y') : $settings['registration_deadline'];
                                        @endphp
                                        {{ $formattedDate }}
                                    </div>
                                    <h3 class="font-bold text-lg mb-2">Seminar day</h3>
                                    <p class="text-gray-600 text-sm">Deadline for author registration and payment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:hidden">
                    <div class="relative pl-8 timeline-line">
                        <div class="mb-10 relative timeline-dot">
                            <div class="absolute -left-10 top-0 bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-file-alt text-white text-sm"></i>
                            </div>
                            <div class="bg-white rounded-lg shadow p-4 ml-4">
                                <h5 class="text-lg font-semibold text-gray-800">Abstract Submission deadline</h5>
                                <div class="text-blue-600 text-sm mb-1">
                                    @php
                                        $date = \DateTime::createFromFormat('Y-m-d', $settings['submission_deadline']);
                                        $formattedDate = $date ? $date->format('M d, Y') : $settings['submission_deadline'];
                                    @endphp
                                    {{ $formattedDate }}
                                </div>
                                <p class="text-gray-600 text-sm">Deadline for authors to submit their complete papers.</p>
                            </div>
                        </div>
                        
                        <div class="mb-10 relative timeline-dot">
                            <div class="absolute -left-10 top-0 bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-search text-white text-sm"></i>
                            </div>
                            <div class="bg-white rounded-lg shadow p-4 ml-4">
                                <h5 class="text-lg font-semibold text-gray-800">Abstract acceptance notification</h5>
                                <div class="text-blue-600 text-sm mb-1">
                                    @php
                                        $date = \DateTime::createFromFormat('Y-m-d', $settings['review_deadline']);
                                        $formattedDate = $date ? $date->format('M d, Y') : $settings['review_deadline'];
                                    @endphp
                                    {{ $formattedDate }}
                                </div>
                                <p class="text-gray-600 text-sm">Authors will be notified of acceptance decisions.</p>
                            </div>
                        </div>
                        
                        <div class="mb-10 relative timeline-dot">
                            <div class="absolute -left-10 top-0 bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-camera text-white text-sm"></i>
                            </div>
                            <div class="bg-white rounded-lg shadow p-4 ml-4">
                                <h5 class="text-lg font-semibold text-gray-800">Full Paper Submission deadline </h5>
                                <div class="text-blue-600 text-sm mb-1">
                                    @php
                                        $date = \DateTime::createFromFormat('Y-m-d', $settings['camera_ready_deadline']);
                                        $formattedDate = $date ? $date->format('M d, Y') : $settings['camera_ready_deadline'];
                                    @endphp
                                    {{ $formattedDate }}
                                </div>
                                <p class="text-gray-600 text-sm">Final revised papers must be submitted.</p>
                            </div>
                        </div>
                        
                        <div class="mb-10 relative timeline-dot">
                            <div class="absolute -left-10 top-0 bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-user-check text-white text-sm"></i>
                            </div>
                            <div class="bg-white rounded-lg shadow p-4 ml-4">
                                <h5 class="text-lg font-semibold text-gray-800">Seminar day</h5>
                                <div class="text-blue-600 text-sm mb-1">
                                    @php
                                        $date = \DateTime::createFromFormat('Y-m-d', $settings['registration_deadline']);
                                        $formattedDate = $date ? $date->format('M d, Y') : $settings['registration_deadline'];
                                    @endphp
                                    {{ $formattedDate }}
                                </div>
                                <p class="text-gray-600 text-sm">Deadline for author registration and payment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="submission" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Paper Submission</h2>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8">
                        <h4 class="text-2xl font-semibold mb-6">Guidelines for Authors</h4>
                        <p class="text-gray-600 mb-8">{{ $settings['submission_guidelines'] }}</p>
                        
                        <h4 class="text-2xl font-semibold mb-6">Review Criteria</h4>
                        <p class="text-gray-600 mb-8">{{ $settings['review_criteria'] }}</p>

                        <h4 class="text-2xl font-semibold mb-6">Submission Process</h4>
                        <p class="text-gray-600 mb-8"> To submit a paper must login to the <b>AcademIQ</b> platform. If you do not have an account, please register first.</p>
                        
                        <div class="mt-10 text-center">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">Go to Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">Login to Submit</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="py-20 bg-gray-50">
  <div class="container mx-auto">
    <div class="flex flex-col items-center justify-center space-y-4 text-center">
      <div class="space-y-2">
        <h2 class="text-3xl font-bold text-center mb-16 section-title">Conference Topics</h2>
      </div>
    </div>
    <div class="mx-auto grid max-w-5xl items-start gap-6 py-12 lg:grid-cols-2 lg:gap-12">
      <ul class="grid gap-4 text-left">
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Teachers Education Model in Future</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Education and Research Global Issue</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Transformative Learning and Educational Leadership</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Mathematics, Science and Nursing Education</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Social, Language and Cultural Education</span>
        </li>
      </ul>
      <ul class="grid gap-4 text-left">
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Vocational Education and Educational Technology</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Economics, Business and Management Education</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Curriculum, Research and Development</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Innovative Educational Practices and Effective Technology in the Classroom</span>
        </li>
        <li class="flex items-start gap-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="mt-1 h-5 w-5 flex-shrink-0 text-blue-600"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
          <span>Educational Policy and Administration Education</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="w-full py-12 md:py-20 lg:py-28 bg-white">
  <div class="container px-4 md:px-6 mx-auto max-w-5xl">
    <div class="rounded-xl border shadow-xl w-full bg-card text-card-foreground">
      <div class="flex flex-col space-y-1.5 p-6 pb-6">
        <h3 class="text-3xl font-bold text-center mb-16 section-title">Registration Fees</h3>
      </div>
      <div class="p-6 md:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
          <div class="overflow-x-auto">
            <h3 class="text-xl font-bold mb-4 text-center text-blue-600">Overseas</h3>
            <table class="w-full caption-bottom text-sm">
              <thead class="[&_tr]:border-b bg-gray-50">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 min-w-[150px] py-3 text-sm">Participants</th>
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 text-center py-3 text-sm">
                    Early bird<br /><span class="font-normal text-gray-500 text-xs">(Before 30 Sep 2025)</span>
                  </th>
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 text-center py-3 text-sm">
                    Normal Rate<br /><span class="font-normal text-gray-500 text-xs">(1 Oct - 19 Nov, 2025)</span>
                  </th>
                </tr>
              </thead>
              <tbody class="[&_tr:last-child]:border-0">
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">Presenter (single)</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 260</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 300</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">Extra one paper</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 150</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 200</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">
                    Student Presenter<sup class="text-xs">*</sup>
                  </td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 220</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 250</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">
                    Student Participant<sup class="text-xs">*</sup>
                  </td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 100</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">USD 150</td>
                </tr>
              </tbody>
            </table>
          </div>

           
          <div class="overflow-x-auto">
            <h3 class="text-xl font-bold mb-4 text-center text-blue-600">Domestic/Local</h3>
            <table class="w-full caption-bottom text-sm">
              <thead class="[&_tr]:border-b bg-gray-50">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 min-w-[150px] py-3 text-sm">Participants</th>
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 text-center py-3 text-sm">
                    Early bird<br /><span class="font-normal text-gray-500 text-xs">(Before 30 Sep 2025)</span>
                  </th>
                  <th class="h-12 px-4 text-left align-middle font-semibold text-gray-700 [&:has([role=checkbox])]:pr-0 text-center py-3 text-sm">
                    Normal Rate<br /><span class="font-normal text-gray-500 text-xs">(1 Oct - 19 Nov, 2025)</span>
                  </th>
                </tr>
              </thead>
              <tbody class="[&_tr:last-child]:border-0">
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">Presenter (single)</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 3,000,050</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 3,000,050</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">
                    Student Presenter<sup class="text-xs">*</sup>
                  </td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 2,700,050</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 3,000,050</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">Extra one paper</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 1,800,050</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 2,000,050</td>
                </tr>
                <tr class="border-b transition-colors hover:bg-gray-50 data-[state=selected]:bg-muted">
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium py-3">Non Presenter</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 300,050</td>
                  <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-center py-3">IDR 350,050</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <p class="text-sm text-gray-500 mt-6">
          <sup class="text-xs">*</sup>enclose student ID
        </p>

        <div class="mt-8">
          <h3 class="text-1xl font-bold mb-4 text-blue-600">The registration fee includes:</h3>
          <ul class="space-y-2 text-gray-500 text-base">
            <li class="flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-5 w-5 text-green-500 flex-shrink-0"
              >
                <path d="M22 11.08V12a10 10 0 1 1-5.93-8.16" />
                <path d="m9 11 3 3L22 4" />
              </svg>
              <span>Seminar kits</span>
            </li>
            <li class="flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-5 w-5 text-green-500 flex-shrink-0"
              >
                <path d="M22 11.08V12a10 10 0 1 1-5.93-8.16" />
                <path d="m9 11 3 3L22 4" />
              </svg>
              <span>E-Book of abstracts</span>
            </li>
            <li class="flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-5 w-5 text-green-500 flex-shrink-0"
              >
                <path d="M22 11.08V12a10 10 0 1 1-5.93-8.16" />
                <path d="m9 11 3 3L22 4" />
              </svg>
              <span>E-certificate</span>
            </li>
            <li class="flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-5 w-5 text-green-500 flex-shrink-0"
              >
                <path d="M22 11.08V12a10 10 0 1 1-5.93-8.16" />
                <path d="m9 11 3 3L22 4" />
              </svg>
              <span>Publication fee</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

    <section id="reviewers" class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Program Committee</h2>
            
            <div class="text-center mb-10 max-w-3xl mx-auto">
                <p class="text-lg text-gray-700">Our papers are reviewed by a distinguished international program committee of leading researchers in the field.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @forelse($reviewers as $index => $reviewer)
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg reviewer-card opacity-0">
                    <div class="p-2">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100 rounded-t-lg overflow-hidden">
                            <svg class="w-full h-48 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-1 text-gray-900">{{ $reviewer->name }} {{ $reviewer->last_name }}</h3>
                            <p class="text-blue-600 mb-3">{{ $reviewer->email }}</p>
                            <p class="text-gray-600 text-sm mb-4">Committee member for {{ $settings['conference_acronym'] }}.</p>
                            <div class="flex justify-center space-x-3 text-gray-500">
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fas fa-globe"></i></a>
                                <a href="mailto:{{ $reviewer->email }}" class="hover:text-blue-600 transition-colors"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg reviewer-card opacity-0">
                    <div class="p-2">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100 rounded-t-lg overflow-hidden">
                            <img src="{{ asset('assets/img/eddiyanto.png') }}" alt="Drs. Eddiyanto, Ph.D" class="object-cover w-full h-48">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-1 text-gray-900"> Drs. Eddiyanto, Ph.D</h3>
                            <p class="text-blue-600 mb-3">Universitas Negeri Medan, Indonesia</p>
                            <p class="text-gray-600 text-sm mb-4">Specializing in polymer chemistry and materials science, with a focus on natural fiber utilization, bioplastics, and rubber modification.</p>
                            <div class="flex justify-center space-x-3 text-gray-500">
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fas fa-globe"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg reviewer-card opacity-0">
                    <div class="p-2">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100 rounded-t-lg overflow-hidden">
                            <img src="{{ asset('assets/img/direktur.png') }}" alt="Prof. Dr. Budi Valianto, M.Pd" class="object-cover w-full h-48">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-1 text-gray-900">Prof. Dr. Budi Valianto, M.Pd.</h3>
                            <p class="text-blue-600 mb-3">Universitas Negeri Medan, Indonesia</p>
                            <p class="text-gray-600 text-sm mb-4">His research emphasizes both high-performance sports and inclusive physical education, making a practical impact on student-athletes, coaches, and education systems.</p>
                            <div class="flex justify-center space-x-3 text-gray-500">
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fas fa-globe"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg reviewer-card opacity-0">
                    <div class="p-2">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100 rounded-t-lg overflow-hidden">
                            <img src="{{ asset('assets/img/rahman.jpg') }}" alt="Dr. Abdurahman Adisaputera, M.Hum." class="object-cover w-full h-48">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-1 text-gray-900">Dr. Abdurahman Adisaputera, M.Hum.</h3>
                            <p class="text-blue-600 mb-3">Universitas Negeri Medan, Indonesia</p>
                            <p class="text-gray-600 text-sm mb-4">His scholarly work explores how socio-economic and cultural contexts influence student learning, with a strong focus on developing innovative, culturally grounded teaching materials.</p>
                            <div class="flex justify-center space-x-3 text-gray-500">
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fas fa-globe"></i></a>
                                <a href="#" class="hover:text-blue-600 transition-colors"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-lg transition-colors duration-300">
                    <span>View All Committee Members</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

     <section id="location" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Conference Location</h2>
            
            <div class="grid md:grid-cols-2 gap-8 items-center max-w-6xl mx-auto">
                <div class="location-info opacity-0">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $settings['conference_location'] }}</h3>
                    <p class="text-gray-600 mb-6">Join us at this prestigious venue for {{ $settings['conference_acronym'] }} {{ $settings['conference_year'] }}. The conference will feature keynote speeches, paper presentations, and networking opportunities.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 rounded-full p-2 mr-4">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Address</h4>
                                <p class="text-gray-600">{{ $settings['conference_location'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 rounded-full p-2 mr-4">
                                <i class="fas fa-calendar-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Conference Dates</h4>
                                <p class="text-gray-600">December 15-18, {{ $settings['conference_year'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 rounded-full p-2 mr-4">
                                <i class="fas fa-subway text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Getting There</h4>
                                <p class="text-gray-600">Public transportation available. Parking facilities nearby.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="https://maps.google.com/maps?q={{ urlencode($settings['conference_location']) }}" target="_blank" class="inline-flex items-center mt-6 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-300">
                        <span>Get Directions</span>
                        <i class="fas fa-directions ml-2"></i>
                    </a>
                </div>
                
                <div class="map-container h-80 md:h-96 rounded-xl shadow-lg overflow-hidden opacity-0">
                    <div class="h-full w-full relative">
                        <iframe 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            loading="lazy" 
                            allowfullscreen 
                            src="https://maps.google.com/maps?q={{ urlencode($settings['conference_location']) }}&output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12">
                <div>
                    <h4 class="text-xl font-semibold mb-6">{{ $settings['conference_acronym'] }} {{ $settings['conference_year'] }}</h4>
                    <p class="text-gray-300 mb-6">{{ $settings['conference_description'] }}</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-xl font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-300">About</a></li>
                        <li><a href="#dates" class="text-gray-300 hover:text-white transition-colors duration-300">Important Dates</a></li>
                        <li><a href="#submission" class="text-gray-300 hover:text-white transition-colors duration-300">Submission</a></li>
                        <li><a href="#reviewers" class="text-gray-300 hover:text-white transition-colors duration-300">Reviewers</a></li>
                        <li><a href="#location" class="text-gray-300 hover:text-white transition-colors duration-300">Location</a></li>
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors duration-300">Login</a></li>
                        @endif
                    </ul>
                </div>
                
                <div>
    <h4 class="text-xl font-semibold mb-6">Contact Us</h4>
    <ul class="space-y-4">
        {{-- Organized by --}}
        <li class="flex items-start">
            <i class="fas fa-building mt-1.5 mr-3 text-blue-400"></i>
            <span>
                Organized by:<br>
                Post Graduate School, Universitas Negeri Medan<br>
                Jl. Willem Iskandar Psr.V Medan, North Sumatera<br>
                Indonesia 20221
            </span>
        </li>

        {{-- Phone & Fax --}}
        <li class="flex items-start">
            <i class="fas fa-phone mt-1.5 mr-3 text-blue-400"></i>
            <span>Telp: +6261-6636730<br>Fax: +6261-6636730</span>
        </li>

        {{-- Email --}}
        <li class="flex items-center">
            <i class="fas fa-envelope mr-3 text-blue-400"></i>
            <span>{{ $settings['conference_email'] }}</span>
        </li>

        {{-- Website --}}
        <li class="flex items-center">
            <i class="fas fa-globe mr-3 text-blue-400"></i>
            <span>{{ $settings['conference_website'] }}</span>
        </li>

        {{-- Contact Persons --}}
        <li class="flex items-start">
            <i class="fas fa-user-friends mt-1.5 mr-3 text-blue-400"></i>
            <span>
                Erika : +62812-6528-3482 (Call/SMS/WA)<br>
                Yunus : +62812-6060-4656 (Call/SMS/WA)<br>
                Zizi  : +628520625-1806 (Call/SMS/WA)
            </span>
        </li>
    </ul>
</div>

            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p>&copy; {{ $settings['conference_year'] }} {{ $settings['conference_name'] }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('block');
        });
        
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'text-gray-800', 'shadow-md');
                navbar.classList.remove('text-white');
            } else {
                navbar.classList.remove('bg-white', 'text-gray-800', 'shadow-md');
                navbar.classList.add('text-white');
            }
        });

        function updateCountdown() {
            const deadlineStr = "{{ $settings['submission_deadline'] }}";
            const deadline = new Date(deadlineStr).getTime();
            const now = new Date().getTime();
            const timeLeft = deadline - now;
            
            if (timeLeft <= 0) {
                document.getElementById('days').innerText = "0";
                document.getElementById('hours').innerText = "0";
                document.getElementById('minutes').innerText = "0";
                document.getElementById('seconds').innerText = "0";
                return;
            }
            
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            
            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours;
            document.getElementById('minutes').innerText = minutes;
            document.getElementById('seconds').innerText = seconds;
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);

        document.addEventListener("DOMContentLoaded", function() {
            setupSectionAnimations();

            const navbar = document.getElementById("navbar");
            const hero = document.querySelector("section"); // ambil hero pertama
            
            window.addEventListener("scroll", function () {
                const heroBottom = hero.offsetTop + hero.offsetHeight;
                
                if (window.scrollY > heroBottom - 80) {
                    // tampilkan nav
                    navbar.classList.remove("hidden");
                } else {
                    // sembunyikan nav di mobile (tetap tampil di desktop)
                    if (window.innerWidth < 1024) { // mobile < lg
                        navbar.classList.add("hidden");
                    }
                }
            });
        });

        
        function setupSectionAnimations() {
            const timelineCards = document.querySelectorAll('.date-card');
            const timelineObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        timelineCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-fadeInUp');
                            }, index * 150);
                        });
                        timelineObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            const topicCards = document.querySelectorAll('.topic-card');
            
            const topicObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        topicCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-fadeInUp');
                                const topicItems = card.querySelectorAll('.topic-item');
                                topicItems.forEach((item, itemIndex) => {
                                    setTimeout(() => {
                                        item.classList.add('animate-fadeIn');
                                    }, 300 + (itemIndex * 100));
                                });
                            }, index * 200);
                        });
                        
                        topicObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            const tagObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const tags = document.querySelectorAll('.tag-item');
                        tags.forEach((tag, index) => {
                            setTimeout(() => {
                                tag.classList.add('animate-scaleIn');
                            }, Math.random() * 1000); 
                        });
                        tagObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            const reviewerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const reviewerCards = document.querySelectorAll('.reviewer-card');
                        reviewerCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-fadeInUp');
                            }, index * 150);
                        });
                        reviewerObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            const locationObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const locationInfo = document.querySelector('.location-info');
                        const mapContainer = document.querySelector('.map-container');
                        
                        if (locationInfo) {
                            locationInfo.classList.add('animate-fadeInUp');
                        }
                        
                        if (mapContainer) {
                            setTimeout(() => {
                                mapContainer.classList.add('animate-fadeInUp');
                            }, 200);
                        }
                        
                        locationObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            const timelineSection = document.querySelector('#dates');
            const topicSection = document.querySelector('#topics');
            const tagCloud = document.querySelector('#topics .flex.flex-wrap');
            const reviewerSection = document.querySelector('#reviewers');
            const locationSection = document.querySelector('#location');
            
            if (timelineSection) timelineObserver.observe(timelineSection);
            if (topicSection) topicObserver.observe(topicSection);
            if (tagCloud) tagObserver.observe(tagCloud);
            if (reviewerSection) reviewerObserver.observe(reviewerSection);
            if (locationSection) locationObserver.observe(locationSection);
        }
</script>

</body>
</html>
