@extends('base')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <h1>Bienvenue chez The Agency !</h1>
        <p>Praesent arcu leo, scelerisque eget ex nec, condimentum bibendum ligula. Proin ut magna eu nulla auctor fermentum. Vestibulum in est porttitor, vulputate turpis sed, pellentesque eros. Fusce non lectus tortor. Nulla tincidunt at orci at dictum. Nullam vulputate aliquam lorem sed scelerisque. Phasellus sit amet vestibulum ipsum.</p>
    </div>

    <div class="container">
        <h2>Nouveautés</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>

@endsection
