<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class=" px-4 py-3 bg-white shadow-md ">
        <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold text-gray-800 hover:text-blue-500 cursor-pointer">Quiz System</div>
        <div class="flex gap-4 items-center">
            <a href="" class="text-gray-600 hover:text-blue-500">category</a>
            <a href="" class="text-gray-600 hover:text-blue-500">Quiz</a>
            <a href="" class="text-gray-600 hover:text-blue-500">Welcome {{ $name }}</a>
            <a href="" class="text-gray-600 hover:text-blue-500">Logout</a>
        </div>
        </div>
    </nav>
</body>

</html>