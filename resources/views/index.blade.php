@extends('layouts.master')


@section('content')
    <div class="bg-img">
        <div class="row center">
            <div class="col-lg-5 content">

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#others">Repositories</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#favourite">Favourites</a></li>
                </ul>

                <div class="tab-content">
                    <div id="others" class="tab-pane fade show active">
                        <div class="card">
                            <div class="card-header">Github repositories</div>
                            <div class="card-body">
                                <table class="table table-hover table-sm" id="github">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($repos as $repo)
                                        @foreach($favourites as $favourite)
                                            @if($repo['id'] !== $favourite->github_id)
                                                <tr>
                                                    <td><a href="{{route('details', $repo['id'])}}">{{$no++}}</a></td>
                                                    <td>{{$repo['name']}}</td>
                                                    <td>{{$repo['full_name']}}</td>
                                                    <td><a class="btn btn-primary" href="{{route('favourite', $repo['id'])}}">Favourite</a> </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="favourite" class="tab-pane fade">
                        <div class="card">
                            <div class="card-header">Github repositories</div>
                            <div class="card-body">
                                <table class="table table-hover table-sm" id="fav">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($repos as $repo)
                                        @foreach($favourites as $favourite)
                                            @if($repo['id'] == $favourite->github_id)
                                                <tr>
                                                    <td><a href="{{route('details', $repo['id'])}}">{{$loop->iteration}}</a></td>
                                                    <td>{{$repo['name']}}</td>
                                                    <td>{{$repo['full_name']}}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#github').DataTable();
        } );
        $(document).ready(function() {
            $('#fav').DataTable();
        } );
    </script>
@endsection
