@section('navbar')
<nav>
    <div class="nav-wrapper white">
        <a href="#" class="brand-logo left"><img src="src/fia_header.png"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{action('Controller@logout')}}"><span class="grey-text text-darken-1">Logout</span></a></li>
        </ul>
    </div>
</nav>
@endsection