
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
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header">
                            Catgory List
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">createdd</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($catgories as $catgory)
                                    <tr>
                                        <th scope="row">{{$catgories->firstItem()+$loop->index}}</th>
                                        <td>{{$catgory->catgorie_name}}</td>
                                        <td>{{$catgory->created_at == ''?'No Data show' :$catgory->created_at->format('Y m d').'  -  '.$catgory->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $catgories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
