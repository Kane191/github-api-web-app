@extends('layouts.master')


@section('content')
    <div class="bg-img">
        <div class="row center">
            <div class="col-lg-5 content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                {{$repo['full_name']}}
                                <div style="float: right"><i class="fa fa-star"></i>{{$repo['stargazers_count']}}</div>
                            </div>
                            <div class="card-body">
                                <p>Description : {{$repo['description']}}</p><br>
                                <p>Language : {{$repo['language']}}</p><br>
                                <p>Watchers : {{$repo['watchers_count']}}</p><br>
                                <p>Forks : {{$repo['forks_count']}}</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>>
@endsection
