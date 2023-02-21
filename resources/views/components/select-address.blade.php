@props(['disabled' => NULL, 'selectedValue' => NULL])

<select id="address_id" name="address+id" {{ $disabled ? 'disabled' : ''}} {!! $attributes->merge()}>
    @foreach (App\Models\Address::all() as $option)
        <option {{ isset($selectedValue) }}></option>
    @endforeach
</select>