@extends('layouts.admin')

@section('content')
<form class="w-50 m-auto d-flex flex-column pt-5"
    action="{{ route('admin.types.store') }}"
    method="POST">
    @csrf
{{-- type --}}
<label for="type"> Nome: </label>
<input type="text" id="type" name="type">
{{-- /type --}}

{{-- type --}}
<label for="color"> Colore: </label>
<input type="text" id="type" name="color">
{{-- /type --}}

<button type="submit" class="btn btn-success mt-5 w-25 m-auto">crea</button>
</form>

@endsection
