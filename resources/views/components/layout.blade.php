<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayOn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div>
        <x-header>
            {{ $slot }}
        </x-header>

        <x-navbar>
            {{ $slot }}
        </x-navbar>
    </div>

    <div class="flex justify-between items-start p-4">
        <section class="w-64 px-4 bg-amber-300 w-300px float-left m-r-2">
            <div>Currently Playing</div>
            <div>2025 Gamers Challenge</div>
            <div>Want to Play</div>
            <div>Shelves</div>
        </section>

        <section class="flex-grow px-8 items-center bg-red-500">
            <div>Ths is a Banner</div>
            <div>Updates</div>
        </section>

        <section class="w-64 px-4 bg-blue-600">
            <div>Gaming News</div>
            <div>Recommendations</div>
            <div>Players Choice Awards</div>
            <div>About Us Stuff</div>
        </section>     
    </div>
</body>
</html>