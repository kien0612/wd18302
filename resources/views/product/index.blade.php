@extends('layoutmain')
@section('title')
    Danh sách sản phâme
@endsection
@section('content')
<a href="{{ route('products.create')}}"class="btn btn-primary">Thêm mới</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Image</th>a
        <th scope="col">category_name	</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
        {{-- @dd($listPro) --}}
        @foreach ($listPro as $item)
            
       
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->quantity}}</td>
        <td>
            @if (!isset($item->image))
                Khong co anh
                @else
                <img src="$item->image" alt="">
            @endif
            </td>
        <td>{{$item->listCate->name}}</td>
        <td>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$listPro->links()}}
@endsection
