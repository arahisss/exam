<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Экзамен</title>
    <link rel="stylesheet" href="style.css">

</head>
<body >
    <!-- <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="navbar-brand" src="img/icon.png" alt="">
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
      </ul>

        <button type="button" class="btn btn-primary button-login">Вход</button>
        <button type="button" class="btn btn-light button-auth">Авторизация</button>
    </header> -->

    <header >
        <nav  class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
            <div class="container header" >
                <img class="navbar-brand" src="img/icon.png" alt="">
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О нас</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Обратная связь</a>
                    </li>
                    </ul>
                    <button type="button" class="btn btn button-login">Вход</button>
                    <button type="button" class="btn btn-light button-auth">Авторизация</button>
                    
                </div>
            </div>
        </nav>
    </header>
    <section>
        <!-- <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div> -->

        <div id="carouselExampleCaptions" class="carousel slide h-30">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="img/img1.jpg" style="background-size: cover;"  class="d-block w-100 h-50" alt="">
                <div class="carousel-caption d-none d-md-block">
                <h5>Доставка еды</h5>
                <p>Приветствуем вас на нашем сайте доставки еды</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Доставка еды</h5>
                    <p>Приветствуем вас на нашем сайте доставки еды</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Доставка еды</h5>
                    <p>Приветствуем вас на нашем сайте доставки еды</p>
                </div>
            </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    
    <section>
        <div class="container">
            <h1 style="display:flex; justify-content: center;" class="m-5">Служба доставки еды</h1>

            <div class="cards justify-content-center row">
                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Быстрая доставка</h5>
                    </div>
                </div>

                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Надежность</h5>
                    </div>
                </div>

                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Качественный сервис</h5>
                    </div>
                </div>

                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Удобство использования</h5>
                    </div>
                </div>

                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Гарантия сохранности</h5>
                    </div>
                </div>

                <div class="card m-4 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Быстрая доставка</h5>
                    </div>
                </div>
            </div>    

            
        </div>
    </section>

    <section>
        <div class="container">
            <h1 style="display:flex; justify-content: center;" class="m-5">Выбор предприятия общественного питания</h1>
            <div class="form1 row align-items-center">
                <div class="col-md-6">
                    <h5>Административный округ</h5>
                    <select class="form-select "  aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <h5>Район</h5>
                    <select class="form-select col-md-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-4  mb-4 mt-4">
                    <h5>Тип</h5>
                    <select class="form-select col-md-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-4  mb-4 mt-4">
                    <h5>Соц. скидки</h5>
                    <select class="form-select col-md-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                

                <div class="col-md-4 mb-4 mt-4 ml-2">
                    <button style="background-color: #808000; color: white;" type="submit" class="col-md-4 mt-4 ml-2 btn ">Найти</button>
                </div>

            </div>
        </div>
    </section>

     


    <footer class="footer ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container">
                
                <div class="collapse navbar-collapse ">
                    <a class="navbar-brand" href="#">Exam</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">О нас</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Обратная связь</a>
                        </li>
                    </ul>
                    <h6 class="nav-item">Контакты: maindelay@mail.ru</h6>
                    
                </div>
            </div>
        </nav>
    </footer>

    <!-- <script src="main.js"></script> -->
</body>
</html>