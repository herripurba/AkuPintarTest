<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_lists', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('accreditation')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('web_link')->nullable();
            $table->string('maps_link')->nullable();
            $table->string('achievement')->nullable();
            $table->string('profile')->nullable();
            $table->string('history')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('campus_lists');
    }
}
