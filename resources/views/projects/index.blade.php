<x-app-layout>

<div class="p-6">

    <form method="GET" class="mb-4">
        <input type="text"
            name="search"
            placeholder="Buscar proyectos..."
            class="border p-2 rounded w-1/2">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Buscar
        </button>
    </form>

    <div class="mt-6">
        @foreach($projects as $project)
            <div class="p-4 border rounded mb-2">
                <h2 class="font-bold">{{ $project->nombre }}</h2>
                <p>{{ $project->descripcion }}</p>
            </div>
        @endforeach
    </div>

    {{ $projects->links() }}

</div>

</x-app-layout>