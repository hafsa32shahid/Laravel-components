@props(['image' => null, 'imageStyle' => null, 'title' => null])
<div  {{ $attributes->merge(['class' => 'card']) }}>
  <img src="{{ $image }}"  style="{{ $imageStyle }}" class="card-img-top" alt="cycle image">
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    {{ $slot }}
  </div>
</div>