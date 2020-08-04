
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
                            SubCatgory Add
                        </div>
                        <div class="card-body">
                            @if(session('succes'))
                                <div class="alert alert-success">
                                    {{session('succes')}}
                                </div>
                            @endif
                            <form  action="{{ url('subcatgory/post') }}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label for="Catgory Name">SubCatgory Name</label>
                                    <input type="text" class="form-control" plesholder="Enter Your Catgory Name" name="subcatgory_name" id="subcatgory_name"  >
                                </div>

                                <div class="div">
                                    <label for="Ccatgory_id">Catgory Select</label>
                                        <select name="catgory_id" id="catgory_id" class="form-control">
                                            <option value="">Select one</option>
                                            @foreach ($catgris as $cat)
                                                <option value="{{$cat->id}}">{{$cat->catgorie_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="">
                                    <button type="submit"   class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

