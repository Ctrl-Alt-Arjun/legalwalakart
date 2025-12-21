<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-[260px] bg-white border-r border-gray-200">
            @include('dashboard.partials.sidebar')
        </aside>

        <!-- Main Column -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="h-[72px] bg-white border-b border-gray-200">
                @include('dashboard.partials.topbar')
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-8 bg-gray-50">
                @yield('content')
            </main>

        </div>
    </div>
</body>
</html>