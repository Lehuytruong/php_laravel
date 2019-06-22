<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table){
           $table->bigIncrements('book_id');
           $table->string("book_name")->unique();
           $table->unsignedSmallInteger("nxb_id");
           $table->unsignedSmallInteger("author_id");
           $table->unsignedInteger("qty");
           $table->unsignedTinyInteger("active")->default(1);
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
        Schema::dropIfExists('book');
    }
}
