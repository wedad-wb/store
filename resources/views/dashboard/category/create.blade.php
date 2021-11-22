@extends('layouts.dashboard')
@section('title')
    <title>create new category</title>
@endsection

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card px-3">
                        <div class="card-body">
                            <h4 class="card-title">Add New Category</h4>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" name="name">
                                <button type="submit" class=" btn btn-primary font-weight-bold " >Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection
