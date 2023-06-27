@extends('admin.layouts.app')

@section('body')
    <div class="card m-2 p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <head>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
             <body>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $category->name }}</td>
                          {{-- <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->image)
                            <img  src="{{ asset('') }}uploads/categories/{{$category->image}}" alt="image" height="65px">

                            @else
                            No Image

                            @endif
                        </td>--}}
                        <td
                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ Storage::url($category->image) }}"
                            class="w-16 h-16 rounded">
                    </td>
                    <td>{{ $category->description }}</td>

                       {{--   <td>{{ $category->blogs_count }}</td>
                        <td>{{ $category->is_active == 'true' ? 'Active' : 'Inactive' }}</td>--}}
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            <a href="{{ route('categories.show', $category->id) }}"><button type="submit"
                                    class="btn btn-success mb-2"> Show</button></a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
@endsection
