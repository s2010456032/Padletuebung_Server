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
        Schema::create('padlet_user', function (Blueprint $table) {
            //$table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('padlet_id')->constrained('padlets')->onDelete('cascade');
            $table->string('rights')->nullable();
            $table->string('author')->nullable();
            $table->timestamps();
            $table->primary(['user_id','padlet_id']);

            /*
            //$table->string('username');
            //$table->foreign('username')->references('username')->on('users')->onDelete('cascade');
            //$table->string('padlet_id');
            //$table->foreign('padlet_id')->references('padlet_id')->on('padlets')->onDelete('cascade');
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->primary(['author_id','book_id']);

            $table->primary(['username','padlet_id']);
            $table->string('rights');
            $table->string('author')->nullable();
            */
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_padlet');
    }
};
