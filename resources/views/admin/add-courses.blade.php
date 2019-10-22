<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | New Course</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Custom styles for this template -->
    <style>
        body {
            overflow-x: hidden;
        }
        
        .btn-success {
            background-color: #44CF6C;
            border-color: #44CF6C;
        }
        
        .btn-success:hover {
            background-color: #44CF6C;
            border-color: #44CF6C;
        }
        
        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
            background-color: #3A0842;
        }
        
        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }
        
        #sidebar-wrapper .list-group {
            width: 15rem;
        }
        
        #page-content-wrapper {
            min-width: 100vw;
        }
        
        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }
        
        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }
            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        @include('inc.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn" id="menu-toggle"><img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1571236013/iconfinder_Menu_2290865-2_rtadbn.png"></button>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger" href="{{ route('logout') }}" style="color: #fff;">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <h2 class="text-center mt-5 mb-5">ADD NEW COURSES</h2>
                <div>
                    @if(session('failed'))
                        <div class="text-center alert alert-danger">
                            {{session('failed')}}
                        </div>

                    @endif
                </div>
                <div>
                    @if(session('success'))
                        <div class="text-center alert alert-success">
                            {{session('success')}}
                        </div>

                    @endif
                </div>
                <form action="{{route('course.store')}}" method="post">
                    @csrf
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coursename">Course Title</label>
                                    <input id="coursename" class="form-control" required type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coursecode">Course Duration</label>
                                    <div class="input-group">
                                        <input class="form-control" name="duration" type="number" required placeholder="" aria-label="Recipient's " aria-describedby="new-addon">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="new-addon">MONTHS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Course Price</label>
                                    <div class="input-group">

                                        <input class="form-control" name="price" type="number" required  placeholder="" aria-label="Recipient's " aria-describedby="my-addon">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="my-addon">NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="coursedesc">Course Description</label>
                                    <textarea id="coursedesc" class="form-control" required name="description" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success d-block mx-auto pr-5 pl-5" style="background-color: #3A0842; border-color: #3A0842;">ADD</button>
                </form>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>