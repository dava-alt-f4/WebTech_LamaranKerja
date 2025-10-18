<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
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
            <a href="/login" class="bg-blue-900 text-white py-1 px-2 rounded">Login</a>
        </nav>
    </header>
    <main class="p-5">
        <h1 class="text-3xl font-bold mb-5">Job Listings</h1>
        <ul class="space-y-4">
            <li class="border border-gray-300 rounded-md p-4">
                <h2 class="text-xl font-semibold">Job Title 1</h2>
                <p class="text-gray-600">Company Name - Category</p>
                <p class="mt-2">Job description goes here...</p>
                <a href="#" class="text-blue-600 hover:underline">Apply Now</a>
            </li>
            <li class="border border-gray-300 rounded-md p-4">
                <h2 class="text-xl font-semibold">Job Title 2</h2>
                <p class="text-gray-600">Company Name - Category</p>
                <p class="mt-2">Job description goes here...</p>
                <a href="#" class="text-blue-600 hover:underline">Apply Now</a>
            </li>
        </ul>
    </main>
</body>
</html>