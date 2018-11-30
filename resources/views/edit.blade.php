@extends('home')
@section('title', 'Customer List')
@section('content')
    <form method="post" action="{{route('update', $customer->id)}}" enctype="multipart/form-data">
        @csrf
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Tên sản phẩm</label>
                <input type="text" class="form-control" name="title" value="{{$customer->title}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Mô tả</label>
                <input type="text" class="form-control" name="description" value="{{$customer->description}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Nội dung</label>
                <input type="text" class="form-control" name="content" value="{{$customer->content}}">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
            <a class="btn-primary" onclick="window.history.go(-1); return false;">Cancel</a>

        </form>
    </form>
@endsection