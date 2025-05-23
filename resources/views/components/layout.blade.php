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
        <header>
            <a href="" class="bg-red text-center">
                <p>Big Games of Summer. Discover gamers' most anticipated new titles</p>
            </a>
                
        </header>
        <nav class="flex justify-between items-center bg-gray-800 text-white p-4 border-b border-white/50">
            {{-- <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8 mr-2">
                <span class="text-xl font-bold">PlayOn</span> --}}
            <div class="flex items-center">
                <a href="">
                    <img src="" alt="Logo" class="h-8 w-8 mr-2">
                </a>
            </div>

            <div class="flex space-x-4 px-4 font-bold">
                <a href="" class="text-white hover:text-gray-400">Home</a>
                <a href="" class="text-white hover:text-gray-400">My Games</a>
                <a href="" class="text-white hover:text-gray-400">Browse</a>
                <a href="" class="text-white hover:text-gray-400">Community</a>
            </div>

            <div>
                <form action="">
                    <input type="text" placeholder="Search games here..." class="rounded bg-white/5 border-white/10 px-1 py-1">
                </form>
            </div>

            <div class="flex space-x-4 px-4">
                <a href="" aria-label="Notifications" role="button" title="Notifications">
                    <i class="fa-solid fa-bell"></i>
                </a>

                <a href="" aria-label="Groups and Discussions" role="button" title="Group Discussions">
                    <i class="fa-solid fa-comments"></i>
                </a>

                <a href="" aria-label="Messages" role="button" title="Messages">
                    <i class="fa-solid fa-envelope"></i>
                </a>

                <a href="" aria-label="Friends" role="button" title="Friends">
                    <i class="fa-solid fa-users"></i>
                </a>

                <a href="" aria-label="My Profile" role="button" title="My Profile">
                    <i class="fa-solid fa-circle-user"></i>
                </a>

            </div>
        </nav>
    </div>
</body>
</html>