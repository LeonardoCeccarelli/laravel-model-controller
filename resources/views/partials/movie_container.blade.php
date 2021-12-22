<h1>Movies</h1>

<div class="movie_container">
    @foreach ($listMovies as $movie)
        <div class="movie_card">
            <h3 class="movie_title">{{ $movie->title }}</h3>

            @if (strtolower($movie->title) != strtolower($movie->original_title))
            
            <h6 class="movie_original_title">{{ $movie->original_title }}</h6>
            @endif

            <h5 class="movie_value">
                <span class="pre_value">Nationality:</span>
                <span class="value">{{ $movie->nationality }}</span>
            </h5>
            <h5 class="movie_value">
                <span class="pre_value">On Sale Date:</span>
                <span class="value">{{ $movie->date }}</span>
            </h5>
            <h5 class="movie_value">
                <span class="pre_value">Vote:</span>
                <span class="value">{{ $movie->vote }}</span>
            </h5>
        </div>
    @endforeach
</div>