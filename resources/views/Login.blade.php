<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container">

        {{-- alert --}}
        @if(session('status') === 'success')
            <x-alert type="success" :dismissable="true" :message="session('message')" />
        @elseif(session('status') === 'error')
            <x-alert type="danger" :dismissable="true" :message="session('message')" />
        @endif

        <h1 class="text-center fw-bold">Login</h1>
        <div class="d-flex align-items-center justify-content-center">
            <x-form action="{{ route('user.login') }}" method="POST" class="w-50" :fields="[
        ['label' => 'Email', 'name' => 'email', 'type' => 'email'],
        ['label' => 'password', 'name' => 'password', 'type' => 'password']

    ]"         :submitText="'Register'" />
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>