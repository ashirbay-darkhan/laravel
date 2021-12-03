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
</head>
<body>

    <div class="container">
        <h1 class="text-center mt-5">Админ панель</h1>
        <p>Все заявки :</p>
        <div class="justify-content-center">
            @foreach($data as $el)
                <div class="alert alert-info justify-content-between d-flex">
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
                        <button type="button" class="ml-5 btn btn-outline-success">Принять</button>
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>

    
</body>
</html>