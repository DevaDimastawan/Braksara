<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="p-4 pt-5">
      <p class="h1 text-center text-white">Braksara</p>
      <p class="text-center text-white">Braile To Balinese Aksara</p>
      <img src="images/logo.png" alt="" class="img-fluid rounded">
      
      <ul class="list-unstyled components mb-5">
        <li class="nav-item">
          <a href="/tulisaksara">Tulis Aksara Bali</a>
      </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Post</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="/post {{ ($title === "Post")}}">Post 1</a>
            </li>
            <li>
                <a href="/post2 {{ ($title === "Post2")}}">Post 2</a>
            </li>
            <li>
                <a href="/post3 {{ ($title === "Post3")}}">Post 3</a>
            </li>
          </ul>
        </li>
        <li >
          <a href="/contactus {{ ($title === "Contact Us")}}">Contact Us</a>
        </li>
      </ul>

      <div class="footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Braksara</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>

    </div>
  </nav>

  <div id="content" class="p-4 p-md-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Post") ? 'active' : '' }}" href="/post">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Tulis Aksara") ? 'active' : '' }}" href="/tulisaksara">Tulis Aksara Bali</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
      @yield('container')
  </div>
  </div>