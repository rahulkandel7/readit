@extends('layouts.app')

@section('main')
    <div class="h-full w-full">
        <div class="w-10/12 mx-auto">
            <div class="mt-[15%]">
                <h1 class="text-white text-4xl font-bold py-8">Welcome to My Blog</h1>
                <p class="text-gray-200">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, obcaecati perferendis. Soluta harum vitae excepturi totam dicta eveniet iste repellat. Quibusdam, esse. Quod aliquam itaque tenetur? Distinctio pariatur facilis reprehenderit?
                </p>
                <div class="flex justify-center my-8">
                    <a class="px-8 py-1 bg-indigo-500 hover:bg-indigo-800 rounded-md shadow-lg text-white">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-10/12 mx-auto">
        @for($i=0;$i<11;$i++)
            <div class="grid grid-cols-2 gap-x-8 group my-5">
                <div class="bg-red-400">
                    Image
                </div>
                <div>
                    <p class="text-lg font-semibold text-slate-300">
                        Category Name 
                    </p>
                    <h1 class="text-4xl font-bold text-slate-50 pt-8 group-hover:text-slate-300">
                        Title Name
                    </h1>
                    <div class="group-hover:flex hidden my-5">
                        <div class="h-16 mx-3 w-16 bg-lime-300">

                        </div>
                        <div class="h-16 mx-3 w-16 bg-pink-300">

                        </div>
                        <div class="h-16 mx-3 w-16 bg-yellow-300">

                        </div>
                    </div>
                    <p class="text-sm text-slate-400 my-5">
                        2022/10/12
                    </p>
                </div>
            </div>
        @endfor
    </div>
@endsection
