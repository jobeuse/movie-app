<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie App</title>
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style type="text/css"> 

/*.svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #4691f6;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}*/
  </style>
   @livewireStyles
   <script src="//unpkg.com/alpinejs" defer></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1L5HELFTE1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1L5HELFTE1');
</script>
</head>
<body class="font-sans bg-gray-400 text-white">
<nav class="border-b bg-gray-800">
  <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
    <ul class="flex items-center"> 
        <li><a href="{{route('movie') }}" class="bg-gray-800">
          <svg class="svg-icon fill-current w-7 text-gray-100" viewBox="0 0 20 20">
              <path d="M18.175,4.142H1.951C1.703,4.142,1.5,4.344,1.5,4.592v10.816c0,0.247,0.203,0.45,0.451,0.45h16.224c0.247,0,0.45-0.203,0.45-0.45V4.592C18.625,4.344,18.422,4.142,18.175,4.142 M4.655,14.957H2.401v-1.803h2.253V14.957zM4.655,12.254H2.401v-1.803h2.253V12.254z M4.655,9.549H2.401V7.747h2.253V9.549z M4.655,6.846H2.401V5.043h2.253V6.846zM14.569,14.957H5.556V5.043h9.013V14.957z M17.724,14.957h-2.253v-1.803h2.253V14.957z M17.724,12.254h-2.253v-1.803h2.253V12.254zM17.724,9.549h-2.253V7.747h2.253V9.549z M17.724,6.846h-2.253V5.043h2.253V6.846z"></path>
            </svg>
          </a></li>
        <li class="ml-16"><a href="{{ route('movie') }}" class="hover:text-gray-300">Movies</a></li> 
         <li class="ml-6"><a href="{{ route('tv') }}" class="hover:text-gray-300">Tv Shows</a></li> 
          <li class="ml-6"><a href="{{ route('actors') }}" class="hover:text-gray-300">Actors</a></li> 
    </ul>
    <div class="flex items-center md:mt-3 sm:mt-3">
        <livewire:search-drop-down/>
        <div class="ml-6">
          <a href="https://github.com/jobeuse" target="_blank">
            <img src="https://avatars.githubusercontent.com/u/62539654?v=4" class="rounded-full w-8" alt="">
          </a>
        </div>
    </div>
    
  </div>
</nav>
@yield('content')
 @livewireScripts
</body>
</html>
