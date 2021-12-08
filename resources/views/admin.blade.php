<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="container">
        <h1 class="text-center mt-5">Админ панель</h1>
        <p>Все заявки :</p>
        <div class="justify-content-center">
            @foreach($data as $el)
                <div class="alert alert-secondary justify-content-between d-flex">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">{{ $el->petsname }}</li>
                        <li class="list-group-item">{{ $el->fio }}</li>
                        <li class="list-group-item">{{ $el->number }}</li>
                        <li class="list-group-item">{{ $el->email }}</li>
                        <li class="list-group-item">{{ $el->aim }}</li>
                        <li class="list-group-item">{{ $el->place }}</li>
                        <li class="list-group-item">{{ $el->charge }}</li>
                        
                    </ul>
                    <div>
                        <a href="{{ route('form-delete', $el->id) }}">
                            <button type="button" class="btn btn-outline-danger">Отклонить</button>
                        </a>
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>

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