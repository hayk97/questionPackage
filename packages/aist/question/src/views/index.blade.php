{{--@extends('layouts.admin')--}}

{{--@section('style')--}}
    <link href="/css/admin/plugins/footable/footable.core.css" rel="stylesheet"/>
{{--@endsection--}}

{{--@section('content')--}}
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h1> Questions</h1>
            <div class="ibox-tools">
                <a href="{{ url('/admin/questions/create') }}" class="btn btn-success btn-sm" title="Add New User">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            </div>

        </div>

        <div class="ibox-content float-e-margins">
            <div class="table">
                <table class="footable  table table-stripped stripe">
                    <thead>
                    <tr>
                        <th> Questions</th>
                        <th> Type</th>
                        <th> Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $item)
                        <tr>
                            <td>{{ $item->question }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <a href="{{ url('/admin/questions/' . $item->id) }}" class="btn btn-info btn-xs"
                                   title="view"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                <a href="{{ url('/admin/questions/' . $item->id . '/edit') }}"
                                   class="btn btn-primary btn-xs    "
                                   title="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{--@endsection--}}

{{--@section('script')--}}
    <script>
        $(document).ready(function () {
            $('.footable').DataTable({
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search..."
                },
                "lengthChange": false,
                "bInfo": false,
            });
        });
    </script>
{{--@endsection--}}





