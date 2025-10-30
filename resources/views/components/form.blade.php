
<form {{ $attributes }}>
    @csrf

  @if(!empty($fields))
    @foreach ($fields as $field)

        <div class="mb-3">
            <label for="{{ $field['name'] }}" class="form-label">{{ $field['label'] }}</label>
            <input 
                type="{{ $field['type'] ?? 'text' }}" 
                name="{{ $field['name'] }}" 
                value="{{ old($field['name']) }}"
                class="form-control"
            >
            @error($field['name'])
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    @endforeach
 @endif


    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</form>