
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
                    <div class="card">
                        <div class="card-header">
                            Catgory List
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Sucagory Name</th>
                                    <th scope="col">cagory name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sub_catgories as $scatgory)
                                    <tr>
                                        <th scope="row">{{$sub_catgories->firstItem()+$loop->index}}</th>
                                        <td>{{$scatgory->subcatgory_name}}</td>
                                        <td>{{$scatgory->catgory_id}}</td>
                                        <td>{{$scatgory->created_at == ''?'No Data show' :$scatgory->created_at->format('Y m d').'  -  '.$scatgory->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $sub_catgories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
