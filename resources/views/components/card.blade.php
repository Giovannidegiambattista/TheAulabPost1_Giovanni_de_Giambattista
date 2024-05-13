<div class="card">
    <img src="{{Storage::url($image)}}" alt="" class="card-image-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{$subtitle}}</p>
        @if ($category)
        <a href="{{$urlCategory}}"  class="small text-muted d-flex justify-content-center align-items-center">{{$category}}</a>
            
        @else
            <p class="small text-muted st-italic text-capitalize">Non categorizzato</p>
        @endif
        
        @if ($user)
        <a href="{{$urlUser}}"  class="small text-muted d-flex justify-content-center align-items-center">{{$user}}</a>
            
        @else
            <p class="small text-muted st-italic text-capitalize">Nessun utente</p>
        @endif
       <span class="text-muted small fst-italic"> Tempo di lettura {{$readDuration}} min </span>
       
       
       @if ($tags)
           
       <p class="small fst-italic text-capialize">
           @foreach ($tags as $tag)
           #{{$tag->name}}
              
           @endforeach
       </p>
       @endif
     
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
Redatto il {{$data}} da  {{$user}}
    <br>
<a href="{{$url}}" class="btn btn-warning text-dark">Leggi</a>
    </div>
</div>