<!-- navbar -->
<nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><i class="bi bi-x-lg"></i></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="">About</a></li>
            <li><a href="#" id="login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('index'); }}">Tasty Tidbits</a></li>
            <div class="box-container">
                <div class="box">
                <div class="search-box">
                    <input type="text" placeholder="Search by recipes, ingredients, etc.">
                    <label for="" class="icon"><i class="bi bi-search"></i></label>
                </div>
                </div>
            </div>
            <li class="hideOnMobile"><a href="{{ route('index'); }}">Home</a></li>
            <li class="hideOnMobile"><a href="{{ route('blogs'); }}">Blogs</a></li>
            <li class="hideOnMobile"><a href="{{ route('recipes'); }}">Recipes</a></li>
            <li class="hideOnMobile"><a href="{{ route('about'); }}">About</a></li>
            @auth 
                @if(Auth::user()->role === 'admin')
                    <li class="hideOnMobile"><a href="{{ route('admin-dashboard'); }}">Admin Dashboard</a></li>
                @elseif(Auth::user()->role === 'user')
                    <li class="hideOnMobile"><a href="{{ route('dashboard'); }}"><i class="bi bi-person-circle"></i> {{ Auth::user()->name }}</a></li>
                @endif
                    <li class="hideOnMobile"><a href="{{ route('logout'); }}" id="login">Logout</a></li>
                @else
                    <li class="hideOnMobile"><a href="{{ route('login'); }}" id="login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
                    <li class="hideOnMobile"><a href="{{ route('signup'); }}">Sign Up</a></li>
            @endauth
            <li class="menu-button" onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
        </ul>
    </nav>
<!-- navbar end -->