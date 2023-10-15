<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SchemaState;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
     Schema::create('cursos', function(Blueprint $table){
    
        $table->id();
        $table->string('name');
        $table->text('descripton');
        $table->string('categoria');
        $table->timestamps();//created_at updated_at
     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('cursos');
    }
};
