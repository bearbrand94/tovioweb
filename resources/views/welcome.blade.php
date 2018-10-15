<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <style type="text/css">
            .navbar-default {
                background-color: #77BC1F;
/*                border-color: #E7E7E7;*/
            }
            /* Title */
            .navbar-default .navbar-brand {
                color: #ffffff;
            }
            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
                color: #ffffff;
            }

            /* Link */
            .navbar-default .navbar-nav > li > a {
                color: #ffffff;
            }
            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color: #ffffff;
            }
            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color: #ffffff;
                background-color: #77BC1F;
            }
            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
                color: #ffffff;
                background-color: #77BC1F;
            }
        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-expand-lg navbar-default fixed-top">
            <span class="navbar-brand mb-0 h1"><img style="height:2.5%; width:12.5%; margin-left: 30%;" src="{{asset('assets/img/tovio-logo.png')}}"></span>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active" style="margin-right: 10%;">
                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" style="margin-right: 10%;">
                <a class="nav-link" href="#benefits_page" id="btn_benefits">BENEFITS</a>
              </li>
              <li class="nav-item" style="margin-right: 10%;">
                <a class="nav-link" href="#">DOWNLOAD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SUPPORT</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid no-padding">
          <div class="row">
            <div class="col-md-12">
              <img class="img-fluid w-100" style="padding-bottom:150px; padding-top: 100px;" src="{{asset('assets/img/overview_page.jpg')}}">
              <img id="benefits_page" class="img-fluid w-100" style="padding-bottom:150px;" src="{{asset('assets/img/benefits_page.jpg')}}">
              <img class="img-fluid w-100" style="padding-bottom:150px;" src="{{asset('assets/img/overview_bottom_page.jpg')}}">
            </div>
          </div>
        </div>
        
    </body>

    <script type="text/javascript">
        $('#btn_benefits').scrollspy({ target: '#benefits_page' })
    </script>
</html>
