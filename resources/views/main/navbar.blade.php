<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0">SisPer</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ $title === 'About' ? 'active' : '' }}">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Kalkulasi' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Kalkulasi</a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Simpanan</a>
                        <a href="quote.html" class="dropdown-item">Pinjaman</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Free Quote</a>
        </div>
    </nav>

    @if ($title == 'Home')
        <div class="container-xxl bg-primary hero-header">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                        <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum
                            ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo
                            amet ipsum vero ipsum clita lorem</p>
                        <a href=""
                            class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn
                            More</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-xxl bg-primary page-header position-relative">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">{{ $title }}</h1>
            </div>
        </div>
    @endif
</div>
<!-- Navbar & Hero End -->
