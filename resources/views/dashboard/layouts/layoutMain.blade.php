<!DOCTYPE html>
<html lang="en">
  <head>
    @if (Request::is('dashboard/artikel*'))
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/css/artikel1.css" />
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @endif

    @if (Request::is('dashboard'))
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/dashboard.css" />

      <!-- AOS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <!-- counter -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

      <!-- icon -->
      <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>
    @endif

    @if (Request::is('dashboard/riwayat-kupon'))
          <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/rivocer.css" />

      <!-- AOS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <!-- counter -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

      <!-- icon -->
      <script src="https://kit.fontawesome.com/ff889e85ca.js" crossorigin="anonymous"></script>
    @endif

    <title>Dashboard | SAGA</title>
  </head>
  <body>
    
      @include('partials/navbar')
      @yield('container')

      @include('partials/footer')

    @if (Request::is('dashboard'))
      <!-- javasript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <!-- AOS -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
          once: true, duration: 1300,offset: 100,
        });
      </script>

      <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModalHasil').modal('show');
        });
      </script>
    @endif

    @if (Request::is('dashboard/riwayat-kupon' || 'dashboard/artikel*'))
      <!-- javasript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

      <!-- AOS -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
          once: true, duration: 1300,offset: 0,
        });
      </script>
    @endif
  </body>
</html>
