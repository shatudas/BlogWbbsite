<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    @include('backend.links.css')

  </head>
  <body>


    @include('backend.layouts.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->

    @include('backend.layouts.sidebar')
     

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>


        @yield('home')


        @include('backend.layouts.footer')

      </div>
    </div>
    <!-- JavaScript files-->
    
    @include('backend.links.script')
  </body>
</html>