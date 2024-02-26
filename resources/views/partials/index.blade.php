

@foreach ($movies as $index => $movie)
    <div class="card box" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">
            {{ $movie->title }}
          </h5>
          <h5 class="card-title">
            {{ $movie->original_title }}
          </h5>
          <p class="card-text">
            {{$movie->id}} {{$movie->nationality}}
          </p>
          <p>
            Data di uscita: {{$movie->date}}
          </p>
          <p>
            voto: {{$movie->vote}}
          </p>
        </div>
      </div>
@endforeach

