@props(['name'])

<label class="block mb-2 font-bold text-sm text-gray-700"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>
