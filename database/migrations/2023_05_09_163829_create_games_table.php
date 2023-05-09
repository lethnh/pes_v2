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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('home_team_score')->comment('số bàn đội nhà');
            $table->bigInteger('away_team_score')->comment('số bàn đội khách');
            $table->date('date')->comment('ngày thi đấu');
            $table->bigInteger('away_team_id')->comment('đội khách');
            $table->bigInteger('home_team_id')->comment('đội nhà');
            $table->bigInteger('season_id')->comment('mùa giải');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
