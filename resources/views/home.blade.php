
@extends('layouts.dasboard_master')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-md-8 m-auto">
                    <div class="card ">
                        <div class="card-header">

                            <h1>Welcome : {{  Auth::user()->name }}</h1>
                        </div>
                        <div class="car-body">
                            <h1>Email address : {{  Auth::user()->email }}</h1>

                        </div>
                    </div>

                </div><!-- col-3 -->
            </div>
        </div>
    </div>

@endsection
