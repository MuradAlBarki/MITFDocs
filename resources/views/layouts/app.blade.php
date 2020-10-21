<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MITF') }}</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
                <!-- Bootstrap CSS CDN -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
                <!-- Our Custom CSS -->
                <link rel="stylesheet" href="<?php echo asset('css/sidebar.css')?>" type="text/css">
            
                <!-- Font Awesome JS -->
                <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
                <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
            </head>
             

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="wrapper">
                    <!-- Sidebar  -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>الوثائق</h3>
                        </div>
                
                        <ul class="list-unstyled components">
                            <p>نظام مسارات المصرفي</p>
                            <li class="active">
                                <a id="home" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">الرئيسية</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a class="outline" name="outline1" href="#">عنوان 1</a>
                                    </li>
                                    <li>
                                        <a class="outline" name="outline2" href="#">عنوان 2</a>
                                    </li>
                                    <li>
                                        <a class="outline" name="outline3" href="#">عنوان 3</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#">خصائص</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">صفحات</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">صفحة 1</a>
                                    </li>
                                    <li>
                                        <a href="#">صحفة 2</a>
                                    </li>
                                    <li>
                                        <a href="#">صفحة 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">المكونات</a>
                            </li>
                            <li>
                                <a href="#">التركيب</a>
                            </li>
                        </ul>
                
                        <ul class="list-unstyled CTAs">
                            <li>
                                <a href="#" class="download">رابط الى المراجع</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="content">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
            
                            <button type="button" id="sidebarCollapse" class="btn btn-info">
                                <i class="fas fa-align-left"></i>
                                <span></span>
                            </button>
                            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>
            
                            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                                {{-- <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">صفحة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">صفحة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">صفحة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">صفحة</a>
                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                    </nav>
                    @yield('content')
                </div>
                </div>
            </div>
        </div>
               
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
               <!-- Popper.JS -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
               <!-- Bootstrap JS -->
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
               <script type="text/javascript" src="<?php echo asset('js/sidebar.js')?>"></script>

                <!-- jQuery Custom Scroller CDN -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>
