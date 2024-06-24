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

                </td>
                {{-- button --}}
            </tr>
            @endforeach
        </table>
    </div>
@endsection
