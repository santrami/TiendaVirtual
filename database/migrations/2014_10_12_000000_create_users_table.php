<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',100);
            $table->string('last_name',100);
            $table->string('email')->unique();
            $table->string('user', 50)->unique();
            $table->string('password',60);
            $table->enum('type', ['user','admin']);
            $table->boolean('active')->default(1);
            $table->text('address')->default('st. saint-germain');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}