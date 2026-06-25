<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permisos = [
            'ver proyecto',
            'crear proyecto',
            'editar proyecto',
            'eliminar proyecto',
            'gestionar miembros',
            'crear tarea',
            'editar tarea',
            'eliminar tarea',
            'comentar',
            'gestionar usuarios'
        ];
        foreach ($permisos as $p) {
            Permission::firstOrCreate(['name' => $p]);
        }

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $lider = Role::firstOrCreate(['name' => 'lider']);
        $colaborador = Role::firstOrCreate(['name' => 'colaborador']);
        $invitado = Role::firstOrCreate(['name' => 'invitado']);

        $admin->givePermissionTo(Permission::all());

        $lider->givePermissionTo([
            'crear proyecto',
            'editar proyecto',
            'gestionar miembros',
            'crear tarea',
            'editar tarea',
            'comentar'
        ]);

        $colaborador->givePermissionTo([
            'ver proyecto',
            'editar tarea',
            'comentar'
        ]);
        $invitado->givePermissionTo([
            'ver proyecto',
            'comentar'
        ]);
    }
}
