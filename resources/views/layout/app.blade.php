<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ config('app.name') }}</title> --}}
      {!! SEO::generate() !!}
    <link rel="apple-touch-icon" sizes="180x180" href="https://nafiswatsiq.github.io/assets/img/logo%20ch.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="https://nafiswatsiq.github.io/assets/img/logo%20ch.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="https://nafiswatsiq.github.io/assets/img/logo%20ch.jpg">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-violet-500 to-fuchsia-500">
  <nav class="">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>

            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <a href="{{ url('/') }}" class="text-white font-bold text-2xl">{{ config('app.name') }}</a>
            {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow"> --}}
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">

              <a href="{{ url('admin') }}" class="text-white hover:bg-white hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
  
              <a href="#" class="text-white hover:bg-white hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Team</a>
  
              <a href="#" class="text-white hover:bg-white hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Projects</a>
  
              <a href="#" class="text-white hover:bg-white hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
      </div>
    </div>
  </nav>

  <article class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 min-h-screen">
    
    @yield('content')

  </article>

  <footer>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="py-10 text-white">
        &copy; 2022 nafiswatsiq
      </div>
    </div>
  </footer>

</body>
</html>