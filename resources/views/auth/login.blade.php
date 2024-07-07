@extends('base')

@section('title', 'Se connecter')

@section('content')

    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        <form class="vstack gap-3" method='post' action="{{ route('login') }}">
            @include('shared.flash')
            @csrf

            @include('shared.input', ['type' => 'email', 'class' => 'col', 'label' => 'e-mail', 'name' => 'email'])
            @include('shared.input', ['type' => 'password', 'class' => 'col', 'label' => 'Mot de passe', 'name' => 'password'])
            <div>
                <button class="btn btn-primary">Se connecter</button>
            </div>

        </form>
    </div>

@endsection
