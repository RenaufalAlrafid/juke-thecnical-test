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
        <h1 class="font-bold ">Add Data Employee</h1>
        <form action="{{ route('employee.store') }}"
            method="post">
            @csrf
            <div class="flex gap-3 flex-col">
                <div class="flex flex-col gap-1">
                    <label for="first_name">First Name</label>
                    <input type="text"
                        name="first_name"
                        class="form-control"
                        placeholder="First Name">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="last_name">Last Name</label>
                    <input type="text"
                        name="last_name"
                        class="form-control"
                        placeholder="Last Name">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="position">Position</label>
                    <select name="position"
                        id="position">
                        <option value="Manager">Manager</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="ktp">KTP</label>
                    <input type="text"
                        name="ktp"
                        class="form-control"
                        placeholder="KTP">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="date">date of birth</label>
                    <input type="date"
                        name="ktp"
                        class="form-control"
                        placeholder="KTP">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email">email</label>
                    <input type="email"
                        name="email"
                        class="form-control"
                        placeholder="KTP">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="province">province</label>
                    <select name="province"
                        id="">
                        {{-- province in indonesia with value same as province --}}
                        <option value="Aceh">Aceh</option>
                        <option value="Bali">Bali</option>
                        <option value="Bangka Belitung">Bangka Belitung</option>
                        <option value="Banten">Banten</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="city">city</label>
                    <select name="city"
                        id="city">
                        {{-- city in indonesia with value same as city --}}
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="zip_code">zip code</label>
                    <input type="number"
                        name="zip_code"
                        class="form-control"
                        placeholder="Zip Code">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="address">address</label>
                    <textarea name="address"
                        id="address"
                        cols="30"
                        rows="10"
                        class="form-control"
                        placeholder="Address"></textarea>
                </div>
                <div>
                    <label for="Bank">Bank</label>
                    <input type="number"
                        name="bank"
                        class="form-control"
                        placeholder="Photo">
                </div>
                <button type="submit"
                    class="btn btn-primary btn-sm">Save</button>
            </div>

    </div>
</body>

</html>