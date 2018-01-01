<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Form Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!--Script untuk render / kirim data dari textarea ke page untuk preview hasilnya -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script>
  var bla=function(){var x=$("#render").val();return x};
  $(document).ready(function(){$("#btn2").click(function(){
      $(".row").hide();
      $("#buat").show();
      $("#buat").html(bla());
  });
  });

    $(document).ready(function(){$("#btn3").click(function(){
      $(".row").show();
      $("#buat").hide();
  });
  });
    function konfirmasi()
     {
     tanya = confirm("Anda Yakin Akan Menghapus Data ?");
     if (tanya == true) return true;
     else return false;
     }

</script>
<!--Batas Script untuk render / kirim data dari textarea ke page untuk preview hasilnya -->

    <link href="{{URL::asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/lib/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <a href="https://github.com/minikomi/Bootstrap-Form-Builder/"><img style="z-index: 100000; position: absolute; top: 0; right: 0; border: 0;" src="" alt=""></a>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">Aplikasi Form Builder</a>
          <!-- ini untuk meletakan preview calon formbuilder -->
          <p id="buat"></p>
          <!-- ini batas untuk meletakan preview calon formbuilder -->

          <button id="btn2">Preview Form</button>
          <button id="btn3">Edit Form</button>

        </div>
      </div>
    </div>
    @if (Session::has('flash_notification.message'))
        <div class="container">
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_notification.message') }}
            </div>
        </div>
    @endif

    @yield('content')
    <script data-main="{{URL::asset('assets/js/main-built.js')}}" src="{{URL::asset('assets/js/lib/require.js')}}" ></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-13083321-13', 'minikomi.github.io');
      ga('send', 'pageview');

    </script>
  </body>
</html>
