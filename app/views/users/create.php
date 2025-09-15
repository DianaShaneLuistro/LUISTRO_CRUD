<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gradient-to-tr from-gray-900 via-gray-950 to-black min-h-screen flex items-center justify-center font-sans text-gray-200">

  <!-- Container -->
  <div class="bg-white/10 backdrop-blur-2xl p-10 rounded-3xl shadow-2xl w-full max-w-lg border border-yellow-400/30 hover:shadow-yellow-500/30 transition-all duration-500">

    <!-- Header -->
    <div class="flex flex-col items-center mb-8 text-center">
      <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center shadow-lg">
        <i class="fa-solid fa-user-graduate text-3xl text-white"></i>
      </div>
      <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500 mt-4">
        Student Registration
      </h2>
      <p class="text-gray-400 text-sm mt-1">Create your student account below</p>
    </div>

    <!-- Form -->
    <form action="<?=site_url('users/create')?>" method="POST" class="space-y-6">
      
      <!-- First Name -->
      <div class="relative">
        <label class="block text-gray-300 mb-2 font-semibold">First Name</label>
        <div class="flex items-center bg-black/40 border border-gray-700 rounded-xl px-3 py-2 focus-within:ring-2 focus-within:ring-yellow-400 transition">
          <i class="fa-solid fa-user text-yellow-400 mr-3"></i>
          <input type="text" name="first_name" placeholder="Enter your first name" required
                 class="w-full bg-transparent outline-none text-gray-200 placeholder-gray-500">
        </div>
      </div>

      <!-- Last Name -->
      <div class="relative">
        <label class="block text-gray-300 mb-2 font-semibold">Last Name</label>
        <div class="flex items-center bg-black/40 border border-gray-700 rounded-xl px-3 py-2 focus-within:ring-2 focus-within:ring-yellow-400 transition">
          <i class="fa-solid fa-id-card text-yellow-400 mr-3"></i>
          <input type="text" name="last_name" placeholder="Enter your last name" required
                 class="w-full bg-transparent outline-none text-gray-200 placeholder-gray-500">
        </div>
      </div>

      <!-- Email -->
      <div class="relative">
        <label class="block text-gray-300 mb-2 font-semibold">Email Address</label>
        <div class="flex items-center bg-black/40 border border-gray-700 rounded-xl px-3 py-2 focus-within:ring-2 focus-within:ring-yellow-400 transition">
          <i class="fa-solid fa-envelope text-yellow-400 mr-3"></i>
          <input type="email" name="email" placeholder="Enter your email" required
                 class="w-full bg-transparent outline-none text-gray-200 placeholder-gray-500">
        </div>
      </div>

      <!-- Sign Up Button -->
      <button type="submit"
              class="w-full bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-500 hover:via-yellow-600 hover:to-yellow-700 text-black font-bold py-3 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-yellow-500/40">
        <i class="fa-solid fa-user-plus mr-2"></i> Sign Up
      </button>
    </form>
  </div>

</body>
</html>
