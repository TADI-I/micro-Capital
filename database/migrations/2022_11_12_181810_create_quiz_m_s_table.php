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
        Schema::create('quiz_m_s', function (Blueprint $table) {
            $table->id();
            $table->string("revenue")->nullable();
            $table->string("loan")->nullable();
            $table->string("gender")->nullable();
            $table->string("race")->nullable();
            $table->string("status")->default(0);
            $table->string("paymentM")->nullable();
            $table->string("sector")->nullable();
            $table->string("companyYears")->nullable();
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
        Schema::dropIfExists('quiz_m_s');
    }
};
