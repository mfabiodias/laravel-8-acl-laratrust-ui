<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            

            # Admin
            ['type' => 'admin', 'subtype' => 'Rota', 'name' => 'route-create', 'display_name' => 'Criar Rotas', 'description' => '', 'route' => 'admin/rotas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Rota', 'name' => 'route-read', 'display_name' => 'Listar Rotas', 'description' => '', 'route' => 'admin/rotas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Rota', 'name' => 'route-update', 'display_name' => 'Atualizar Rotas', 'description' => '', 'route' => 'admin/rotas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Rota', 'name' => 'route-delete', 'display_name' => 'Excluír Rotas', 'description' => '', 'route' => 'admin/rotas', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Operador', 'name' => 'operator-create', 'display_name' => 'Criar Operadoras', 'description' => '', 'route' => 'admin/operadoras', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Operador', 'name' => 'operator-read', 'display_name' => 'Listar Operadoras', 'description' => '', 'route' => 'admin/operadoras', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Operador', 'name' => 'operator-update', 'display_name' => 'Atualizar Operadoras', 'description' => '', 'route' => 'admin/operadoras', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Operador', 'name' => 'operator-delete', 'display_name' => 'Excluír Operadoras', 'description' => '', 'route' => 'admin/operadoras', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Mailing', 'name' => 'mailing-create', 'display_name' => 'Criar Mailing', 'description' => '', 'route' => 'admin/mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Mailing', 'name' => 'mailing-read', 'display_name' => 'Listar Mailing', 'description' => '', 'route' => 'admin/mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Mailing', 'name' => 'mailing-update', 'display_name' => 'Atualizar Mailing', 'description' => '', 'route' => 'admin/mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Mailing', 'name' => 'mailing-delete', 'display_name' => 'Excluír Mailing', 'description' => '', 'route' => 'admin/mailing', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Agente', 'name' => 'agent-create', 'display_name' => 'Criar Agentes', 'description' => '', 'route' => 'admin/agentes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Agente', 'name' => 'agent-read', 'display_name' => 'Listar Agentes', 'description' => '', 'route' => 'admin/agentes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Agente', 'name' => 'agent-update', 'display_name' => 'Atualizar Agentes', 'description' => '', 'route' => 'admin/agentes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Agente', 'name' => 'agent-delete', 'display_name' => 'Excluír Agentes', 'description' => '', 'route' => 'admin/agentes', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Importar Mailing', 'name' => 'import-mailing-create', 'display_name' => 'Criar Importar Mailing', 'description' => '', 'route' => 'admin/importar-mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Importar Mailing', 'name' => 'import-mailing-read', 'display_name' => 'Listar Importar Mailing', 'description' => '', 'route' => 'admin/importar-mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Importar Mailing', 'name' => 'import-mailing-update', 'display_name' => 'Atualizar Importar Mailing', 'description' => '', 'route' => 'admin/importar-mailing', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Importar Mailing', 'name' => 'import-mailing-delete', 'display_name' => 'Excluír Importar Mailing', 'description' => '', 'route' => 'admin/importar-mailing', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Finalizações', 'name' => 'finalization-create', 'display_name' => 'Criar Finalizações', 'description' => '', 'route' => 'admin/finalizacoes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Finalizações', 'name' => 'finalization-read', 'display_name' => 'Listar Finalizações', 'description' => '', 'route' => 'admin/finalizacoes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Finalizações', 'name' => 'finalization-update', 'display_name' => 'Atualizar Finalizações', 'description' => '', 'route' => 'admin/finalizacoes', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Finalizações', 'name' => 'finalization-delete', 'display_name' => 'Excluír Finalizações', 'description' => '', 'route' => 'admin/finalizacoes', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Usuário', 'name' => 'user-create', 'display_name' => 'Criar Usuários', 'description' => '', 'route' => 'admin/usuarios', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Usuário', 'name' => 'user-read', 'display_name' => 'Listar Usuários', 'description' => '', 'route' => 'admin/usuarios', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Usuário', 'name' => 'user-update', 'display_name' => 'Atualizar Usuários', 'description' => '', 'route' => 'admin/usuarios', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Usuário', 'name' => 'user-delete', 'display_name' => 'Excluír Usuários', 'description' => '', 'route' => 'admin/usuarios', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Level', 'name' => 'level-create', 'display_name' => 'Criar Levels', 'description' => '', 'route' => 'admin/levels', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Level', 'name' => 'level-read', 'display_name' => 'Listar Levels', 'description' => '', 'route' => 'admin/levels', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Level', 'name' => 'level-update', 'display_name' => 'Atualizar Levels', 'description' => '', 'route' => 'admin/levels', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Level', 'name' => 'level-delete', 'display_name' => 'Excluír Levels', 'description' => '', 'route' => 'admin/levels', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Filas', 'name' => 'queue-create', 'display_name' => 'Criar Filas', 'description' => '', 'route' => 'admin/filas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Filas', 'name' => 'queue-read', 'display_name' => 'Listar Filas', 'description' => '', 'route' => 'admin/filas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Filas', 'name' => 'queue-update', 'display_name' => 'Atualizar Filas', 'description' => '', 'route' => 'admin/filas', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Filas', 'name' => 'queue-delete', 'display_name' => 'Excluír Filas', 'description' => '', 'route' => 'admin/filas', 'created_at' => now(), 'updated_at' => now()],
            
            ['type' => 'admin', 'subtype' => 'Blacklist', 'name' => 'blacklist-create', 'display_name' => 'Criar Blacklist', 'description' => '', 'route' => 'admin/blacklist', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Blacklist', 'name' => 'blacklist-read', 'display_name' => 'Listar Blacklist', 'description' => '', 'route' => 'admin/blacklist', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Blacklist', 'name' => 'blacklist-update', 'display_name' => 'Atualizar Blacklist', 'description' => '', 'route' => 'admin/blacklist', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'admin', 'subtype' => 'Blacklist', 'name' => 'blacklist-delete', 'display_name' => 'Excluír Blacklist', 'description' => '', 'route' => 'admin/blacklist', 'created_at' => now(), 'updated_at' => now()],
            
            // # Registro
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Número', 'description' => '', 'route' => 'registro/numero', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Tipo Chamada', 'description' => '', 'route' => 'registro/tipo-chamada', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Operadora', 'description' => '', 'route' => 'registro/operadora', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Rotas', 'description' => '', 'route' => 'registro/rotas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Intervalo de Horas', 'description' => '', 'route' => 'registro/intervalo-horas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Abandono', 'description' => '', 'route' => 'registro/abandono', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Produção do Dia', 'description' => '', 'route' => 'registro/producao-dia', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Eventos', 'description' => '', 'route' => 'registro/eventos', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Pausas', 'description' => '', 'route' => 'registro/pausas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'registro', 'name' => '', 'display_name' => 'Login Logout', 'description' => '', 'route' => 'registro/login-logout', 'created_at' => now(), 'updated_at' => now()],
            
            // # Relatório
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Chamadas', 'description' => '', 'route' => 'relatorio/chamadas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Operadoras', 'description' => '', 'route' => 'relatorio/operadoras', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Rotas', 'description' => '', 'route' => 'relatorio/rotas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Filas', 'description' => '', 'route' => 'relatorio/filas', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Agentes', 'description' => '', 'route' => 'relatorio/agentes', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Login Logout', 'description' => '', 'route' => 'relatorio/login-logout', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Log de Eventos', 'description' => '', 'route' => 'relatorio/log-eventos', 'created_at' => now(), 'updated_at' => now()],
            // ['type' => 'relatorio', 'name' => '', 'display_name' => 'Monitorar Filas', 'description' => '', 'route' => 'relatorio/monitorar-filas', 'created_at' => now(), 'updated_at' => now()],




        ]);
    }
}
