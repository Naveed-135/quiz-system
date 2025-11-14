<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md max-w-sm w-full">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Admin Login</h2>
    <form action="{{ url('/admin-login') }}" method="post" class="space-y-4">
        @csrf
        <div>
            <label for="" class="block font-medium text-gray-600 mb-1">Admin Name</label>
            <input type="text" placeholder="Enter your name" class="w-full px-3 py-2 border border-gray-300 rounded-md " name="name">
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
          </div>
    
        <div>
            <label for="" class="block font-medium text-gray-600 mb-1">Admin Password</label>
            <input type="password" placeholder="Enter your password" class="w-full px-3 py-2 border border-gray-300 rounded-md " name="password">
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md">Login</button>
    </form>
  </div>

</body>
</html>