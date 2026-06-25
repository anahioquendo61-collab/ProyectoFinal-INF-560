<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // usuario admin base
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678'),
        ]);
        // proyecto base
        $project = Project::create([
            'nombre' => 'Proyecto Demo INF560',
            'descripcion' => 'Proyecto inicial del sistema',
            'estado' => 'activo',
            'owner_id' => $admin->id
        ]);

        // asignar usuario al proyecto
        $project->users()->attach($admin->id, [
            'project_role' => 'admin'
        ]);

        // tarea base
        Task::create([
            'titulo' => 'Primera tarea',
            'descripcion' => 'Tarea inicial del sistema',
            'estado' => 'pendiente',
            'prioridad' => 'alta',
            'project_id' => $project->id,
            'assignee_id' => $admin->id
        ]);
    }
}
