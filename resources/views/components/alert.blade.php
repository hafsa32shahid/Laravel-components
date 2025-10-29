<div 
    {{ $attributes->merge([
        'class' => 'alert alert-' . $type . ($dismissable ? ' alert-dismissible fade show' : ''),
        'role' => $role
    ]) }}
>
    {{ $message }}

    @if ($dismissable)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
