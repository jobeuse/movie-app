@extends('layout.app')
@section('content')
<div class="container mx-auto px-4 pt-16">
	<div class="popula-movies">
		<h2 class="uppercase tracking-wider font-semibold text-orange-500 text-lg "> 
			Popular Actors 
		</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
			@forelse($ActorMovies as $actor)  
            <div class="actor mt-8">
                <a href=""> 
                    @if($actor['profile_path'] )
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$actor['profile_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150" alt="image">
                    @else
                    <img src="https://via.placeholder.com/500"  class="hover:opacity-75 transition ease-in-out duration-150" alt="image">
                 @endif
                     </a>
                <div class="mt-2">
                    <a href="" class="text-lg hover:text-gray-300"> 
                        {{ $actor['name'] }}
                    </a>
                    <div class="text-sm truncate text-gray-400">
                        {{ $actor['name'] }}
                    </div>
                </div>
            </div>
			@empty 
			<div class="bg-red-500 py-23">
				No movies added
			</div>
			@endforelse 
            
		</div>
	</div> 
	</div>
</div>
@endsection