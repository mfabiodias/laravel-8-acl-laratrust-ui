<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaratrustUpdateTables extends Migration
{
    public function up()
    {
        // Add columns on table permissions
        Schema::table('permissions', function (Blueprint $table) {
            $table->enum('type', ['admin', 'registro', 'relatorio'])
                ->default('admin')->after('id');
            $table->string('subtype')->after('type');
            $table->string('route')->after('description');
        });
    }

    public function down()
    {
        // Drop columns on table permissions
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('subtype');
            $table->dropColumn('route');
        });
    }
}
