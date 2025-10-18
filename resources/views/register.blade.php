<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="flex flex-col h-screen items-center justify-center bg-gray-100">
        <h1 class="text-4xl font-bold text-center mt-10">Register Page</h1>
        <form action="" class="flex flex-col gap-5 mt-10 items-center border border-gray-300 rounded-md p-10 bg-white shadow-lg">
            <input type="text" placeholder="Username" class="border border-gray-300 rounded px-3 py-2 ">
            <input type="email" placeholder="Email" class="border border-gray-300 rounded px-3 py-2">
            <input type="password" placeholder="Password" class="border border-gray-300 rounded px-3 py-2">
            <input type="password" placeholder="Confirm password" class="border border-gray-300 rounded px-3 py-2">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Register</button>
        </form>
        <p class="mt-5">Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a></p>
    </main>
</body>
</html>