<header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">POS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ $activeNavItem == 'home' ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('food-beverage') }}"
                            class="nav-link {{ $activeNavItem == 'food_beverage' ? 'active' : '' }}">
                            Food Beverage
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('beauty-health') }}"
                            class="nav-link {{ $activeNavItem == 'beauty_health' ? 'active' : '' }}">
                            Beauty Health
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home-care') }}"
                            class="nav-link {{ $activeNavItem == 'home_care' ? 'active' : '' }}">
                            Home Care
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('baby-kid') }}"
                            class="nav-link {{ $activeNavItem == 'baby_kid' ? 'active' : '' }}">
                            Baby Kid
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
