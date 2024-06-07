<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/c3770e3fac.js" crossorigin="anonymous">
  </script>
  @vite('resources/css/app.css')
</head>

<body class="bg-white">
  <header class="bg-custom-blue2 w-full h-36 pt-12">
    <div
      class="w-[960px] h-36 bg-custom-blue1 mx-auto rounded-t-lg flex items-center rounded">
      <img src="{{ asset('img/cic.png') }}" alt="Logo" class="h-32">
      <p class="text-3xl text-white font-poppins font-bold">
        Colegio Inmaculada Concepción
      </p>
    </div>
  </header>
  <nav>
    <div
      class="flex items-center justify-center bg-custom-blue4 w-[960px] h-9 mx-auto mt-1">
      <a href="#"
        class="text-white text-lg font-poppins px-5 py-1 rounded-md hover:bg-white hover:text-black duration-500 ease-in-out hover:scale-110">Inicio</a>
      <a href="#"
        class="text-white text-lg font-poppins px-5 py-1 rounded-md hover:bg-white hover:text-black duration-500 ease-in-out hover:scale-110">Sobre
        Nosotros</a>
      <a href="#"
        class="text-white text-lg font-poppins px-5 py-1 rounded-md hover:bg-white hover:text-black duration-500 ease-in-out hover:scale-110">Cursos</a>
      <a href="#"
        class="text-white text-lg font-poppins px-5 py-1 rounded-md hover:bg-white hover:text-black duration-500 ease-in-out hover:scale-110">Galería</a>
      <a href="#"
        class="text-white text-lg font-poppins px-5 py-1 rounded-md hover:bg-white hover:text-black duration-500 ease-in-out hover:scale-110">Contactos</a>
    </div>
  </nav>
  <section class="my-3 flex justify-center">
    <img src="{{ asset('img/emilie.png') }}" alt=""
      class="w-[960px] rounded">
  </section>
  <section class="mt-12">
    <div
      class="flex justify-between items-center mx-auto mt-1 w-[960px] text-center space-x-4">
      <li class="list-none">
        <figure>
          <img src="/img/en.jpg" alt="" class="rounded-full border-2 border-custom-blue1 ease-in-out hover:scale-110 duration-500">
          <figcaption class="text-custom-blue1 mt-5 font-poppins"><b>Los mejores
              didácticos</b>
          </figcaption>
        </figure>
      </li>
      <li class="list-none">
        <figure>
          <img src="/img/sol.jpg" alt="" class="rounded-full border-2 border-custom-blue1 ease-in-out hover:scale-110 duration-500">
          <figcaption class="text-custom-blue1 mt-5 font-poppins"><b>Somos una
              familia</b>
          </figcaption>
        </figure>
      </li>
      <li class="list-none">
        <figure>
          <img src="/img/fe.jpg" alt="" class="rounded-full border-2 border-custom-blue1 ease-in-out hover:scale-110 duration-500">
          <figcaption class="text-custom-blue1 mt-5 font-poppins"><b>Una institución
              cristiana</b>
          </figcaption>
        </figure>
      </li>
    </div>
  </section>
  <footer
    class="bg-custom-blue1 shadow-md rounded px-8 pt-6 pb-8 w-full h-[550px] mt-12">
    <section class="flex justify-center gap-20 items-center mx-auto mt-12">
      <div class="flex flex-col gap-5">
        <h2 class="text-white font-poppins">Ponte en contacto!</h2>
        <h1 class="text-4xl text-white font-poppins font-bold">¿Te gustaria saber
          <br> cómo ubicarnos?</h1>
        <p class="text-white font-poppins">Aqui te damos la información y tú
          eliges cómo <br> deseas comunicarte con nosotros</p>
        <ul class="flex flex-col gap-5">
          <li class="flex items-center gap-2 text-white font-poppins"><i
              class="fa-solid fa-phone"></i>
            <p>1234 567 890</p>
          </li>
          <li class="flex items-center gap-2 text-white font-poppins"><i
              class="fa-solid fa-envelope"></i>
            <p>soporteinmaculada@ciccde.edu.py</p>
          </li>
          <li class="flex items-center gap-2 text-white font-poppins"><i
              class="fa-solid fa-location-dot"></i>
            <p>Calle 29 de Septiembre, Cd. del Este 100151</p>
          </li>
        </ul>
      </div>
      <div>
        <iframe class="rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57608.90840143201!2d-54.68759087832029!3d-25.519824399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68ffb8596108d%3A0x52e1f45c5b57ed00!2sColegio%20Inmaculada%20Concepci%C3%B3n!5e0!3m2!1ses!2spy!4v1717634640457!5m2!1ses!2spy"
          width="320" height="280" class="border-0" allowfullscreen=""
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <div class="mx-auto mt-12 border-t border-custom-white h-[5px] w-[960px]"></div>
    <section class="mx-auto mt-8 flex justify-around text-custom-white w-[960px]">
      <div class="text-center">
        <p><b>All rights reserved | Magikn 2024©</b></p>
      </div>
      <div>
        <ul class="flex gap-10">
          <li><i class="fa-brands fa-facebook"></i></li>
          <li><i class="fa-brands fa-instagram"></i></li>
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-youtube"></a></i></li>
        </ul>
      </div>
    </section>
    
  </footer>
</body>

</html>
