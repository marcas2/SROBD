<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SROBD - CompuConta Software</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50 antialiased">
    <!-- Navbar -->
    <nav class="bg-primary-700 text-white shadow-xl">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- Logo -->
                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-xl shadow-md">
                        <i class="fas fa-database text-primary-600 text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold tracking-tight">SROBD</h1>
                        <span class="text-xs bg-primary-800 px-2 py-0.5 rounded-full font-medium">AF-FO-20</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="flex items-center space-x-1.5 hover:text-primary-200 transition-colors duration-200">
                        <i class="fas fa-home text-sm"></i>
                        <span>Inicio</span>
                    </a>
                    <a href="/entidades" class="flex items-center space-x-1.5 text-primary-100 font-medium transition-colors duration-200">
                        <i class="fas fa-building text-sm"></i>
                        <span>Entidades</span>
                    </a>
                    <a href="#" class="flex items-center space-x-1.5 hover:text-primary-200 transition-colors duration-200">
                        <i class="fas fa-question-circle text-sm"></i>
                        <span>Ayuda</span>
                    </a>
                    <div class="flex items-center space-x-2 ml-4">
                        <div class="w-9 h-9 rounded-full bg-primary-600 flex items-center justify-center shadow-inner">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <span class="font-medium">Usuario</span>
                    </div>
                </div>
                <button class="md:hidden text-xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Tarjeta del Formulario -->
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
            <!-- Encabezado de la tarjeta -->
            <div class="bg-gradient-to-r from-primary-600 to-primary-700 px-8 py-6 text-white">
                <div class="flex items-center space-x-5">
                    <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                        <i class="fas fa-server text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight">Selección de Entidad y Servicio</h2>
                        <p class="text-primary-100 opacity-90 mt-1">Selecciona las opciones para continuar</p>
                    </div>
                </div>
            </div>
            
            <!-- Cuerpo del formulario -->
            <div class="p-8">
            <form action="/maria" method="POST" class="space-y-6">
    @csrf
    
    <!-- Campo Entidad -->
    <div class="space-y-1.5">
        <label for="entidad" class="block text-sm font-medium text-gray-700 flex items-center">
            <i class="fas fa-building text-primary-600 mr-2 text-base"></i>
            <span>Entidad</span>
        </label>
        <div class="relative">
            <select name="entidad" id="entidad"
                    class="w-full pl-4 pr-10 py-3.5 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white appearance-none transition-all duration-200">
                <option value="" disabled selected class="text-gray-400">Selecciona una entidad</option>
                @foreach ($entidades as $entidad)
                    <option value="{{ $entidad->id }}"
                            data-nombre="{{ $entidad->nombre }}"
                            data-ip="{{ $entidad->ip }}"
                            data-port="{{ $entidad->port }}"
                            data-db="{{ $entidad->db }}"
                            data-version="{{ $entidad->version }}"
                            data-url="{{ $entidad->url }}"
                            data-descripcion="{{ $entidad->descripcion }}"
                            class="py-2">
                        {{ $entidad->nombre }}
                    </option>
                @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
            </div>
        </div>
    </div>

    <!-- Campo Servicio -->
    <div class="space-y-1.5">
        <label for="servicio" class="block text-sm font-medium text-gray-700 flex items-center">
            <i class="fas fa-cogs text-primary-600 mr-2 text-base"></i>
            <span>Servicio</span>
        </label>
        <div class="relative">
            <select name="servicio" id="servicio"
                    class="w-full pl-4 pr-10 py-3.5 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white appearance-none transition-all duration-200">
                <option value="" disabled selected class="text-gray-400">Selecciona un servicio</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id }}" class="py-2">
                        {{ $servicio->descripcion }}
                    </option>
                @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
            </div>
        </div>
    </div>
    
    <!-- Switch de Ofuscación -->
    <div class="space-y-1.5 pt-2">
       
    <div class="space-y-1.5 pt-2">
    <div class="relative flex items-center justify-between">
        <label for="ofuscacion" class="block text-sm font-medium text-gray-700 flex items-center">
            <i class="fas fa-eye-slash text-primary-600 mr-2 text-base"></i>
            <span>Ofuscación</span>
        </label>
        <div class="flex items-center">
            <input type="checkbox" name="ofuscacion" id="ofuscacion" checked class="hidden">
            <button type="button" id="ofuscacion-toggle" class="w-12 h-6 flex items-center bg-primary-600 rounded-full p-1 duration-300 ease-in-out">
                <span class="toggle-dot bg-white w-4 h-4 rounded-full shadow-md transform translate-x-6 duration-300 ease-in-out"></span>
            </button>
            <span class="ml-3 text-sm font-medium text-gray-700">Activado</span>
        </div>
    </div>
</div>
    </div>
    
    <div id="aprobacion-form" class="hidden space-y-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
        <div class="space-y-1.5">
            <label for="nombre_solicitante" class="block text-sm font-medium text-gray-700">
                Nombre del solicitante
            </label>
            <input type="text" name="nombre_solicitante" id="nombre_solicitante" 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200">
        </div>
        
        <div class="space-y-1.5">
            <label for="num_solicitud" class="block text-sm font-medium text-gray-700">
                Número de solicitud
            </label>
            <input type="number" name="num_solicitud" id="num_solicitud" 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200">
        </div>
        
        <div class="space-y-1.5">
            <label for="nombre_aprueba" class="block text-sm font-medium text-gray-700">
                Nombre de quien aprueba
            </label>
            <input type="text" name="nombre_aprueba" id="nombre_aprueba" 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200">
        </div>
        
        <div class="space-y-1.5">
            <label for="justificacion" class="block text-sm font-medium text-gray-700">
                Justificación
            </label>
            <textarea name="justificacion" id="justificacion" rows="3"
                      class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"></textarea>
        </div>
    </div>
    
    <!-- Botón de acción -->
    <div class="pt-2">
        <button type="submit" 
                class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3.5 px-4 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center space-x-3">
            <i class="fas fa-arrow-right text-sm"></i>
            <span>Continuar</span>
        </button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ofuscacionToggle = document.getElementById('ofuscacion-toggle');
        const ofuscacionCheckbox = document.getElementById('ofuscacion');
        const aprobacionForm = document.getElementById('aprobacion-form');
        const toggleDot = document.querySelector('.toggle-dot');
        
        ofuscacionToggle.addEventListener('click', function() {
            const isChecked = ofuscacionCheckbox.checked;
            ofuscacionCheckbox.checked = !isChecked;
            
            if (isChecked) {
                toggleDot.style.transform = 'translateX(0)';
                ofuscacionToggle.classList.remove('bg-primary-600');
                ofuscacionToggle.classList.add('bg-gray-300');
                aprobacionForm.classList.remove('hidden');
            } else {
                toggleDot.style.transform = 'translateX(6)';
                ofuscacionToggle.classList.remove('bg-gray-300');
                ofuscacionToggle.classList.add('bg-primary-600');
                aprobacionForm.classList.add('hidden');
            }
        });
    });
</script>

<style>
    .toggle-dot {
        transition: all 0.3s ease-in-out;
    }
    #ofuscacion-toggle {
        transition: background-color 0.3s ease-in-out;
    }
</style>
            </div>
        </div>
        
       <!-- Info Entidad -->
       <div id="info-entidad" 
     class="hidden transform transition-all duration-300 ease-out opacity-0 translate-y-4">
    <div class="max-w-2xl mx-auto mt-8 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 card-hover">
        <!-- Cuerpo de la información -->
        <div class="p-7 grid grid-cols-1 md:grid-cols-2 gap-5">
        
            <!-- Columna 1 -->
            <div class="space-y-5">
                <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
                    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
                        <i class="fas fa-signature text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Nombre</h3>
                        <p id="ent-nombre" class="text-gray-600 mt-1.5 font-medium">-</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
                    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
                        <i class="fas fa-network-wired text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">IP</h3>
                        <p id="ent-ip" class="text-gray-600 mt-1.5 font-medium">-</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
                    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
                        <i class="fas fa-plug text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Puerto</h3>
                        <p id="ent-port" class="text-gray-600 mt-1.5 font-medium">-</p>
                    </div>
                </div>
            </div>
            
            <!-- Columna 2 -->
            <div class="space-y-5">
                <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
                    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
                        <i class="fas fa-database text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Descripción</h3>
                        <p id="ent-descripcion" class="text-gray-600 mt-1.5 font-medium">-</p>
                    </div>
                </div>
                
                
                <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
                    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
                        <i class="fas fa-link text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Base de Datos</h3>
                        <p id="ent-db" class="text-gray-600 mt-1.5 font-medium">-</p>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-blue-500 hover:bg-white transition-colors duration-200">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2.5 rounded-lg text-blue-600">
                            <i class="fas fa-link text-lg"></i>
                        </div>
                        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">URL de Conexión</h3>
                    </div>
                    <a href="#" target="_blank" rel="noopener noreferrer" id="ent-url-link"
                       class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center gap-2 hidden">
                        <i class="fas fa-external-link-alt text-sm"></i>
                        <span class="text-sm font-medium">Abrir</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Pie de tarjeta con acciones -->
        <div class="bg-gray-50 px-7 py-4 flex flex-col sm:flex-row justify-between items-center border-t border-gray-200 space-y-3 sm:space-y-0">
        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl shadow-sm border-l-4 border-primary-500 hover:bg-white transition-colors duration-200">
    <div class="bg-primary-100 p-2.5 rounded-lg text-primary-600">
        <i class="fas fa-code-branch text-lg"></i>
    </div>
    <div class="w-full">
        <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wider">Versión</h3>
        <div id="ent-version" class="mt-1.5">
            <span class="version-badge px-2 py-1 rounded-md text-xs font-semibold">-</span>
        </div>
    </div>
</div>    
        <div class="flex items-center space-x-2 text-sm text-gray-500">
                <i class="fas fa-info-circle text-primary-500"></i>
                <span>Última actualización: <span id="ent-updated" class="font-medium text-gray-700">-</span></span>
            </div>
            <div class="flex space-x-3">
                <button onclick="copyEntityData()" class="px-4 py-2 bg-primary-100 text-primary-600 rounded-lg hover:bg-primary-200 transition-colors duration-200 flex items-center space-x-2">
                    <i class="fas fa-copy text-sm"></i>
                    <span class="text-sm font-medium">Copiar datos</span>
                </button>
            </div>
        </div>
    </div>
</div>
        
        <!-- Tarjetas de características -->
        <div class="max-w-6xl mx-auto mt-10 grid grid-cols-1 md:grid-cols-3 gap-7 px-4">
            <!-- Tarjeta 1 - Conexión segura -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-5 flex items-center">
                    <div class="bg-white/20 p-3 rounded-xl backdrop-blur-sm">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <h3 class="ml-4 text-white font-semibold text-lg tracking-tight">Conexión Segura</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-5 leading-relaxed">Protegemos tus datos con encriptación AES-256 y protocolos de seguridad avanzados para garantizar la máxima confidencialidad.</p>
                    <div class="flex items-center text-sm text-blue-600 font-medium space-x-2">
                        <i class="fas fa-lock"></i>
                        <span>SSL/TLS 1.3</span>
                        <span class="text-gray-400">•</span>
                        <i class="fas fa-certificate"></i>
                        <span>Certificado EV</span>
                    </div>
                </div>
            </div>
            
            <!-- Tarjeta 2 - Rápido acceso -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-5 flex items-center">
                    <div class="bg-white/20 p-3 rounded-xl backdrop-blur-sm">
                        <i class="fas fa-bolt text-white text-xl"></i>
                    </div>
                    <h3 class="ml-4 text-white font-semibold text-lg tracking-tight">Rendimiento Óptimo</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-5 leading-relaxed">Infraestructura de alto rendimiento con tiempos de respuesta <200ms y disponibilidad garantizada del 99.99%.</p>
                    <div class="flex items-center text-sm text-green-600 font-medium space-x-2">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>200ms respuesta</span>
                        <span class="text-gray-400">•</span>
                        <i class="fas fa-check-circle"></i>
                        <span>99.99% uptime</span>
                    </div>
                </div>
            </div>
            
            <!-- Tarjeta 3 - Soporte 24/7 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 px-6 py-5 flex items-center">
                    <div class="bg-white/20 p-3 rounded-xl backdrop-blur-sm">
                        <i class="fas fa-headset text-white text-xl"></i>
                    </div>
                    <h3 class="ml-4 text-white font-semibold text-lg tracking-tight">Soporte Premium</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-5 leading-relaxed">Nuestros expertos están disponibles 24/7 con tiempo de respuesta promedio de 15 minutos para resolver cualquier incidencia.</p>
                    <div class="flex items-center text-sm text-purple-600 font-medium space-x-2">
                        <i class="fas fa-clock"></i>
                        <span>24/7/365</span>
                        <span class="text-gray-400">•</span>
                        <i class="fas fa-headphones"></i>
                        <span>Soporte prioritario</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 mt-16">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <i class="fas fa-database text-primary-600 text-xl"></i>
                    <div>
                        <span class="font-bold text-gray-800">SROBD v2.0</span>
                        <span class="block text-xs text-gray-500">by CompuConta Software</span>
                    </div>
                </div>
                <div class="text-sm text-gray-600 text-center md:text-left mb-4 md:mb-0">
                    &copy; 2023 CompuConta Software. Todos los derechos reservados.
                </div>
                <div class="flex space-x-5">
                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors duration-200 text-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-200 text-lg">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-600 transition-colors duration-200 text-lg">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-800 transition-colors duration-200 text-lg">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mostrar información de entidad
        document.getElementById('entidad').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value) {
                fillEntityData({
                    nombre: selectedOption.dataset.nombre,
                    ip: selectedOption.dataset.ip,
                    port: selectedOption.dataset.port,
                    db: selectedOption.dataset.db,
                    url: selectedOption.dataset.url,
                    version: selectedOption.dataset.version,
                    descripcion: selectedOption.dataset.descripcion
                });
            }
        });
        
        function fillEntityData(data) {
    // Actualizar campos de texto
    document.getElementById('ent-nombre').textContent = data.nombre || 'No disponible';
    document.getElementById('ent-ip').textContent = data.ip || 'No disponible';
    document.getElementById('ent-port').textContent = data.port || 'No disponible';
    document.getElementById('ent-db').textContent = data.db || 'No disponible';
    document.getElementById('ent-descripcion').textContent = data.descripcion || 'No disponible';

    // Mostrar u ocultar el enlace de URL
    const urlLink = document.getElementById('ent-url-link');
    if (data.url) {
        urlLink.href = data.url;
        urlLink.classList.remove('hidden');
    } else {
        urlLink.classList.add('hidden');
    }

    // Manejar la versión y sus estilos
    const versionElement = document.getElementById('ent-version');
    const versionBadge = versionElement.querySelector('.version-badge');

    if (versionBadge) {
        // Limpiar clases previas de color
        versionBadge.classList.remove(
            'bg-amber-100', 'text-amber-800',
            'bg-green-100', 'text-green-800',
            'bg-gray-100', 'text-gray-800'
        );

        if (data.version) {
            versionBadge.textContent = data.version;

            const versionLower = data.version.toLowerCase();
            if (versionLower.includes('cc2')) {
                versionBadge.classList.add('bg-amber-100', 'text-amber-800');
            } else if (versionLower.includes('cc3')) {
                versionBadge.classList.add('bg-green-100', 'text-green-800');
            } else {
                versionBadge.classList.add('bg-gray-100', 'text-gray-800');
            }
        } else {
            versionBadge.textContent = 'No disponible';
            versionBadge.classList.add('bg-gray-100', 'text-gray-800');
        }
    }

    // Fecha de actualización
    document.getElementById('ent-updated').textContent = new Date().toLocaleString('es-ES', {
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric',
        hour: '2-digit', 
        minute: '2-digit'
    });

    showEntityInfo();
}


function showEntityInfo() {
    const element = document.getElementById('info-entidad');
    element.classList.remove('hidden');
    setTimeout(() => {
        element.classList.remove('opacity-0');
        element.classList.remove('translate-y-4');
    }, 20);
}

function copyEntityData() {
    // Implementación de la función para copiar datos
    const data = {
        nombre: document.getElementById('ent-nombre').textContent,
        ip: document.getElementById('ent-ip').textContent,
        port: document.getElementById('ent-port').textContent,
        db: document.getElementById('ent-db').textContent,
        descripcion: document.getElementById('ent-descripcion').textContent,
        version: document.getElementById('ent-version').textContent,
        url: document.getElementById('ent-url-link').href
    };
    
    const textToCopy = `Nombre: ${data.nombre}
IP: ${data.ip}
Puerto: ${data.port}
Base de Datos: ${data.db}
Descripción: ${data.descripcion}
Versión: ${data.version}
URL: ${data.url}`;
    
    navigator.clipboard.writeText(textToCopy).then(() => {
        // Mostrar notificación de éxito
        alert('Datos copiados al portapapeles');
    }).catch(err => {
        console.error('Error al copiar: ', err);
    });
}
    </script>
</body>
</html>