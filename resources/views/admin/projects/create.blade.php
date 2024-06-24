@extends('layouts.admin')

@section('content')

{{-- form --}}
<form class="w-50 m-auto d-flex flex-column pt-5"
    action="{{ route('admin.projects.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf

    {{-- title --}}
    <label for="title">Titolo :

        {{-- message error on page --}}
        @error('title')
            <span class="text-danger">
                {{ $errors->first('title') }}
            </span>
        @enderror
        {{-- /message error on page --}}
    </label>
    <input class="form-control

        {{-- add dynamic class with red border  --}}
        @error('title')
            is-invalid
        @enderror"
        {{-- /add dynamic class with red border  --}}

        type="text" id="title" name="title" value="{{old('title')}}">
    {{-- /title --}}

    {{-- description --}}
    <label for="description">Descrizione :

        {{-- message error on page --}}
        @error('description')
            <span class="text-danger">
                {{ $errors->first('description') }}
            </span>
        @enderror
        {{-- /message error on page --}}

    </label>
    <textarea class="form-control

        {{-- add dynamic class with red border  --}}
        @error('description')
            is-invalid
        @enderror"
        {{-- /add dynamic class with red border  --}}

        type="text" id="description" name="description">{{old('description')}}</textarea>
    {{-- description --}}

    {{-- file --}}
    <label for="cover_image"> Immagine</label>
    <input class="form-control

    {{-- message error on page --}}
    @error('cover_image')
        is-invalid
    @enderror"
    {{-- /message error on page --}}

    type="file" name="cover_image" id="cover_image">

    {{-- add dynamic class with red border  --}}
    @error('cover_image')
    <span class="text-danger">
        {{ $errors->first('cover_image') }}
    </span>
    @enderror
    {{-- /add dynamic class with red border  --}}

    {{-- dynamic image --}}
    <img id="imagePreview" class="hide w-25 mt-3" src="" alt="new-image">

    {{-- button add and remove --}}
    <div>
        <button class="btn btn-success mt-3 w-25"> Aggiungi </button>
        <a id="btnDelete" class="btn btn-danger mt-3 hide w-25" >rimuovi</a>
    </div>
    {{-- /button add and remove --}}

    {{-- /file --}}


</form>
{{-- /form --}}
@endsection
