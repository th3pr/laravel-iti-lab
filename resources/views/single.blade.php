@extends('layout.layout')
@section('title', 'Single Blog')

@section('content')
<div class="container">
    <div class="col-md-12 col-lg-12">
        <table class="table">
            <thead class="table-dark">
                <th>
                    Title
                </th>
                <th>
                    Body
                </th>
                <th>
                    Auther
                </th>
            </thead>
            <tbody class="table-hover">
                    <tr>
                        <td>
                            {{$data["title"]}}
                        </td>
                        <td>
                            {{$data["body"]}}
                        </td>
                        <td>
                            {{$data["auther"]}}
                        </td>

                    <tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
