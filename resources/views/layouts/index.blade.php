<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
  <link href={{asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href={{asset('css/business-casual.min.css')}} rel="stylesheet">
  <link rel="stylesheet" href={{asset('css/app.css')}}>

</head>
<body>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
        <span class="site-heading-lower">Business Casual</span>
    </h1>
    @include('partial.navigation')
    <section class="container">
        @yield('content')
    </section>
    @include('partial.footer')






    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src={{asset('js/app.js')}}></script>

</body>
</html>