<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      @include('frontend.layouts.css-link')

   </head>


   <body>

    <!-- header section start -->
      <div class="header_section">

       @include('frontend.layouts.header')

       @include('frontend.layouts.slider')
         
      </div>
      <!-- header section end -->

      @yield('home_page')

      @include('frontend.layouts.footer')

      
     
      <!-- copyright section end -->
      <!-- Javascript files-->


      @include('frontend.layouts.script-link')
      
   </body>
</html>