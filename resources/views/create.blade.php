@extends('home')
@section('title', 'Customer List')
@section('content')


    <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Tên sản phẩm</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Mô tả</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Nội dung</label>
                <input type="text" class="form-control" name="content">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Create">
            <a class="btn btn-primary" onclick="window.history.go(-1); return false;">Cancel</a>

        </form>
    </form>
@endsection