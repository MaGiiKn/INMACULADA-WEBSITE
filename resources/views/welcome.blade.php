<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <script src="https://kit.fontawesome.com/c3770e3fac.js" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-blue-200">
  <header class="bg-blue-800 w-full h-36 pt-12">
    <div
      class="w-[960px] h-36 bg-blue-900 mx-auto rounded-t-lg flex items-center">
      <img src="{{ asset('img/cic.png') }}" alt="Logo" class="w- h-32">
      <p class="text-2xl text-white font-sans">
        Colegio Inmaculada Concepción
      </p>
    </div>
  </header>
  <nav>
    <div
      class="flex items-center justify-center bg-blue-600 w-[960px] h-9 mx-auto mt-1">
      <a href="#"
        class="text-white text-lg px-5 py-1 rounded-md hover:bg-white hover:text-black transition-all duration-1100">Inicio</a>
      <a href="#"
        class="text-white text-lg px-5 py-1 rounded-md hover:bg-white hover:text-black transition-all duration-1100">Sobre
        Nosotros</a>
      <a href="#"
        class="text-white text-lg px-5 py-1 rounded-md hover:bg-white hover:text-black transition-all duration-1100">Cursos</a>
      <a href="#"
        class="text-white text-lg px-5 py-1 rounded-md hover:bg-white hover:text-black transition-all duration-1100">Galería</a>
      <a href="#"
        class="text-white text-lg px-5 py-1 rounded-md hover:bg-white hover:text-black transition-all duration-1100">Contactos</a>
    </div>
  </nav>
  <section class="my-3 flex justify-center">
    <img src="{{ asset('img/emilie.png') }}" alt="" class="w-[960px]">
  </section>
  <section class="mt-12">
    <div
      class="flex justify-between items-center mx-auto mt-1 w-[960px] text-center space-x-4">
      <li class="list-none">
        <figure>
          <img src="/img/en.jpg" alt="" class="rounded-full">
          <figcaption class="text-blue-900 mt-5"><b>Los mejores didacticos</b>
          </figcaption>
        </figure>
      </li>
      <li class="list-none">
        <figure>
          <img src="/img/sol.jpg" alt="" class="rounded-full">
          <figcaption class="text-blue-900 mt-5"><b>Somos una familia</b>
          </figcaption>
        </figure>
      </li>
      <li class="list-none">
        <figure>
          <img src="/img/fe.jpg" alt="" class="rounded-full">
          <figcaption class="text-blue-900 mt-5"><b>Una institución cristiana</b>
          </figcaption>
        </figure>
      </li>
    </div>
  </section>
  <section class="mx-auto w-[960px] h-[450px] mt-12">
    <div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57608.90840143201!2d-54.68759087832029!3d-25.519824399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68ffb8596108d%3A0x52e1f45c5b57ed00!2sColegio%20Inmaculada%20Concepci%C3%B3n!5e0!3m2!1ses!2spy!4v1717634640457!5m2!1ses!2spy"
        width="960" height="450" class="border-0" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="flex items-center justify-around mx-auto mt-12 w-[960px]">
    <div class="max-w-lg bg-blue-900 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-2"
          for="email">
          Correo Electrónico
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="email" type="email"
          placeholder="Ingrese su correo electrónico">
      </div>
      <div class="mb-6">
        <label class="block text-white text-sm font-bold mb-2"
          for="message">
          Mensaje
        </label>
        <textarea
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="message" placeholder="Escriba su mensaje"></textarea>
      </div>
      <div class="flex items-center justify-between">
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="button">
          Enviar
        </button>
      </div>
    </div>

    <div>
      <ul class="list-none space-y-11 text-4xl">
        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
      </ul>
    </div>
  </section>
  <footer class="flex items-center justify-around mx-auto mt-8 mb-8 w-[960px] text-blue-900">
    <h1>
      <b>All rights reserved | Magikn 2024©</b>
    </h1>
  </footer>
</body>

</html>
