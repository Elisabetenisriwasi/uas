<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/')}}">Beauty Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ url('home')}}" class="nav-link">Beranda</a></li>
              <li class="nav-item active"><a href="{{ url('customer/produk')}}" class="nav-link">Produk</a></li>

              <li class="nav-item dropdown">

              <li class="nav-item active"><a href="{{ url('about')}}" class="nav-link">About</a></li>
              <li class="nav-item active"><a href="{{ url('blog')}}" class="nav-link">Blog</a></li>
              <li class="nav-item active"><a href="{{ url('contact')}}" class="nav-link">Contact</a></li>
             <li class="nav-item active cta cta-colored"><a href="{{url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>Cart</a></li>
            </ul>
          </div>
        </div>
      </nav>