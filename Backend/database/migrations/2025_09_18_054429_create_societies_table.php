<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("id_card_number", 255);
            $table->string("password", 255);
            $table->string("name", 225);
            $table->date("born_date");
            $table->enum("gender", ["male", "female"]);
            $table->text("address");
            $table->foreignId("regional_id")->constrained("regionals");
            $table->text("login_tokens")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societies');
    }
};
