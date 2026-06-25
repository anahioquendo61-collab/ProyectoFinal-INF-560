<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-3xl font-bold">
                        Bienvenido al Sistema de Gestión de Proyectos INF560
                    </h1>

                    <p class="mt-2 text-gray-600">
                        Administra proyectos, tareas y colaboración en un entorno seguro.
                    </p>

                    <div class="mt-6">
                        <a href="{{ route('projects.index') }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded">
                            Ir a Proyectos
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>