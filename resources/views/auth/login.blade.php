<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - KulakanCepat</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body
    class="flex min-h-screen items-center justify-center bg-gradient-to-b from-[#B8182D] to-[#520B14]">
    <div class="flex min-h-screen w-full">
      <div class="hidden w-1/2 flex-col justify-center pl-20 text-white md:flex">
        <div class="mb-2 flex items-center gap-4">
          <img
            src="{{ asset('img/Logo Kulakan/1x/Artboard 1 copy 3.png') }}"
            alt="Logo"
            class="h-40 w-40" />
          <h1 class="text-5xl font-semibold">KulakanCepat</h1>
        </div>
        <p class="text-5xl font-bold leading-tight">
          Solusi mudah untuk
          <br />
          belanja grosir
        </p>
      </div>
      <div class="flex w-full items-center justify-center p-4 sm:p-20 md:w-1/2">
        <form
          method="POST"
          action="{{ route('login') }}"
          class="w-full max-w-md rounded-xl bg-white p-8 text-center shadow-lg">
          @csrf
          <h2 class="mb-6 text-2xl font-semibold text-gray-800">Login</h2>

          @if (session('status'))
            <div
              class="mb-4 border-l-4 border-green-500 bg-green-100 p-4 text-left text-sm text-green-700"
              role="alert">
              {{ session('status') }}
            </div>
          @endif

          @if ($errors->any())
            <div
              class="mb-4 border-l-4 border-red-500 bg-red-100 p-4 text-left text-sm text-red-700"
              role="alert">
              <strong>Oops! Terjadi kesalahan:</strong>
              <ul class="mt-2 list-inside list-disc">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <a
            href="{{ route('auth.google') }}"
            class="mb-3 flex w-full items-center justify-center gap-2 rounded-md border border-gray-300 py-2 font-medium text-gray-800 transition hover:bg-gray-100">
            <img src="https://img.icons8.com/color/16/google-logo.png" alt="Google" />
            Login dengan Google
          </a>

          <div class="my-4 flex items-center text-sm text-gray-500">
            <hr class="flex-grow border-gray-300" />
            <span class="px-2">atau</span>
            <hr class="flex-grow border-gray-300" />
          </div>

          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email"
              value="{{ old('email') }}"
              required
              autofocus
              class="w-full rounded-md border border-red-300 p-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400" />
          </div>
          <div class="mb-4">
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              class="w-full rounded-md border border-red-300 p-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400" />
          </div>
          <button
            type="submit"
            class="w-full rounded-md bg-[#B8182D] py-2 text-base font-medium text-white transition hover:bg-[#520B14]">
            Login
          </button>
          <p class="mt-4 text-sm">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-bold text-red-600 hover:underline">
              Daftar di sini
            </a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
