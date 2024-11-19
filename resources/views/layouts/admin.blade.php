<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- plugins:css -->
     <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
     <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
     <!-- endinject -->
     <!-- plugin css for this page -->
     <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
     <!-- End plugin css for this page -->
     <!-- inject:css -->
     <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
     <!-- endinject -->
     <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />

    @livewireStyles
</head>
<body>
    
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper">   
            @include('layouts.inc.admin.sidebar')
        </div>

        
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">          
            <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>                              
          </ul>
        </div>
      </li>    
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>          
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>                    
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../docs/documentation.html">
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>

        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts

    <script src=" {{asset('admin/vendors/datatables.net/jquery.dataTables.js')}} "></script>
    <script src=" {{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}} "></script>
    <script src=" {{asset('admin/js/off-canvas.js')}} "></script>
    <script src=" {{asset('admin/js/hoverable-collapse.js')}} "></script>
    <script src=" {{asset('admin/js/template.js')}} "></script>
    <script src=" {{asset('admin/js/settings.js')}} "></script>
    <script src=" {{asset('admin/js/todolist.js')}} "></script>
    <script src=" {{asset('admin/js/dashboard.js')}}"></script>
    <script src=" {{asset('admin/js/proBanner.js')}} "></script>
</body>
</html>