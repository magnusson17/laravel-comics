<header>
    <div class="containeR">
        <div class="roW">
            <ul class="coL">
                <li class="{{ Request::route()->getName() == 'comic' ? 'active' : '' }}">characters</li>
                <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop</li>
            </ul>
        </div>

        <div class="h_40vh bg_jumbotron">
            {{-- con asset() entro direttamente nella cartella public come percorso --}}
            {{-- <img class="h_30vh" src="{{ asset('images/jumbotron.jpg')}}" alt=""> --}}
        </div>
    </div>
</header>