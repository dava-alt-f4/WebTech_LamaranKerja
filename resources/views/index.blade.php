<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamaran Kerja</title>
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
    <main class="h-auto">
        <div>
            <h1 class="text-xl pl-10 py-4 bg-gray-300">Welcome to Job Finder</h1>
        </div>
        <div class="flex flex-col items-center justify-center h-[80vh] gap-5">
            <h1 class="text-4xl font-bold">Need To Pay Your Bills?</h1>
            <p class="text-center text-lg px-20">Explore thousands of job opportunities from top companies. Start your journey towards a fulfilling career today!</p>
            <a href="/jobs" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Browse Jobs</a>
    </main>
</body>

</html>