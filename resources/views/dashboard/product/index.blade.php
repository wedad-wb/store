@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('product.index')}}" method="get">
                        @csrf
                        <div class="form-group d-flex search-field">
                            <input type="text" class="form-control" placeholder="Search Here" name="search" value="">
                            <button type="submit" class="btn btn-primary ml-3">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
