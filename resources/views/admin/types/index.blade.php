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
                {{-- se modifico il valore dell'id devo modificare anche il type_id di project non so se avviene in automatico --}}
                    <a class="btn btn-success" href=""><i class="fa-solid fa-pen"></i></a>
                </td>
                {{-- button --}}
            </tr>
            @endforeach
        </table>
    </div>
@endsection
