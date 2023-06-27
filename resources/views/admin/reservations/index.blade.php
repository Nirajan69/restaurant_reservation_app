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
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Table</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            {{-- <body>
                @foreach ($category as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->image)
                            <img  src="{{ asset('') }}uploads/categories/{{$category->image}}" alt="image" height="65px">

                            @else
                            No Image

                            @endif
                        </td>
                        <td>{{ $category->blogs_count }}</td>
                        <td>{{ $category->is_active == 'true' ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            <a href="{{ route('admin.categories.show', $category->id) }}"><button type="submit"
                                    class="btn btn-success mb-2"> Show</button></a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </body> --}}
        </table>
    </div>
@endsection
