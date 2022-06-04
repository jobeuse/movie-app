<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie App</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
  <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
    <ul class="flex items-center"> 
        <li><a href="#" class="bg-gray-800">
          <svg class="svg-icon fill-current w-7 text-gray-100" viewBox="0 0 20 20">
              <path d="M18.175,4.142H1.951C1.703,4.142,1.5,4.344,1.5,4.592v10.816c0,0.247,0.203,0.45,0.451,0.45h16.224c0.247,0,0.45-0.203,0.45-0.45V4.592C18.625,4.344,18.422,4.142,18.175,4.142 M4.655,14.957H2.401v-1.803h2.253V14.957zM4.655,12.254H2.401v-1.803h2.253V12.254z M4.655,9.549H2.401V7.747h2.253V9.549z M4.655,6.846H2.401V5.043h2.253V6.846zM14.569,14.957H5.556V5.043h9.013V14.957z M17.724,14.957h-2.253v-1.803h2.253V14.957z M17.724,12.254h-2.253v-1.803h2.253V12.254zM17.724,9.549h-2.253V7.747h2.253V9.549z M17.724,6.846h-2.253V5.043h2.253V6.846z"></path>
            </svg>
          </a></li>
        <li class="ml-16"><a href="#" class="hover:text-gray-300">Movies</a></li> 
         <li class="ml-6"><a href="#" class="hover:text-gray-300">Tv Shows</a></li> 
          <li class="ml-6"><a href="#" class="hover:text-gray-300">Actors</a></li> 
    </ul>
    <div class="flex items-center md:mt-3 sm:mt-3">
        <div class="relative">
          <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline-none" placeholder="Search">
          <div class="absolute top-0"> 
            <svg class="svg-icon fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 20 20">
              <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
            </svg>
          </div>
        </div>
        <div class="ml-6">
          <img src="https://via.placeholder.com/150" class="rounded-full w-8" alt="">
        </div>
    </div>
    
  </div>
</nav>
@yield('content')
</body>
</html>