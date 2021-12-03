<!-- Errors -->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach    
        </ul>    
    </div>   
@endif

@if(session('success'))
    <div class="alert alert-succes">
        {{ session('success') }}
    </div>

@endif