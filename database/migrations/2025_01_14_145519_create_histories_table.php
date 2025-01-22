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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();



            
            $table->bigInteger('news_id')->nullable(); // NULL 値を許容
            $table->bigInteger('profile_id')->nullable(); // NULL 値を許容
            $table->string('edited_at')->nullable(); // NULL 値を許容


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
        Schema::dropIfExists('histories',function (Blueprint $table){
            


        });
    }
};
