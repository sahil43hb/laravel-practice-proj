@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                   <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-10">{{ __('All Tasks') }}</div>
                        <div class="col"> <a href="/add-task" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add" >Add</a></div>
                    </div>
                   </div>  </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Descroption</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)  
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->status}}</td>
                                <td>  
                                     <ul class="list-inline m-0">
                                         <li class="list-inline-item">
                                    
                                    <a href="" class="btn btn-success btn-sm rounded-0"  >Edit</a>   
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="{{route('delete-task',$task->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                         {{-- <a href="{{route('delete-task',$task->id)}}" class="btn btn-danger btn-sm rounded-0"  >Delete</a> --}}
                                       
                                    </li>
                                </ul>
                            </td>
                              </tr>
@endforeach
                                        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
