<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-full bg-black text-white/50">
<div class="w-full max-w-4xl mx-auto p-8 bg-zinc-900 rounded-md text-zinc-100">
    <h2 class="text-2xl font-semibold mb-6">Contact Us</h2>
<form action="/contact" method="POST" novalidate>
    <!-- a secure random token (e.g., synchronizer token or challenge token) that is used to prevent CSRF attacks -->
    @csrf

    @if ($errors->any())
  <!-- handle any errors -->
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold">Holy smokes!</strong>
      <span class="block sm:inline">Something seriously bad happened.</span>
      <ul>
         <!-- iterate and list any errors -->
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>

    @endif


<div class="mb-4">
      <label for="name" class="block text-sm font-bold mb-2">Your Name</label>
      <input type="text" id="name" name="name" required
        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black "
        value="{{ old('name') }}"
      >
    </div>
    <div class="mb-4">
      <label for="email" class="block text-sm font-bold mb-2">Your Email</label>
      <input type="email" id="email" name="email"  required
        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black"
        value="{{ old('email') }}"
       >
    </div>
    <div class="mb-6">
      <label for="message" class="block text-sm font-bold mb-2">Your Message</label>
      <textarea id="message" name="message" rows="4" 
        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 text-black"
        >{{old('message')}}</textarea>
    </div>
    <button type="submit"
    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo">
      Send Message
    </button>
</form>
</div>
</body>
</html>