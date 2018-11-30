@extends('home')
@section('title', 'Customer List')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key=>$customer)
            <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$customer->title}}</td>
            <td>{{$customer->description}}</td>
            <td>{{$customer->content}}</td>
                <td><img src="{{'image/' . $customer->image}}" style="width:150px; height: 150px"></td>
            <td><a href="{{route('edit', $customer->id)}}">Sửa</a></td>
            <td><a href="{{route('destroy', $customer->id)}}" onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}" class="btn btn-primary">Thêm mới</a>
@endsection