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
    <div class="container mt-2">
        <a href="/">
            <img src="./img/icons8-предыдущий-50.png" alt="">
            <p>Главная </p>
        </a>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
    
</body>
</html>