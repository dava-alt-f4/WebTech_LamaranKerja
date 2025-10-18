<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="flex justify-between py-3 px-5 bg-slate-600 items-center text-white">
            <div class="flex text-l items-center gap-10">
                <h1 class="text-2xl font-semibold">Job Finder</h1>
                <a href="/" class="hover:underline">Home</a>
                <a href="/jobs" class="hover:underline">Jobs</a>
            </div>
            
        </nav>
    </header>
    <main class="p-5">
        <h1 class="text-3xl font-bold mb-5">User Profile</h1>
        <div class="flex flex-col items-center border border-gray-300 rounded-md p-4">
            <img src="{{ asset('img/default.jpg') }}" alt="default avatar" class="w-24 h-24 rounded-full mb-4">
            <h2 class="text-xl font-semibold mb-2">John Doe</h2>
            <p class="text-gray-600 mb-1">Email: john.doe@example.com</p>
        </div>
        <hr class="mt-5">
        <div class="mt-5">
            <h2 class="text-2xl font-semibold mb-3">Applied Jobs</h2>
            <ul class="space-y-4">
                <li class="flex justify-between border border-gray-300 rounded-md p-4">
                    <div class="ml-4">
                        <a href="jobs/#"><h3 class="text-lg font-semibold hover:underline">Software Engineer</h3></a>
                        <p class="text-gray-600">Company Name</p>
                        <p class="mt-2">Application Status: Under Review</p>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Withdraw Application</button>
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Edit Message</button>
                    </div>
                </li>
                <li class="flex justify-between border border-gray-300 rounded-md p-4">
                    <div class="ml-4">
                    <a href="jobs/#"><h3 class="text-lg font-semibold hover:underline">Web Developer</h3></a>
                    <p class="text-gray-600">Company Name</p>
                    <p class="mt-2">Application Status: Interview Scheduled</p>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Withdraw Application</button>
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Edit Message</button>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>