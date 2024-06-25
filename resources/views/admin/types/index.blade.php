@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-striped mt-5">
            <tr>
                <th scope="col">
                    id
                </th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Color
                </th>
                <th scope="col">
                    Button
                </th>
            </tr>
            @foreach ($typeList as $curType)
            <tr>
                <td>
                    {{ $curType->id }}
                </td>
                <td>
                    {{ $curType->name }}
                </td>
                <td>
                    {{ $curType->color }}
                </td>
                {{-- button --}}
                <td>
                    {{-- edit btn --}}
                    <a class="btn btn-success"
                        href="{{ route('admin.types.edit', ['type' => $curType->id]) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    {{-- /edit btn --}}

                    {{-- delete btn --}}
                    <form action="{{ route('admin.types.destroy', ['type' => $curType->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                    {{-- /delete btn--}}

                </td>
                {{-- button --}}
            </tr>
            @endforeach
        </table>
    </div>
@endsection
