<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Panel de usuario</title>

    <style>
        :root {
        --main-bg-color: #009d63;
        --main-text-color: #009d63;
        --second-text-color: #bbbec5;
        --second-bg-color: #c1efde;
        }
        .primary-text {color: var(--main-text-color);}
        .second-text {color: var(--second-text-color);}
        .primary-bg {background-color: var(--main-bg-color);}
        .secondary-bg {background-color: var(--second-bg-color);}
        .rounded-full { border-radius: 100%;}

        #wrapper {
            overflow-x: hidden;
            background-image: linear-gradient(
            to right,
            #baf3d7,
            #c2f5de,
            #cbf7e4,
            #d4f8ea,
            #ddfaef
            );
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {padding: 0.875rem 1.25rem;font-size: 1.2rem;}
        #sidebar-wrapper .list-group {width: 15rem;}
        #page-content-wrapper {min-width: 100vw;}
        #wrapper.toggled #sidebar-wrapper {margin-left: 0;}
        #menu-toggle {cursor: pointer;}
        .list-group-item {border: none;padding: 20px 30px;}
        .list-group-item.active {
            background-color: transparent;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {margin-left: 0;}
            #page-content-wrapper {min-width: 0;width: 100%;}
            #wrapper.toggled #sidebar-wrapper {margin-left: -15rem;}
        }

        img{
            height: 5rem;
            width: 5rem;
            border-radius: 75%;
        }

        .fa-star, .fa-star-half-alt{
            color: #ffbf00;
        }

        .fa-quote-left{
            font-size: 1rem;
        }

    </style>

    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

</head>

<body>


    <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom"><i
                class="bx bx-bowl-hot"></i><a href="/"class=" text-success">FudRater</a></div>
        <div class="list-group list-group-flush my-3">


            <a href="/panelusuario/perfil" id="btn_perfil" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-tachometer-alt me-2"></i>Perfil</a>

            <a href="/panelusuario/resenyas" id="btn_resenya" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-project-diagram me-2"></i>Mis reseñas</a>

            <a href="/panelusuario/admin" id="btn_admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-project-diagram me-2"></i>Admin</a>


            <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                    class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Panel de usuario</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{auth()->user()->email ?? auth()->user()->email}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            
<div class="col-md-3 " style="margin: 0 auto; text-align:center;">
    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div>
            <h3 class="fs-2">6</h3>
            <p class="fs-5">Reseñas</p>
        </div>
        <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
    </div>
</div>



<div class="p-5 table-responsive">

<div class="container">



    <div class="row">

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2016/11/18/14/05/brick-wall-1834784_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 1</p>
                        <p class="text-muted mb-0">Alicante</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0 " style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2016/11/21/16/02/outdoor-dining-1846137_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 2</p>
                        <p class="text-muted mb-0"> Altea</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0" style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2017/07/15/13/45/french-restaurant-2506490_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 3</p>
                        <p class="text-muted mb-0"> Benidorm</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0" style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2019/06/25/13/59/city-4298285_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 4</p>
                        <p class="text-muted mb-0"> Sevilla</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0" style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2020/03/13/08/34/south-station-4927286_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 5</p>
                        <p class="text-muted mb-0"> Madrid</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0" style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card border-danger">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="https://cdn.pixabay.com/photo/2022/02/10/05/44/wuzhen-7004638_960_720.jpg" alt="" class="mr-4">

                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"> Restaurante 6</p>
                        <p class="text-muted mb-0"> Denia</p>

                        <ul class="list-inline text-center m-0">
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                            <li class="list-inline-item"> <i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0" style="font-size: 17px"> <i class="fas fa-quote-left text-danger"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Dolorem commodi laborum, aliquam sed natus labore repudiandae fugit dignissimos totam esse sunt nemo corrupti, modi
                            magnam quasi aspernatur nihil. Ipsum, exercitationem?</p>
                    </blockquote>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>



    </div>
</div>

</div>


        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>