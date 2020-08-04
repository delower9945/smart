
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
                <div class="col-md-4 m-auto">
                    <div class="card">

                        <div class="card-header">
                            Catgory Add
                        </div>
                        <div class="card-body">
                            @if(session('succes'))
                                <div class="alert alert-success">
                                    {{session('succes')}}
                                </div>
                            @endif
                            <form  action="{{ url('catgory/post') }}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label for="Catgory Name">Catgory Name</label>
                                    <input type="text" class="form-control" plesholder="Enter Your Catgory Name" name="catgorie_name" id="catgorie_name"  >
                                </div>

                                <button type="submit"   class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

