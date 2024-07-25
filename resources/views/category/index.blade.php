@extends('layoutmain')
@section('title')
    Danh sách sản phâme
@endsection
@section('content')
<a href="{{ route('category.create')}}"class="btn btn-primary">Thêm mới</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
        {{-- @dd($listPro) --}}
        @foreach ($listCate as $item)
            
       
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
@endsection

