@extends('layout.app')
@section('content')
	<div class="movie-info border-b border-gray-800">
		<div class="container mx-auto px-4 pt-16 flex pb-11 flex-col md:flex-row">
			<img src="https://via.placeholder.com/150" class="w-64 md:w-96" alt="">
			<div class="md:ml-24">
				<h2 class="text-4xl font-semibold">
					Title of movie (2022)
				</h2>
				<div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
						<span><svg class="svg-icon  fill-current text-orange-500 w-5" viewBox="0 0 20 20">
							<path d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z"></path>
						</svg></span>
						<span class=" ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2000</span>
						<span class="mx-2">|</span>
						<span>Action, Thriller, commedy</span>
					</div>
					<p>Est do in quis excepteur pariatur culpa occaecat esse proident ut occaecat do proident.</p> 
					<div class="mt-12">
						<h4 class="text-white font-semibold">Featured Cast</h4>
						<div class="flex mt-4">
							<div>
								<div>
									Bing job
								</div>
								<div class="text-sm text-gray-400">
									Screenplay, Director
								</div>
							</div>
							<div class="ml-8">
								<div>
									Bing job
								</div>
								<div class="text-sm text-gray-400">
									Screenplay, Director
								</div>
							</div>
						</div>
						<div class="mt-12">
							<button class="flex items-center btn-lg bg-orange-500 rounded font-semibold text-gray-900 px-5 py-3 hover:bg-orange-600 transition ease-in-out duration-150">

							<svg class="svg-icon fill-current w-6 font-semibold" viewBox="0 0 20 20">
							<path d="M17.919,4.633l-3.833,2.48V6.371c0-1-0.815-1.815-1.816-1.815H3.191c-1.001,0-1.816,0.814-1.816,1.815v7.261c0,1.001,0.815,1.815,1.816,1.815h9.079c1.001,0,1.816-0.814,1.816-1.815v-0.739l3.833,2.478c0.428,0.226,0.706-0.157,0.706-0.377V5.01C18.625,4.787,18.374,4.378,17.919,4.633 M13.178,13.632c0,0.501-0.406,0.907-0.908,0.907H3.191c-0.501,0-0.908-0.406-0.908-0.907V6.371c0-0.501,0.407-0.907,0.908-0.907h9.079c0.502,0,0.908,0.406,0.908,0.907V13.632zM17.717,14.158l-3.631-2.348V8.193l3.631-2.348V14.158z"></path>
							</svg>
							<span class="ml-2">Play Trailer</span></button>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="movie-cast border-b border-gray-800">
		<div class="container mx-auto px-4 py-16">
			<h2 class="text-4xl font-semibold">Cast</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				<div class="mt-8">
					<a href="">
						<img src="https://via.placeholder.com/150" class="hover:opacity-75 transition ease-in-out duration-150" alt="image">
					</a>
					<div class="mt-2">
						<a href="" class="text-lg mt-2 hover:text-gray:300">Title of movie</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection