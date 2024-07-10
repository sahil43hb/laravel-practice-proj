@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="post" action="/save-task">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required >
                         </div>
            <div class="mb-3">
              <label for="desc" class="form-label">Description</label>
              <input type="text" class="form-control" id="desc" name="description" required>
                         </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="status" required>
                    <option selected>Select Status</option>
                    <option value="pending">Pending</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                  </select>
                         </div>
                       <button type="submit" class="btn btn-primary" >Submit</button>
          </form>
    </div>
</div>
@endsection
