<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* DADOS DA EMPRESA
            ================================================== */
            $table->string('name'); ## NOME
            $table->string('domai')->unique(); ## DOMÍNIO
            $table->string('image'); ## IMAGEM
            $table->string('bd_databse')->unique(); ## BANCO DE DADOS
            $table->string('bd_hostname'); ## NOME DO HOST
            $table->string('bd_username'); ## USUÁRIO
            $table->string('bd_password'); ## SENHA

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
