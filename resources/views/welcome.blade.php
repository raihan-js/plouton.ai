<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title inertia>{{ config('app.name', 'PopupGenix') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/PopupGenix@3.1.2/dist/PopupGenix.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
    <!-- Header -->
    @if(session('success'))
    <div id="banner" tabindex="-1" class="flex fixed z-50 gap-8 justify-between items-start py-3 px-4 w-full bg-green-50 border border-b border-green-200 sm:items-center dark:border-green-700 lg:py-4 dark:bg-green-800">
        <p class="text-sm font-light text-green-700 dark:text-green-400">
            {{ session('success') }}
        </p>
        <button onclick="document.getElementById('banner').remove()" type="button" class="flex items-center text-green-400 hover:bg-green-200 hover:text-green-900 rounded-lg text-sm p-1.5 dark:hover:bg-green-600 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>  
        </button>
    </div>
    @endif

    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div
            class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
            >
            <a href="https://PopupGenix.com" class="flex items-center">
                {{-- <img
                src="https://via.placeholder.com/150x40?text=Logo"
                class="mr-3 h-6 sm:h-9"
                alt="PopupGenix Logo"
                /> --}}
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PopupGenix</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a
                href="#contact"
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                >Get Quote</a
                >
                <button
                data-collapse-toggle="mobile-menu-2"
                type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2"
                aria-expanded="false"
                >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                    ></path>
                </svg>
                <svg
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                    ></path>
                </svg>
                </button>
            </div>
            <div
                class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                id="mobile-menu-2"
            >
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a
                    href="#"
                    class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                    aria-current="page"
                    >Home</a
                    >
                </li>
                <li>
                    <a
                    href="#about"
                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                    >About</a
                    >
                </li>
                <li>
                    <a
                    href="#services"
                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                    >Services</a
                    >
                </li>
                <li>
                    <a
                    href="#projects"
                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                    >Projects</a
                    >
                </li>
                <li>
                    <a
                    href="#contact"
                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                    >Contact</a
                    >
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    

    <!-- Hero Section -->
    <section class="bg-white dark:bg-gray-900 py-32">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <a
          href="#"
          class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
          role="alert"
        >
          <span
            class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3"
            >New</span
          >
          <span class="text-sm font-medium">PopupGenix is live! Discover our breakthrough AI and full‑stack solutions</span>
          <svg
            class="ml-2 w-5 h-5"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </a>
        <h1
          class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"
        >
          Empowering Innovation with AI & Full‑Stack Excellence
        </h1>
        <p
          class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"
        >
          At PopupGenix, we build next‑generation digital products—combining robust full‑stack development with advanced AI/ML, generative AI, and agentic solutions to drive your business forward.
        </p>
        <div
          class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4"
        >
          <a
            href="#about"
            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
          >
            Learn More
            <svg
              class="ml-2 -mr-1 w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
          <a
            href="#"
            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
          >
            Watch Video
            <svg
              class="ml-2 -mr-1 w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm12.553 1.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section id="about" class="bg-white dark:bg-gray-900">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="PopupGenix dashboard">
            <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="PopupGenix dashboard">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Elevate Engagement with PopupGenix
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    PopupGenix is the ultimate solution for creating high-converting popups, 
                    banners, and modals—without any coding required. Designed for marketers, 
                    business owners, and developers, our intuitive platform helps you capture 
                    leads, boost sales, and enhance user engagement effortlessly.
                </p>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Whether you're launching a product, running promotions, or gathering 
                    feedback, PopupGenix provides customizable tools to turn visitors into 
                    loyal customers. Experience seamless integration and advanced targeting 
                    options to maximize your impact.
                </p>
                <a href="#contact" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get Started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    <section id="services" class="bg-white dark:bg-gray-900">
      <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
          <h2
            class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
          >
            Digital Solutions Tailored for Your Business
          </h2>
          <p class="text-gray-500 sm:text-xl dark:text-gray-400">
            PopupGenix provides a comprehensive range of services—from full‑stack development and mobile apps to advanced AI/ML solutions and intelligent automation.
          </p>
        </div>
        <div
          class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0"
        >
          <!-- Service 1 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <!-- You can update this icon -->
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              Full‑Stack Development
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              From concept to deployment, we craft robust, scalable web and mobile solutions tailored to your business needs.
            </p>
          </div>
          <!-- Service 2 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0z"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              AI &amp; ML Solutions
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              Leverage state‑of‑the‑art machine learning frameworks to automate processes and drive intelligent insights.
            </p>
          </div>
          <!-- Service 3 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5z"
                  clip-rule="evenodd"
                ></path>
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              Mobile App Development
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              We design seamless, intuitive mobile experiences that empower your customers on the go.
            </p>
          </div>
          <!-- Service 4 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"
                ></path>
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              Generative &amp; Agentic AI
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              Create dynamic, data‑driven content and empower smart decision‑making with our cutting‑edge generative and agentic AI solutions.
            </p>
          </div>
          <!-- Service 5 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              Data-Driven Insights
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              Transform raw data into actionable intelligence with our custom analytics and reporting solutions.
            </p>
          </div>
          <!-- Service 6 -->
          <div>
            <div
              class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900"
            >
              <svg
                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">
              Cloud &amp; DevOps Integration
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
              Enhance scalability and reliability with seamless cloud integrations and DevOps automation.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Categories Section -->
    <!-- Explore Our Tech Stack Section -->
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mb-4 flex items-center justify-between gap-4 md:mb-8">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
            Explore Our Tech Stack
            </h2>
            <a href="#" title="See all technologies" class="flex items-center text-base font-medium text-primary-700 hover:underline dark:text-primary-500">
            See all technologies
            <svg class="ms-1 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
            </a>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- Card 1: Laravel -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Laravel logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Laravel</span>
            </a>
            <!-- Card 2: Node.js -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Node.js logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Node.js</span>
            </a>
            <!-- Card 3: React -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with React logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">React</span>
            </a>
            <!-- Card 4: Vue.js -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Vue.js logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Vue.js</span>
            </a>
            <!-- Card 5: Python -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Python logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Python</span>
            </a>
            <!-- Card 6: TensorFlow -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with TensorFlow logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">TensorFlow</span>
            </a>
            <!-- Card 7: PyTorch -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with PyTorch logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">PyTorch</span>
            </a>
            <!-- Card 8: Docker -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Docker logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Docker</span>
            </a>
            <!-- Card 9: Kubernetes -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Kubernetes logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Kubernetes</span>
            </a>
            <!-- Card 10: AWS -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with AWS logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">AWS</span>
            </a>
            <!-- Card 11: MongoDB -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with MongoDB logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">MongoDB</span>
            </a>
            <!-- Card 12: Git -->
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Git logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Git</span>
            </a>
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Git logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">React Native</span>
            </a>
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Git logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">Flutter</span>
            </a>
            <a href="#" class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!-- Placeholder icon; replace with Git logo SVG -->
            <svg class="me-2 h-4 w-4 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m21.406 6.086-9-4a1.001 1.001 0 0 0-.813 0l-9 4c-.02.009-.034.024-.054.035-.028.014-.058.023-.084.04-.022.015-.039.034-.06.05a.87.87 0 0 0-.19.194c-.02.028-.041.053-.059.081a1.119 1.119 0 0 0-.076.165c-.009.027-.023.052-.031.079A1.013 1.013 0 0 0 2 7v10c0 .396.232.753.594.914l9 4c.13.058.268.086.406.086a.997.997 0 0 0 .402-.096l.004.01 9-4A.999.999 0 0 0 22 17V7a.999.999 0 0 0-.594-.914zM12 4.095 18.538 7 12 9.905l-1.308-.581L5.463 7 12 4.095zM4 16.351V8.539l7 3.111v7.811l-7-3.11zm9 3.11V11.65l7-3.111v7.812l-7 3.11z"></path></svg>
            <span class="text-sm font-medium text-gray-900 dark:text-white">NextJS</span>
            </a>
        </div>
        </div>
    </section>
  

<!-- Projects/Our Work Section -->
<section id="projects" class="bg-white dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
      <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
          Our Work
        </h2>
        <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
          Explore some of our featured projects showcasing our innovative AI and full‑stack solutions.
        </p>
      </div>
  
      <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Project 1: BlackGPT.us -->
        <div class="space-y-4">
          <span class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            BlackGPT.us
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
            BlackGPT.us
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
            A chat system specialized for the black community using RAG architecture and a generative AI app.
          </p>
          <a href="https://github.com/raihan-js/blackgpt" target="_blank" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
            View Project
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
  
        <!-- Project 2: Klevere AI -->
        <div class="space-y-4">
          <span class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            Klevere AI
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
            Klevere AI
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
            UI assistant tools for marketing, finance, and other sectors.
          </p>
          <a href="https://www.klevere.ai/" target="_blank" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
            View Project
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
  
        <!-- Project 3: FlaskColorWorks -->
        <div class="space-y-4">
          <span class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            FlaskColorWorks
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
            FlaskColorWorks
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
            Image object segmentation and colorization using MASK R-CNN with the COCO dataset.
          </p>
          <a href="https://github.com/raihan-js/FlaskColorWorks" target="_blank" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
            View Project
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
  
        <!-- Project 4: PregaCare -->
        <div class="space-y-4">
          <span class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            PregaCare
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
            PregaCare
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
            A mobile application designed to support and guide users through pregnancy – currently in development.
          </p>
          <a href="https://github.com/raihan-js/pregacare" target="_blank" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
            View Project
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
  
        <!-- Project 5: Clarioscope AI -->
        <div class="space-y-4">
          <span class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
            Clarioscope AI
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
            Clarioscope AI
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
            An AI-based medical diagnostic platform that leverages advanced machine learning to deliver insights.
          </p>
          <a href="https://sea-lion-app-a9ykh.ondigitalocean.app/dashboard" target="_blank" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
            View Project
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
  

    <!-- FAQ Section -->
    <section class="bg-white dark:bg-gray-900">
      <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2
          class="mb-8 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
        >
          Frequently Asked Questions
        </h2>
        <div
          class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2"
        >
          <div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                What services does PopupGenix provide?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                We specialize in full‑stack development, AI/ML integration, mobile app creation, and innovative generative as well as agentic AI solutions.
              </p>
            </div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                How do you handle support and maintenance?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                Our team provides ongoing support, regular updates, and tailored maintenance to ensure your solution remains cutting‑edge.
              </p>
            </div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                Can you manage multiple projects at once?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                Absolutely. Our scalable team is structured to handle simultaneous projects while ensuring top quality and timely delivery.
              </p>
            </div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                How does PopupGenix integrate AI into its projects?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                We leverage state‑of‑the‑art frameworks to seamlessly incorporate machine learning and AI capabilities into every digital solution.
              </p>
            </div>
          </div>
          <div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                Do you offer prototypes or MVPs for startups?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                Yes, we provide rapid prototyping and MVP development to help you validate your ideas quickly before scaling.
              </p>
            </div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                How do you differentiate from other agencies?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                PopupGenix blends full‑stack expertise with next‑gen AI solutions to create custom, innovative digital products that drive business growth.
              </p>
            </div>
            <div class="mb-10">
              <h3
                class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
              >
                <svg
                  class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                How can I start working with PopupGenix?
              </h3>
              <p class="text-gray-500 dark:text-gray-400">
                Simply fill out our contact form or send us an email to schedule a consultation. We’re excited to explore how we can bring your vision to life.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-white dark:bg-gray-900">
      <div
        class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6"
      >
        <div class="mx-auto max-w-screen-sm">
          <h2
            class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
          >
            Testimonials
          </h2>
          <p
            class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400"
          >
            Hear from our satisfied clients who transformed their business with PopupGenix.
          </p>
        </div>
        <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
          <figure
            class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700"
          >
            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                A Seamless Integration of AI and Full‑Stack Mastery
              </h3>
              <p class="my-4">
                "PopupGenix delivered a robust solution that perfectly combined innovative AI features with exceptional web development. Their process was smooth and professional."
              </p>
            </blockquote>
            <figcaption class="flex justify-center items-center space-x-3">
              <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>John Doe</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">
                  CTO, Innovatech Solutions
                </div>
              </div>
            </figcaption>
          </figure>
          <figure
            class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700"
          >
            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Revolutionizing Mobile Experiences
              </h3>
              <p class="my-4">
                "The mobile app developed by PopupGenix completely transformed our customer engagement strategy. Their creative use of generative AI is nothing short of revolutionary."
              </p>
            </blockquote>
            <figcaption class="flex justify-center items-center space-x-3">
              <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Jane Smith</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">
                  CEO, MobileNext
                </div>
              </div>
            </figcaption>
          </figure>
          <figure
            class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700"
          >
            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Empowering Data‑Driven Decisions
              </h3>
              <p class="my-4">
                "Our new analytics platform built by PopupGenix delivers real‑time insights that empower our decision-making process. Their expertise in AI/ML is truly exceptional."
              </p>
            </blockquote>
            <figcaption class="flex justify-center items-center space-x-3">
              <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Mike Johnson</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">
                  Head of Data, DataCore Analytics
                </div>
              </div>
            </figcaption>
          </figure>
          <figure
            class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700"
          >
            <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                A Game‑Changer in Digital Innovation
              </h3>
              <p class="my-4">
                "Working with PopupGenix was a game‑changer for our product development. Their strategic insights and flawless execution exceeded all our expectations."
              </p>
            </blockquote>
            <figcaption class="flex justify-center items-center space-x-3">
              <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Sarah Lee</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">
                  Product Manager, TechFusion
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
        <div class="text-center">
          <a
            href="#"
            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            >Show more...</a
          >
        </div>
      </div>
    </section>

<!-- Contact Section -->
<section id="contact" class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
        Contact Us
      </h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
        Have a project in mind or a technical inquiry? Let’s discuss how PopupGenix can help.
      </p>
      <form action="{{ route('contact.submit') }}" method="POST" class="space-y-8">
        @csrf
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
          <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@PopupGenix.com" required>
        </div>
        <div>
          <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
          <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tell us about your project" required>
        </div>
        <!-- Meeting Date -->
        <div>
          <label for="meeting-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferred Meeting Date</label>
          <input type="date" id="meeting-date" name="meeting_date" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
        </div>
        <!-- Meeting Time -->
        <div>
          <label for="meeting-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preferred Meeting Time</label>
          <input type="time" id="meeting-time" name="meeting_time" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
        </div>
        <!-- Budget -->
        <div>
          <label for="budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Budget (in USD)</label>
          <input type="number" id="budget" name="budget" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g., 5000" required>
        </div>
        <!-- Project Brief -->
        <div class="sm:col-span-2">
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Project Brief</label>
          <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Provide us with details about your project..."></textarea>
        </div>
        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
          Send Message
        </button>
      </form>
    </div>
  </section>
  

    <!-- Footer -->
    <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
      <div class="mx-auto max-w-screen-xl text-center">
        <a
          href="#"
          class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white"
        >
          <svg
            class="mr-2 h-8"
            viewBox="0 0 33 33"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <!-- Custom PopupGenix logo SVG -->
            <path
              d="M25.27 13.13c-.08.51-.42 1.21-.8 1.82-.49.76-1.26 1.3-2.14 1.48l-3.9.8c-.63.13-1.2.46-1.63.94l-2.56 2.86c-.48.54-.82.42-.82-.3 0-.03-.03-3.26 3.32-5.19.62-.75 2.47-.48 3.75.27l6.81-3.93c2.55-1.47 4.35-3.95 4.95-6.83.02-.11.04-.23.05-.35l-6.48-1.42z"
              fill="url(#paint0_linear)"
            />
            <defs>
              <linearGradient id="paint0_linear" x1="20.81" y1="24" x2="24" y2="13" gradientUnits="userSpaceOnUse">
                <stop stop-color="#1724C9" />
                <stop offset="1" stop-color="#1C64F2" />
              </linearGradient>
            </defs>
          </svg>
          PopupGenix
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">
          Innovative digital solutions powered by full‑stack expertise and advanced AI.
        </p>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
          >© 2021-2025 <a href="#" class="hover:underline">PopupGenix™</a>. All Rights Reserved.</span
        >
      </div>
    </footer>
  </body>
</html>
