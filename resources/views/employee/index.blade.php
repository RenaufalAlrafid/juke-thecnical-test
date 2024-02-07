<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white min-h-screen p-8 text-black">
    <div class="flex flex-col gap-3">
        <h1 class="font-bold ">Data Employee</h1>
        <a href="{{ route('employee.create') }}"
            class="btn btn-primary btn-sm max-w-28">Add Data</a>

        {{-- form filter --}}

        <form action="{{ route('employee.index') }}"
            method="get">
            <div class="flex gap-3">
                <input type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search by name ">
                <input type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search by ktp ">
                <input type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search by position ">

                <button type="submit"
                    class="btn btn-primary btn-sm">Search</button>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>position</th>
                            <th>ktp</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->first_name . ' '. $employee->last_name }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->ktp }}</td>
                            <td class="flex gap-3">
                                <a href="{{ route('employee.edit', $employee->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('employee.destroy', $employee->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>

</html>