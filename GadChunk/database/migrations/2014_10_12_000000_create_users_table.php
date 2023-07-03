<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string    ('name');
            $table->string    ('email')->unique();
            $table->text      ('phone');
            $table->string    ('password');
            $table->string    ('street')->nullable();
            $table->string    ('city')->nullable();
            $table->string    ('province')->nullable();
            $table->string    ('zip_code')->nullable();
            $table->string    ('country')->nullable();
            $table->string    ('profile_image')->nullable();
            $table->integer   ('userType')->default(1);
            $table->timestamp ('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            /*
                userType:
                    0 -> Admin
                    1 -> Member
            */
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
};
