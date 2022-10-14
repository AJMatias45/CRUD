
@extends('books.layout')
  
  @section('content')
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Update Book</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
          </div>
      </div>
  </div>
     
  @if ($errors->any())
      <div class="alert alert-danger">
          There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
     
  <form action="{{ route('books.update', $book->id) }}" method="POST">
      @csrf
      @method('PUT')
    
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Title:</strong>
                  <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="Title">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Author:</strong>
                  <input type="text" name="author" value="{{ $book->author }}" class="form-control" placeholder="Author">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Description:</strong>
                  <textarea class="form-control" style="height:150px" name="description" value="{{ $book->description }}" placeholder="Description"></textarea>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Year:</strong>
                  <input type="text" name="year" value="{{ $book->year }}" class="form-control" placeholder="Year">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
     
  </form>
  @endsection