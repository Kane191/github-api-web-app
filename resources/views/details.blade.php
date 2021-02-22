@extends('layouts.master')

@section('title')
    Details
@endsection

@section('content')

    <div class="row center">
        <div class="col-lg-7 ">
            <card class="card bg-white my-5">

                <div class="container">
                    <div class="row">
                        <h3 class="text-dark mt-3 ml-2">Repository Details:</h3>
                            <ol class="breadcrumb ml-auto bg-white">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$repo['full_name']}}</li>
                            </ol>
                    </div>
                </div>

            </card>

            <div class="card">
                <div class="card-header">
                    {{$repo['full_name']}}
                    <div style="float: right"><i class="fa fa-star"></i> {{$repo['stargazers_count']}}</div>
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


@endsection
