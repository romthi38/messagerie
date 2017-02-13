<div class="navbar-fixed">

    <nav>
        <div class="nav-wrapper">
            <a href="/home" class="brand-logo">Messagerie</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{route('contacts_list')}}">Contacts</a></li>
                <li><a href="{{route('conversations_list')}}">Conversations</a></li>

                @if(Auth::check())
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{route('user_profil', ['user_id' => Auth::user()->id])}}">Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout">Déconnexion</a></li>
                    </ul>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                @else
                    <li><a href="/login">Connexion</a></li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{route('contacts_list')}}">Contacts</a></li>
                <li><a href="{{route('conversations_list')}}">Conversations</a></li>
            </ul>
        </div>
    </nav>
</div>