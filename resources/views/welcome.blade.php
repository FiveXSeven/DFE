<x-layout>
    <div class="navContainer">
        <h2>Bienvenue dans votre app de gestion des élèves</h2>
        @if (Route::has('login'))
        <nav>
            @auth
            <a href="{{ url('/dashboard') }}">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}">
                Se Connecter
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">
                Creer un compte
            </a>
            @endif
            @endauth
            <img class="bg" src="{{asset('images/bg.jpg')}}" alt="">
        </nav>
    @endif
    </div>
</x-layout>
