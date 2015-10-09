<!-- background-color: #1E90ff;  border-color: blue; -->
<nav class="navbar navbar-inverse navbar-default-2" style="border-radius: 0px; ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">GYM BUDDY</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle size-13" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="size-13">Action</a></li>
                    <li><a href="#" class="size-13">Another action</a></li>
                    <li><a href="#" class="size-13">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#" class="size-13"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
            </li>
            <li><a href="{{ route('home') }}">Home</a></li>
            @else
                <li><a>Welcome! Guest</a></li>
            @endif
        </ul>
    </div>
</nav>