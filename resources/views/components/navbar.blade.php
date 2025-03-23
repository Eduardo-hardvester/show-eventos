

<nav class="navbar max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo/Inicio -->
    <a href="#" class="text-xl font-semibold text-gray-800 flex items-center">
        <img height="150px" width="150px" src="{{ asset('images/logo-show.png') }}" alt="Logo">
    </a>

    <!-- Menú en pantallas grandes -->
    <div class="hidden md:flex space-x-8">
        <a href="#Home" class="nav-text gabarito-font">Inicio</a>
        <a href="#" class="nav-text gabarito-font">Nosotros</a>
        <a href="#" class="nav-text gabarito-font">Servicios</a>
        <a href="#" class="nav-text gabarito-font">Contacto</a>
        <a href="#" class="nav-text gabarito-font">Blog</a>
    </div>

    <!-- Botón para abrir el menú en móviles -->
    <div class="md:hidden">
        <button type="button" class="text-gray-800 hover:text-blue-500 focus:outline-none" id="menu-toggle">
            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>

<!-- Menú desplegable en móviles -->
<div class="md:hidden hidden absolute top-full left-0 w-full bg-white shadow-md" id="mobile-menu">
    <div class="flex flex-col space-y-4 py-4 px-6">
        <a href="#Home" class="text-gray-800 hover:text-blue-500">Inicio</a>
        <a href="#" class="text-gray-800 hover:text-blue-500">Nosotros</a>
        <a href="#" class="text-gray-800 hover:text-blue-500">Servicios</a>
        <a href="#" class="text-gray-800 hover:text-blue-500">Contacto</a>
        <a href="#" class="text-gray-800 hover:text-blue-500">Blog</a>
    </div>
</div>

<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        let mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("hidden");
    });
</script>


<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        let mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("hidden");
    });
</script>
