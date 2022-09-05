<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="p-4 pt-5">
      <button type="button" id="sidebarCollapse2" class="btn btn-primary close-btn" style="position: absolute;right: 10px; top: 10px;display: none;"><i class="fa fa-close"></i></button>
      <p class="h1 text-center text-white">Braksara</p>
      <p class="text-center text-white">Braile To Balinese Aksara</p>
      <img src="images/logo.png" alt="" class="img-fluid rounded">

      <ul class="list-unstyled components mb-5">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
        </li>
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
        <li>
          <a href="/contactus {{ ($title === "Contact Us")}}">Contact Us</a>
        </li>
      </ul>

      <div class="footer">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> Braksara</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </nav>

  <div class="w-100">
    <div id="tp-bg" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.7);position: fixed;top: 0; z-index: 10;display: none;"></div>
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
      </nav>
      <div>
        @if(Request::segment(1) != 'home')
        @yield('container')
        @endif
      </div>
      @if(Request::segment(1) == 'home')
      @yield('container')
      @endif
    </div>
  </div>