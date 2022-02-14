@extends('layouts.app')

@section('main')
    <div class="w-10/12 mx-auto">
        <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" class="w-full my-2" placeholder="Enter Title">
            <input type="text" name="slug" class="w-full my-2" placeholder="Enter Slug">
            <input type="file" name="photopath" class="w-full my-2">
            <textarea name="description" placeholder="Enter description"></textarea>
            <input type="submit" value="Create" class="px-4 bg-red-500 hover:bg-red-800 text-white rounded-full py-1 cursor-pointer">

        </form>
    </div>
@endsection