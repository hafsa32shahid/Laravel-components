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
    @php
    $dismissable = true;
    @endphp
    <div class="container my-4">
        <x-alert type="danger"  role="alert" class=" mt-5" :$dismissable message="this is an alert"/>
    </div>

    <x-card image="https://images.pexels.com/photos/34087119/pexels-photo-34087119.jpeg"   style="width: 18rem" >
         <x-slot:title>Nature View</x-slot:title>
        <p class="card-text">This is a beautiful view of nature showcasing the serenity and tranquility of the outdoors. The lush greenery and vibrant colors create a picturesque scene that invites you to relax and unwind.</p>
        <a href="$">See More</a>
    </x-card>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>