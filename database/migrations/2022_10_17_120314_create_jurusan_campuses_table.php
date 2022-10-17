<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan_campuses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('campus_id')->constraint('campus_lists');
            $table->string('name');
            $table->string('accreditation')->nullable();
            $table->integer('new_student_quota')->nullable();
            $table->float('entry_percentage')->nullable();
            $table->string('whats_learn')->nullable();
            $table->string('work_prospect')->nullable();

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
        Schema::dropIfExists('jurusan_campuses');
    }
}
