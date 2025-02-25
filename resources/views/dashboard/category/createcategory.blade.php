@extends('dashboard.layouts.main')
@section('content')
<div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create Category</h4>

          <form class="forms-sample" action="{{route('category')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="title">Category</label>
              <input type="text" class="form-control" name="title" placeholder="Category">
            </div>
            <div class="form-group">
              {{-- <label for="slug">Slug </label> --}}
              <input type="text" class="form-control" name="slug" readonly hidden>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>

  @endsection
