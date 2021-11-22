@extends('layouts.dashboard')
@section('title')
    <title>all category</title>
@endsection

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card px-3">
                        <div class="card-body">
                            <h4 class="card-title">All Category</h4>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <table class=" table table-info text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name of category</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('category.edit',$category)}}" class="btn btn-primary">edit</a>
                                            <a href="{{route('category.destroy',$category)}}" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3"> no category</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
