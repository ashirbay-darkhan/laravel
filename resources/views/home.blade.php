<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-4 navbar">
        <div class="container">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <div class="logo-text d-flex align-items-center">
                    <span class="menu-logo">HP</span> <p class="menu-text">Happy pet</p>
                </div>
            </a>
  
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="nav nav-pills ms-auto">
                <li class="nav-item"><a href="#pets" class="nav-link">Питомцы</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">О приюте</a></li>
                <li class="nav-item"><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">Помочь приюту</a></li>
                <li class="nav-item"><a href="{{ route('form-data') }}" class="nav-link">Админ</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <section class="pl-3 pt-lg-5 text-center text-sm-start section" >
      <div class="container" id="help">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
              
            <h1 class="showcase-h1">Этим хвостам нужна<br> любовь и забота!</h1>
            <p class="show-p lead my-4">
                Приют для домашних животный. Десятки наших подопечных, ждут не дождутся пока за ними не прийдут
            </p>
              
            <a class="show-btn" href="#pets">
              Найти друга
            </a>

          </div>
          <div class="img-w">
              <img
                class="show-img d-none d-sm-block"
                src="./img/3.png"
                alt=""
              />
          </div>
        </div>
      </div>
    </section>

    <!-- Help -->
    <section
      class="py-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <p class="help-p lead my-4">
                Обратите внимание 
            </p>
            <h1 class="showcase-h1 pb-2">Они нуждаются в Вашей помощи!</h1>
              
            <button class="show-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Помоч приюту</button>
          </div>
          <div class="help-img-w">
              <img
                class="show-img d-sm-block"
                src="./img/help.png"
                alt=""
              />
          </div>
        </div>
      </div>
    </section>


    <!-- Pets -->
    <section class="pets py-5" id="pets">
      <div class="container">
        <div class="pets-text d-flex align-items-center justify-content-center">
          <img src="./img/icons8-кошачий-след-80 2.png" alt="">
          <h2 class="p-text text-center mb-4 pt-lg-5">Питомцы</h2>
          <img src="./img/icons8-собачий-след-50 1.png" alt="">
        </div>

        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Мальчик / 2 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/photo-1553688738-a278b9f063e0 1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Девочка / 3 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/кошка.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Девочка / 4 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/d 1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Мальчик / год</h3>
                <div class="h1 mb-3">
                  <img src="./img/2.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row text-center g-4 pt-5">
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Мальчик / 2 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/a1 1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Девочка / 2 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/c 1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Девочка / 2 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/f 1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title card-text mb-3">Мальчик / 2 года</h3>
                <div class="h1 mb-3">
                  <img src="./img/e-1.png" alt="">
                </div>
                <a class="show-btn" href="form">Забрать</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- About -->
    <section
      class="py-5 text-center text-sm-start"
      id="about"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1 class="showcase-h1 pb-2">О нашем приюте</h1>
            <p class="about-p lead my-4">
              Наша цель - найти каждому семью
            </p>
            <p class="about-text">
              Мы приюили сотни и кошек. И еще солько жеждут хозяина.
              Мы группа людей, которые решили дать каждому животному
              крышу над головой. Ведь дом нужен каждому. 
            </p>
            <button class="about-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Помоч приюту</button>
          </div>
          <div class="help-img-w">
              <img
                class="show-img d-sm-block"
                src="./img/about.png"
                alt=""
              />
          </div>
        </div>
      </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Наши реквезиты</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul class="list-group">
              <li class="list-group-item">Телефон: +7 (916) 798-56-67</li>
              <li class="list-group-item">VISAMasterCard 4647 7853 3580 6508</li>
              <li class="list-group-item">VISAMasterCard5402 3549 3466 6136</li>
              <li class="list-group-item">VISAMasterCard3426 6356 6408 813</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>