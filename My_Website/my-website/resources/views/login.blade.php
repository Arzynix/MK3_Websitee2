<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-blue-500 flex justify-center items-center h-screen">
  <div class="bg-gray-900 rounded-lg shadow-lg p-8 w-full max-w-md">
    <h1 class="text-white text-2xl font-bold mb-6">Login</h1>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-gray-400 font-bold mb-2">Username:</label>
        <input type="text" id="username" name="username" class="bg-gray-800 text-white rounded px-3 py-2 w-full" placeholder="Enter your username">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-400 font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" class="bg-gray-800 text-white rounded px-3 py-2 w-full" placeholder="Enter your password">
      </div>
      <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded w-full">Login</button>
    </form>
  </div>
</body>
</html>