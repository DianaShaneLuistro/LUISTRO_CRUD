<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gradient-to-tr from-slate-900 via-gray-950 to-black font-sans text-gray-100">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 shadow-xl sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-extrabold tracking-wide text-white drop-shadow-lg flex items-center gap-2">
        <i class="fa-solid fa-users"></i> User Directory
      </h1>
      <a href="<?=site_url('users/create')?>"
         class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-semibold px-5 py-2 rounded-xl shadow-md transition-all duration-300 hover:scale-105">
        <i class="fa-solid fa-user-plus"></i> Add User
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto mt-10 px-4">
    <div class="bg-white/10 backdrop-blur-2xl shadow-2xl rounded-2xl p-8 border border-white/20">

      <!-- Table -->
      <div class="overflow-hidden rounded-2xl border border-gray-700/50 shadow-lg">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 text-white text-sm uppercase tracking-wider">
              <th class="py-4 px-6 text-left">ID</th>
              <th class="py-4 px-6 text-left">Last Name</th>
              <th class="py-4 px-6 text-left">First Name</th>
              <th class="py-4 px-6 text-left">Email</th>
              <th class="py-4 px-6 text-center">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-800/60">
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="hover:bg-gradient-to-r hover:from-yellow-900/30 hover:via-yellow-800/20 hover:to-yellow-700/20 transition duration-200">
                <td class="py-4 px-6 font-semibold"><?=($user['id']);?></td>
                <td class="py-4 px-6"><?=($user['last_name']);?></td>
                <td class="py-4 px-6"><?=($user['first_name']);?></td>
                <td class="py-4 px-6">
                  <span class="bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-md">
                    <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-4 px-6 flex justify-center gap-3">
                  <!-- Update Button -->
                  <a href="<?=site_url('users/update/'.$user['id']);?>"
                     class="bg-yellow-400/90 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2 transition duration-200">
                    <i class="fa-solid fa-pen-to-square"></i> Update
                  </a>
                  <!-- Delete Button -->
                  <a href="<?=site_url('users/delete/'.$user['id']);?>"
                     class="bg-rose-600 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2 transition duration-200">
                     <i class="fa-solid fa-trash"></i> Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</body>
</html>
