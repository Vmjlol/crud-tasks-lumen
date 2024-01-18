<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StatusEnum;


class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descricao');
            $table->dateTime('data_vencimento');
            $table->enum('status', [StatusEnum::PENDING, StatusEnum::COMPLETED])->default(StatusEnum::PENDING);
            $table->timestamps();

        });

        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('id_tarefa');
            $table->foreign('id_tarefa')->references('id')->on('tasks');
            $table->longText('descricao');
            $table->enum('status', [StatusEnum::PENDING, StatusEnum::COMPLETED])->default(StatusEnum::PENDING);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('subtasks');
        $table->dropForeign(['id']);
        $table->dropColumn('id');
    }
}


