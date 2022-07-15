@extends('layout.app');

@section('content');
<div class="row">
    <center>
    <figure>
        <img  src="{{ asset('img/udus-index.jpeg') }}" width="1024px" height="500px"
        alt="udus home" />
        <figcaption>Usmanu Danfodiyo University Alumni </figcaption>
    </figure>
    </center>
</div>
<div class="row">
    <div class="card ms-3 me-4" style="width: 24rem; ">
        <img src="{{ asset('img/udus-convo.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">PG news</h5>
        <p class="card-text">This is to inform the general public that PG portal has opened sales of forms for 2022/2023 academic session</p>
        <a href="#" class="btn btn-primary">Go ot PG portal</a>
        </div>
    </div>
    <div class="card me-4" style="width: 24rem; ">
        <img src="{{ asset('img/udus-index.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">New Faculties</h5>
        <p class="card-text">UDUS council has hereby established new faculties. Click this link to read more</p>
        <a href="#" class="btn btn-primary">Read more</a>
        </div>
    </div>
    <div class="card" style="width: 24rem; ">
        <img src="{{ asset('img/udus-pro.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Alumni News</h5>
        <p class="card-text">Members of this great alumni are to be infomed that this year's congress meeting is to be held at....</p>
        <a href="#" class="btn btn-primary">Readm More ...</a>
        </div>
    </div>
</div>



@endsection
    