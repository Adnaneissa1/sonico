<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPhoneAndrsTable extends Migration
{
    public function up()
    {
        Schema::create('category_phone_andrs', function (Blueprint $table) {
            $table->id();
            $table->string('nameCatg');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_phone_andrs');
    }
}
