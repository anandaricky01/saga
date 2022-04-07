@if (Request::is('faq') || Request::is('artikel/*'))
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 fixed-top">
  <div class="container">
    <div>
      <img style="width: 80px; margin-right: 10px" src="/img/logo.svg" class="img-fluid" alt="Logo"/>
    </div>
    <a class="navbar-brand" href="/">SAGA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class="navbar-nav mx-auto">
        <a class="nav-link active beranda" data-spy="scroll" style="padding-right: 30px" href="/">Beranda</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Tentang Kami</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/tentang/saga">Tentang SAGA</a></li>
            <li><a class="dropdown-item" href="/tentang/tim">Tentang Tim</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Layanan</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/layanan/setor">Layanan Setor</a></li>
            <li><a class="dropdown-item" href="/layanan/kurir">Layanan Kurir</a></li>
            <li><a class="dropdown-item" href="/layanan/kolega">Layanan Mitra</a></li>
          </ul>
        </li>
        <a class="nav-link active artikel" data-spy="scroll" style="padding-right: 30px" href="/artikel">Artikel</a>
        <a class="nav-link active faq" data-spy="scroll" style="padding-right: 30px;" href="/faq">FAQ</a>
      </div>
      <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            @if (auth()->user()->role_id == 2)
            <li><a class="dropdown-item" href="/dashboard/artikel"><i class="bi bi-layout-text-sidebar-reverse"></i>Artikel Controll</a></li>
            <li><hr class="dropdown-divider"></li>
            @endif
            <li>
              <form action="/logout" method="post">  
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log out </button>
              </form>
            </li>
          </ul>
        </li>
      @else 
        <a class="btn text-white" href="/login" tabindex="-1" aria-disabled="true">Masuk</a>
      @endauth
    </ul>
    </div>
  </div>
</nav>
@else
    
<!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 sticky-top">
  <div class="container">
    <div>
      <img style="width: 80px; margin-right: 10px" src="/img/logo.svg" class="img-fluid" alt="Logo"/>
    </div>
    <a class="navbar-brand" href="/">SAGA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class="navbar-nav mx-auto">
        @isset($active)
          <a class="nav-link beranda active" data-spy="scroll" style="padding-right: 30px" href="/">Beranda</a>
        @else 
          <a class="nav-link beranda" data-spy="scroll" style="padding-right: 30px" href="/">Beranda</a>
        @endisset
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('tentang/*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Tentang Kami</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/tentang/saga">Tentang SAGA</a></li>
            <li><a class="dropdown-item" href="/tentang/tim">Tentang Tim</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ Request::is('layanan/*') ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="padding-right: 30px">Layanan</a>
          <ul class="dropdown-menu" style="background-color: #00b3bc">
            <li><a class="dropdown-item" href="/layanan/setor">Layanan Setor</a></li>
            <li><a class="dropdown-item" href="/layanan/kurir">Layanan Kurir</a></li>
            <li><a class="dropdown-item" href="/layanan/kolega">Layanan Mitra</a></li>
          </ul>
        </li>
        <a class="nav-link artikel {{ Request::is('artikel') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/artikel">Artikel</a>
        <a class="nav-link faq {{ Request::is('faq') ? 'active' : '' }}" data-spy="scroll" style="padding-right: 30px" href="/faq">FAQ</a>
      </div>

      <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            @if (auth()->user()->role_id == 2)
            <li><a class="dropdown-item" href="/dashboard/artikel"><i class="bi bi-layout-text-sidebar-reverse"></i>Artikel Controll</a></li>
            <li><hr class="dropdown-divider"></li>
            @endif
            <li>
              <form action="/logout" method="post">  
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log out </button>
              </form>
            </li>
          </ul>
        </li>
      @else 
        <a class="btn text-white" href="/login" tabindex="-1" aria-disabled="true">Masuk</a>
      @endauth
    </ul>
    
    </div>
  </div>
</nav>
<!-- akhir navbar -->
@endif