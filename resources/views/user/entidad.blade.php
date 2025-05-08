<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entidades | SROBD</title>
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
                        },
                        success: {
                            100: '#dcfce7',
                            500: '#22c55e',
                            700: '#15803d'
                        },
                        warning: {
                            100: '#fef9c3',
                            500: '#eab308',
                            700: '#a16207'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'glow': '0 0 15px rgba(14, 165, 233, 0.3)',
                        'glow-success': '0 0 15px rgba(34, 197, 94, 0.3)',
                        'glow-warning': '0 0 15px rgba(234, 179, 8, 0.3)'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .truncate-multiline {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .animate-pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(14, 165, 233, 0.7);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(14, 165, 233, 0);
            }
        }
        .version-badge {
            transition: all 0.2s ease;
        }
        .version-badge:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar Mejorada -->
    <nav class="bg-gradient-to-r from-primary-800 to-primary-700 text-white shadow-xl">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- Logo Animado -->
                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-xl shadow-md animate-pulse-glow">
                        <i class="fas fa-database text-primary-600 text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold tracking-tight">SROBD</h1>
                        <span class="text-xs bg-primary-900 px-2 py-0.5 rounded-full font-medium shadow-inner">AF-FO-20</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="flex items-center space-x-1.5 hover:text-primary-200 transition-colors duration-200 group">
                        <div class="p-1.5 rounded-lg group-hover:bg-white/10 transition-colors duration-200">
                            <i class="fas fa-home text-sm"></i>
                        </div>
                        <span>Inicio</span>
                    </a>
                    <a href="/entidades" class="flex items-center space-x-1.5 text-white font-medium transition-colors duration-200 group">
                        <div class="p-1.5 rounded-lg bg-white/20 group-hover:bg-white/30 transition-colors duration-200">
                            <i class="fas fa-building text-sm"></i>
                        </div>
                        <span>Entidades</span>
                    </a>
                    <a href="#" class="flex items-center space-x-1.5 hover:text-primary-200 transition-colors duration-200 group">
                        <div class="p-1.5 rounded-lg group-hover:bg-white/10 transition-colors duration-200">
                            <i class="fas fa-question-circle text-sm"></i>
                        </div>
                        <span>Ayuda</span>
                    </a>
                    <div class="flex items-center space-x-2 ml-4 group cursor-pointer">
                        <div class="w-9 h-9 rounded-full bg-primary-600 flex items-center justify-center shadow-inner group-hover:shadow-glow transition-all duration-300">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <span class="font-medium">Usuario</span>
                    </div>
                </div>
                <button class="md:hidden text-xl p-2 rounded-lg hover:bg-white/10 transition-colors duration-200">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container mx-auto px-4 py-8">
        <!-- Tarjeta Contenedora Mejorada -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 card-hover">
            <!-- Encabezado con Gradiente -->
            <div class="bg-gradient-to-r from-primary-600 to-primary-700 px-8 py-6 flex items-center justify-between relative overflow-hidden">
                <div class="flex items-center space-x-5 z-10">
                    <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm shadow-lg">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-tight">Listado de Entidades</h2>
                        <p class="text-primary-100 opacity-90 mt-1"></p>
                    </div>
                </div>
                
               
                
                <!-- Efecto de fondo decorativo -->
                <div class="absolute -right-10 -top-10 w-32 h-32 rounded-full bg-white/10"></div>
                <div class="absolute -right-5 -bottom-5 w-20 h-20 rounded-full bg-white/5"></div>
            </div>

           

            <!-- Contenido de la Tabla Mejorada -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-signature text-primary-500 mr-3"></i>
                                    Nombre / IP
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-align-left text-primary-500 mr-3"></i>
                                    Descripción
                                </div>
                            </th>
                            
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-link text-primary-500 mr-3"></i>
                                    URL de Conexión
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-code-branch text-primary-500 mr-3"></i>
                                    Versión
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($entidades as $entidad)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                            <td class="px-8 py-5 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-12 w-12 bg-primary-100 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-glow transition-all duration-300">
                                        <i class="fas fa-database text-primary-600 text-xl"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-gray-900">{{ $entidad->nombre }}</div>
                                        <div class="text-xs text-gray-500 mt-1 flex items-center">
                                            <i class="fas fa-network-wired mr-1"></i>
                                            {{ $entidad->ip }}
                                            @if($entidad->port)
                                            <span class="ml-2">
                                                <i class="fas fa-plug mr-1"></i>
                                                {{ $entidad->port }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <div class="text-sm text-gray-700 max-w-md truncate-multiline" title="{{ $entidad->descripcion }}">
                                    {{ $entidad->descripcion }}
                                </div>
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap">
                                @if($entidad->url)
                                <div class="flex items-center">
                                    <a href="{{ $entidad->url }}" target="_blank" class="text-primary-600 hover:text-primary-700 text-sm font-medium truncate max-w-xs flex items-center">
                                        <span class="truncate">{{ Str::limit($entidad->url, 25) }}</span>
                                    </a>
                                    <div class="flex ml-2 space-x-1 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <a href="{{ $entidad->url }}" target="_blank"
                                           class="p-1.5 text-gray-400 hover:text-white hover:bg-primary-600 rounded-full transition-colors duration-200"
                                           title="Abrir enlace">
                                            <i class="fas fa-external-link-alt text-xs"></i>
                                        </a>
                                        <button onclick="copyToClipboard('{{ $entidad->url }}')"
                                           class="p-1.5 text-gray-400 hover:text-white hover:bg-primary-600 rounded-full transition-colors duration-200"
                                           title="Copiar URL">
                                            <i class="fas fa-copy text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                                    <i class="fas fa-times-circle mr-1"></i>
                                    No disponible
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap">
                                @if($entidad->version)
                                    @if(str_contains(strtolower($entidad->version), 'cc3'))
                                    <span class="version-badge px-3 py-1 rounded-full text-xs font-semibold bg-success-100 text-success-700 shadow-sm hover:shadow-glow-success transition-all">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        {{ $entidad->version }}
                                    </span>
                                    @elseif(str_contains(strtolower($entidad->version), 'cc2'))
                                    <span class="version-badge px-3 py-1 rounded-full text-xs font-semibold bg-warning-100 text-warning-700 shadow-sm hover:shadow-glow-warning transition-all">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $entidad->version }}
                                    </span>
                                    @else
                                    <span class="version-badge px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 shadow-sm">
                                        {{ $entidad->version }}
                                    </span>
                                    @endif
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                                    <i class="fas fa-question-circle mr-1"></i>
                                    Desconocida
                                </span>
                                @endif
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pie de Tabla / Paginación Mejorada -->
            <div class="bg-gray-50 px-8 py-4 border-t border-gray-200 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-sm text-gray-500 flex items-center">
                    <span class="mr-2">Mostrando</span>
                    <select class="appearance-none bg-white border border-gray-300 rounded-md px-3 py-1 shadow-sm focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500 text-sm">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                    <span class="ml-2">entidades de <span class="font-medium">{{ count($entidades) }}</span> totales</span>
                </div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                    <a href="#" class="relative inline-flex items-center px-3 py-2 rounded-l-lg border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200">
                        <span class="sr-only">Anterior</span>
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" aria-current="page" class="z-10 bg-primary-50 border-primary-500 text-primary-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        1
                    </a>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        2
                    </a>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        3
                    </a>
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                        ...
                    </span>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        8
                    </a>
                    <a href="#" class="relative inline-flex items-center px-3 py-2 rounded-r-lg border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200">
                        <span class="sr-only">Siguiente</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Notificación flotante -->
    <div id="notification" class="fixed bottom-4 right-4 hidden">
        <div class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg flex items-center space-x-2">
            <i class="fas fa-check-circle"></i>
            <span>¡Copiado al portapapeles!</span>
        </div>
    </div>

    <script>
        // Función mejorada para copiar al portapapeles
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                showNotification('¡Copiado al portapeles!', 'success');
            }).catch(err => {
                showNotification('Error al copiar', 'error');
                console.error('Error al copiar: ', err);
            });
        }
        
        // Mostrar notificación
        function showNotification(message, type) {
            const notification = document.getElementById('notification');
            notification.innerHTML = `
                <div class="bg-${type === 'success' ? 'green' : 'red'}-500 text-white px-4 py-2 rounded-lg shadow-lg flex items-center space-x-2">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                    <span>${message}</span>
                </div>
            `;
            
            notification.classList.remove('hidden');
            notification.classList.add('animate__animated', 'animate__fadeInUp');
            
            setTimeout(() => {
                notification.classList.add('animate__fadeOutDown');
                setTimeout(() => {
                    notification.classList.add('hidden');
                    notification.classList.remove('animate__fadeInUp', 'animate__fadeOutDown');
                }, 500);
            }, 3000);
        }
        
        // Efecto hover en las filas de la tabla
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.querySelectorAll('.group-hover\\:opacity-100').forEach(el => {
                    el.classList.remove('opacity-0');
                });
            });
            
            row.addEventListener('mouseleave', () => {
                row.querySelectorAll('.group-hover\\:opacity-100').forEach(el => {
                    el.classList.add('opacity-0');
                });
            });
        });
    </script>
    
    <!-- Animaciones CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</body>
</html>