<x-app-layout>

<div class="p-6">

    <form method="GET" action="{{ route('projects.index') }}">
        <input type="text" name="search"
               placeholder="Buscar proyectos..."
               value="{{ $query ?? '' }}"
               class="border p-2 rounded">

        <button class="bg-blue-600 text-white px-3 py-2 rounded">
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