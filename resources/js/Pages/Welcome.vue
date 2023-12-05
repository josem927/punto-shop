<template>
  <div>
    <Head title="Rainbow" />
    <div class="mb-1 text-center relative"></div>
    <nav class="bg-gray-800 p-5 text-white flex mt-0 fixed top-0 left-0 w-full">
      <div class="flex items-center">
        <button class="menu-button" @click="toggleMenu" style="margin-top: 10px;">
          <div class="menu-line"></div>
          <div class="menu-line"></div>
          <div class="menu-line"></div>
        </button>
        <div class="ml-4 mb-4">
          <img src="/images/Rainboww.png" class="h-20 w-20 rounded-full mt-2 " />
          <Link v-if="$page.props.auth.user" :href="route('navbar')" class="hover:text-gray-300">
            Dashboard
          </Link>
        </div>
        <Link v-if="$page.props.auth.user" :href="route('navbar')" class="ml-4 hover:text-gray-300">
          Dashboard
        </Link>
      </div>

      <div class="flex items-center">
        <div class="relative text-gray-600 focus-within:text-gray-400 rounded-md">
          <span class="absolute inset-y-0 left-0 flex items-center pl-2"></span>
        </div>
        <template v-if="!$page.props.auth.user">
          <div class="flex mx-4 space-x-2 items-center mb-6" style="margin-top: 20px;">
            <div class="border-l border-solid border-gray-300 h-6 ml-2"></div>

            <!-- Mujeres -->
            <div class="relative inline-block group">
              <button class="btn hover:bg-blue-500 nav-link">Mujeres</button>
              <ul class="hidden absolute bg-white text-gray-800 pt-1 group-hover:block">
                <li><a href="/Blusas" class="block px-4 py-2 text-sm">Blusas</a></li>
                <li><a href="/Faldas" class="block px-4 py-2 text-sm">Faldas</a></li>
                <li><a href="/Vestidos" class="block px-4 py-2 text-sm">Vestidos</a></li>
                <li><a href="/Accesorios" class="block px-4 py-2 text-sm">Accesorios</a></li>
              </ul>
            </div>

            <div class="border-l border-solid border-gray-300 h-6 mx-2"></div>

            <!-- Hombres  -->
            <div class="relative inline-block group">
              <button class="btn hover:bg-blue-500 nav-link">Hombres</button>
              <ul class="hidden absolute bg-white text-gray-800 pt-1 group-hover:block">
                <li><a href="/Playeras" class="block px-4 py-2 text-sm">Playeras</a></li>
                <li><a href="/Pantalones" class="block px-4 py-2 text-sm">Pantalones</a></li>
                <li><a href="/Camisas" class="block px-4 py-2 text-sm">Camisas</a></li>
                <li><a href="/Accesorios" class="block px-4 py-2 text-sm">Accesorios</a></li>
              </ul>
            </div>

            <div class="border-l border-solid border-gray-300 h-6 mx-4"></div>

            <!-- Niños  -->
            <div class="relative inline-block group">
              <button class="btn hover:bg-blue-500 nav-link">Niños</button>
              <ul class="hidden absolute bg-white text-gray-800 pt-1 group-hover:block">
                <li><a href="/Playeras" class="block px-4 py-2 text-sm">Playeras</a></li>
                <li><a href="/Conjuntos" class="block px-4 py-2 text-sm">Conjuntos</a></li>
                <li><a href="/Zapatos" class="block px-4 py-2 text-sm">Zapatos</a></li>
                <li><a href="/Accesorios" class="block px-4 py-2 text-sm">Accesorios</a></li>
              </ul>
            </div>
          </div>

          <div style="position: relative;">
            <input type="search" name="q" class="py-2 pl-16 pr-4 text-white bg-white focus:outline-none focus:bg-white focus:text-gray-900 rounded-full w-96 mx-auto" placeholder="Buscar..." autocomplete="off" style="margin: 0 auto; z-index: 2;">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); z-index: 1;">
              <circle cx="11" cy="11" r="8" />
              <path d="M21 21l-4.35-4.35" />
            </svg>
          </div>
        </template>
      </div>
    </nav>
  </div>
      <div class="flex-1 p-6 ml-64 mt-16">
        <div class="flex items-center justify-center flex-col mb-8">
          <div class="max-w-full md:max-w-2xl w-full">
          
          </div>
        </div>
      </div>
  
      <div class="flex flex-wrap justify-center items-center">
        <div class="mb-8 text-center">
          <img class="w-30 h-50 mx-auto mb-4" src="/images/Eco.png" alt="Eco-Friendly" />
          <Card
            title="Eco-Friendly"
            content="Nuestros productos son 100% amigables con el medio ambiente, porque reciclamos ropa y utilizamos tintas en base a (cuenteo)."
          />
        </div>
        <div class="mb-8 text-center">
          <img class="w-30 h-50 mx-auto mb-4" src="/images/Pagos.png" alt="Formas de pago" />
          <Card
            title="Formas de pago"
            content="Puedes pagar con tu tarjeta de débito/crédito en Webpay o mediante transferencia a nuestra cuenta RUT."
          />
        </div>
      </div>
      <div class="social-bar">
        <!-- Iconos de redes sociales aquí -->
      </div>
  
  </template>
  
  <script setup lang="ts">
  import { Head, Link } from '@inertiajs/vue3';
  import Card from '@/components/card.vue';
  
  defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
  }>();
  
  function toggleMenu() {
    const button = document.querySelector('.menu-button');
    button?.classList.toggle('change');
  
    const existingSidebar = document.querySelector('.social-bar');
    if (existingSidebar) {
      existingSidebar.remove();
    } else {
      const socialIcons = [
        { name: 'facebook', url: 'https://www.facebook.com/tucuenta' },
        { name: 'twitter', url: 'https://twitter.com/tucuenta' },
        { name: 'instagram', url: 'https://www.instagram.com/tucuenta' },
        // Agrega más iconos según sea necesario
      ];
  
      const sidebar = document.createElement('div');
      sidebar.classList.add(
        'social-bar',
        'fixed',
        'right-0',
        'top-0',
        'h-screen',
        'bg-gray-800',
        'p-4',
        'flex',
        'flex-col'
      );
  
      socialIcons.forEach(icon => {
        const link = document.createElement('a');
        link.href = icon.url;
        link.target = '_blank';
        link.rel = 'noopener noreferrer';
  
        const iconElement = document.createElement('i');
        iconElement.classList.add('text-white', 'text-2xl', 'mb-4', 'cursor-pointer', 'hover:text-gray-500');
        iconElement.classList.add('fab', `fa-${icon.name}`);
  
        link.appendChild(iconElement);
        sidebar.appendChild(link);
      });
  
      document.body.appendChild(sidebar);
    }
  }
  </script>
  
  <style scoped>
  .bg-gray-800 {
    z-index: 2;
    background-color: #D58585;
    width: 200%;
  }
  .menu-button {
    display: inline-block;
    cursor: pointer;
    padding: 7px;
    background-color: #D58585;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
  }
  .menu-line {
    width: 30px;
    height: 4px;
    background-color: #240000;
    margin: 6px 0;
    transition: 0.4s;
  }
  
  .change .menu-line:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
  }
  
  .change .menu-line:nth-child(2) {
    opacity: 0;
  }
  
  .change .menu-line:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
  }
  
  .social-bar {
    right: 1;
    left: auto;
  }
  
  .social-bar a {
    margin-bottom: 15px; /* Ajusta el espaciado entre los iconos según sea necesario */
  }
  </style>
  