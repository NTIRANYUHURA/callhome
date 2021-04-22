<?php
//phpcs:disable
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PriceTelecomMadeByYves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PriceTelecomMadeByYves', function (Blueprint $table) {
            $table->integer('prefix');
            $table->string('description');
            $table->float('voice_rate');
            $table->string('code');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PriceTelecomMadeByYves'); //
    }
}
