@extends('layouts.app')

@section('content')
<nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="news"><b>Naujienos</b></a></li>
            <li><a href="guitarists"><b>Gitaristai</b></a></li>
            <li><a class="active" href="form"><b>Registruokitės pamokoms</b></a></li>
            <li style="float:right" class="active"><a href="questions/create"><b>Klauskite!</b></a></li>
            <!-- Authentication Links -->
            @guest
            <li style="float:right">
                <a href="{{ route('login') }}">{{ __('Prisijunkite') }}</a>
            </li>
        @else
            <li style="float:right" class="nav-item dropdown">
                

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    
                            <li style="float:right"><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                            <li style="float:right"><a class="dropdown-item" href="admin">Administracijos puslapis</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </nav>
@yield('registration')
    <div id	="content"></div>
    <div id="content">
        <h2 id="pageTitle">Užsiregistruokite pas profesionalus jau dabar!</h2>

    </div>

<form method="POST" action="/news"></form>
    <div class="container">
        <p>Prašome užpildyti visus laukus.</p>
        <hr>
        @csrf
        <b>Pasirinkite norimą gitaros mokytoją</b><br><br>
        <input type="radio" name="mokytojas_id" value="1"> Petras Petrauskas<br>
        <input type="radio" name="mokytojas_id" value="2"> Andrius Rimiškis<br>
        <input type="radio" name="mokytojas_id" value="3"> Virgis Stakėnas<br><br><br>

        <label for="vardas"><b>Vardas</b></label>
        <input type="text" placeholder="Įveskite savo vardą" name="vardas" required>

        <label for="pavarde"><b>Pavardė</b></label>
        <input type="text" placeholder="Įveskite savo pavardę" name="pavarde" required>
       
        <label for="el_pastas"><b>El. paštas</b></label>
        <input type="text" placeholder="Įveskite savo el. paštą" name="el_pastas" required>

        <label for="tel_nr"><b>Telefono nr.</b></label>
        <input type="text" placeholder="Įveskite savo telefono nr." name="tel_nr" required>
        <hr>
        <input type="submit"  value="Submit" class="registerbtn"><b>Registruotis</b>
    </div>
    </form>
@endsection

@section('scripts')
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
@endsection
