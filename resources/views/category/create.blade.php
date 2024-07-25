@extends('layoutmain')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <form action="{{route('category.store')}}" method="POST">
        
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"
                   class="form-control"
                   id="exampleFormControlInput1"
                   name="name"
                   placeholder="Bánh Gạo">
                   @error('name')
                        <div class=" alert alert-danger">{{$message}}</div>
                   @enderror
        </div>
       
        <button type="submit" class="btn btn-success">Gửi</button>
        
    </form>
@endsection