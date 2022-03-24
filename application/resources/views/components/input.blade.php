@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-3 rounded-md shadow-sm border border-gray-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
