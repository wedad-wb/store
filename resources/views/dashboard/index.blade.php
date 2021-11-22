@extends('layouts.dashboard')
@section('title')
    <title>index</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="highlight-icon bg-light mr-3">
                            <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                        </div>
                        <div class="wrapper">
                            <p class="card-text mb-0">user</p>
                            <div class="fluid-container">
                                <h3 class="card-title mb-0">{{App\Models\User::all()->count()}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="highlight-icon bg-light mr-3">
                            <i class="mdi mdi-cube text-success icon-lg"></i>
                        </div>
                        <div class="wrapper">
                            <p class="card-text mb-0">category</p>
                            <div class="fluid-container">
                                <h3 class="card-title mb-0">$65,650</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="highlight-icon bg-light mr-3">
                            <i class="mdi mdi-cube text-success icon-lg"></i>
                        </div>
                        <div class="wrapper">

                            <p class="card-text mb-0">product</p>
                            <div class="fluid-container">
                                <h3 class="card-title mb-0">{{App\Models\Product::all()->count()}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="highlight-icon bg-light mr-3">
                            <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                        </div>
                        <div class="wrapper">
                            <p class="card-text mb-0">Orders</p>
                            <div class="fluid-container">
                                <h3 class="card-title mb-0">$45,650</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="highlight-icon bg-light mr-3">
                            <i class="mdi mdi-airballoon text-info icon-lg"></i>
                        </div>
                        <div class="wrapper">
                            <p class="card-text mb-0">Sales</p>
                            <div class="fluid-container">
                                <h3 class="card-title mb-0">$45,650</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
