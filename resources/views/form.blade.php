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
    <link rel="stylesheet" href="./js/main.js">
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
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">Помочь приюту</a></li>
                <li class="nav-item"><a href="{{ route('form-data') }}" class="nav-link">Админ</a></li>
            </ul>
          </div>
        </div>
      </nav>

      {{-- Form --}}

      <section >
        <div class="container mt-2">

          <div class="d-flex align-items-center justify-content-between">

            <div>
              @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <h1 class="pt-4">Анкета</h1>
    
              <form method="POST" class="py-5" action="{{ route('form-submit') }}">
                  @csrf   
    
                  <div class="mb-3">
                      <label for="petsname" id="name" name="petsname" class="form-label">Кличка выбранного животного</label>
                      <input class="form-control" name="petsname">
                  </div>
    
                  <div class="mb-3">
                      <label for="fio" id="fio" name="fio" class="form-label">ФИО будущего хозяина</label>
                      <input class="form-control" name="fio">
                  </div>
    
                  <div class="mb-3">
                      <label for="number" name="number" class="form-label">Ваш телефон</label>
                      <input class="form-control" name="number">
                  </div>
    
                  <div class="mb-3">
                      <label for="email" name="email" class="form-label">Ваше Email</label>
                      <input class="form-control" name="email">
                  </div>
    
                  <div class="mb-3">
                      <label for="aim" name="aim" class="form-label">Цель приобретения животного (любимец в семью, охранник или др.)</label>
                      <input class="form-control" name="aim">
                  </div>
    
                  <div class="mb-3">
                      <label for="place" name="place" class="form-label">У кого будет проживать питомец?</label>
                      <input class="form-control" name="place">
                  </div>
    
                  <div class="mb-3">
                      <label for="charge" name="charge" class="form-label">Готовы ли вы принять полную ответственность за жизнь и здоровье питомца? </label>
                      <input class="form-control" name="charge">
                  </div>
                  <button type="submit" class="btn-form">Отправить заявку</button>
              </form>
            </div>
            <div class="img-w">
              <img
                class="show-img d-none d-sm-block"
                src="./img/istockphoto-1172155138-170667a 1.png"
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