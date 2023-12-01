@extends('layouts.admin')

@section('content')
    <div class="container p-4">
        <button class="btn btn-dark"><a class="nav-link" href="{{ route('admin.projects.index') }}"><i
                    class="fa-solid fa-rotate-left"></i></a></button>
        <h1 class="d-inline-block p-4"><i class="fa-solid fa-pen-to-square"></i> Edit Projects</h1>

        <div class="row">
            <div class="col-8">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value='{{ $project->name }}'>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input id="image" class="form-control" name="image" type="file">
                        <img src="{{ asset('storage/' . $project->image) }}" />
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="dateformat" class="form-control" id="date" name="date"
                            value='{{ $project->date }}'>
                    </div>
                    <div class="form-floating mb-5">
                        <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 200px"
                            value='{{ $project->description }}'>{{ $project->name }}</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>

                    <button type="submit" class="btn btn-dark">Send</button>

                </form>
            </div>
        </div>

    </div>
@endsection
