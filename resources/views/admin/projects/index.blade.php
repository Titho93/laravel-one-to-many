@extends('layouts.admin')

@section('content')
    <div class="index w-100 p-5">
        <h1><i class="fa-solid fa-diagram-project"></i> Projects List</h1>
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->date }}</td>
                        <td>{{ $project->type?->name }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}"><i
                                    class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a>
                            <a class="btn btn-dark" href="{{ route('admin.projects.create', $project) }}"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->id) }}"
                                method="POST" onsubmit="return confirm ('Are you sure DELETE this Project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
