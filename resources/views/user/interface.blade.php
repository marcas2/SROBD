<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SROBD - CompuConta Software</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <!-- Logo - Puedes reemplazar con el logo real -->
                <div class="flex items-center justify-center w-10 h-10 bg-white rounded-lg">
                    <i class="fas fa-database text-blue-600 text-xl"></i>
                </div>
                <h1 class="text-2xl font-bold">SROBD</h1>
                <span class="text-sm bg-blue-700 px-2 py-1 rounded">by CompuConta</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-blue-200 transition"><i class="fas fa-home mr-1"></i> Inicio</a>
                <a href="#" class="hover:text-blue-200 transition"><i class="fas fa-cog mr-1"></i> Configuración</a>
                <a href="#" class="hover:text-blue-200 transition"><i class="fas fa-question-circle mr-1"></i> Ayuda</a>
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>Usuario</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Tarjeta del Formulario -->
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Encabezado de la tarjeta -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-server text-3xl"></i>
                    <div>
                        <h2 class="text-2xl font-bold">Selección de Entidad y Servicio</h2>
                        <p class="text-blue-100">Selecciona las opciones para continuar</p>
                    </div>
                </div>
            </div>
            
            <!-- Cuerpo del formulario -->
            <div class="p-6">
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Campo Entidad -->
                    <div class="space-y-2">
                        <label for="entidad" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-building mr-2 text-blue-500"></i>Entidad:
                        </label>
                        <div class="relative">
                            <select name="entidad" id="entidad" 
                                    class="block w-full px-4 py-3 pr-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white shadow-sm transition">
                                @foreach ($entidades as $entidad)
                                    <option value="{{ $entidad->id }}">
                                        {{ $entidad->nombre }} - {{ $entidad->ip }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Campo Servicio -->
                    <div class="space-y-2">
                        <label for="servicio" class="block text-sm font-medium text-gray-700">
                            <i class="fas fa-cogs mr-2 text-blue-500"></i>Servicio:
                        </label>
                        <div class="relative">
                            <select name="servicio" id="servicio" 
                                    class="block w-full px-4 py-3 pr-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white shadow-sm transition">
                                @foreach ($servicios as $servicio)
                                    <option value="{{ $servicio->id }}">
                                        {{ $servicio->nombre }} - {{ $servicio->descripcion }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botón de acción -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex items-center justify-center space-x-2">
                            <i class="fas fa-arrow-right"></i>
                            <span>Continuar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Información adicional -->
        <div class="max-w-2xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-blue-500">
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <i class="fas fa-shield-alt text-blue-600"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Conexión segura</h3>
                </div>
                <p class="mt-2 text-sm text-gray-600">Todas las conexiones están encriptadas para proteger tus datos.</p>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-green-500">
                <div class="flex items-center space-x-3">
                    <div class="bg-green-100 p-2 rounded-full">
                        <i class="fas fa-bolt text-green-600"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Rápido acceso</h3>
                </div>
                <p class="mt-2 text-sm text-gray-600">Conecta con tus servicios en segundos con nuestra plataforma.</p>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-purple-500">
                <div class="flex items-center space-x-3">
                    <div class="bg-purple-100 p-2 rounded-full">
                        <i class="fas fa-headset text-purple-600"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Soporte 24/7</h3>
                </div>
                <p class="mt-2 text-sm text-gray-600">Nuestro equipo está disponible para ayudarte en cualquier momento.</p>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-100 border-t mt-12">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <i class="fas fa-database text-blue-600"></i>
                    <span class="font-medium">SROBD v2.0</span>
                </div>
                <div class="text-sm text-gray-600">
                    &copy; 2023 CompuConta Software. Todos los derechos reservados.
                </div>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-blue-600 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-500 hover:text-blue-400 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-500 hover:text-red-600 transition"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>