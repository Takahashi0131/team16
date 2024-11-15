<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationStatisticsTable extends Migration  // 修改類別名稱為 CreatePopulationStatisticsTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('region', 100)->comment('地區名稱');
            $table->integer('household_count_113_1')->nullable()->comment('113-1期的戶數統計總數');
            $table->integer('household_count_male_113_1')->nullable()->comment('113-1期的戶數統計男性數');
            $table->integer('household_count_female_113_1')->nullable()->comment('113-1期的戶數統計女性數');
            $table->integer('population_count_113_1')->nullable()->comment('113-1期的人口總數');
            $table->integer('population_count_male_113_1')->nullable()->comment('113-1期的人口統計男性數');
            $table->integer('population_count_female_113_1')->nullable()->comment('113-1期的人口統計女性數');
            $table->integer('household_count_113_2')->nullable()->comment('113-2期的戶數統計總數');
            $table->integer('household_count_male_113_2')->nullable()->comment('113-2期的戶數統計男性數');
            $table->integer('household_count_female_113_2')->nullable()->comment('113-2期的戶數統計女性數');
            $table->integer('population_count_113_2')->nullable()->comment('113-2期的人口總數');
            $table->integer('population_count_male_113_2')->nullable()->comment('113-2期的人口統計男性數');
            $table->integer('population_count_female_113_2')->nullable()->comment('113-2期的人口統計女性數');
            $table->timestamps(); // 自動創建 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('population_statistics');
    }
}
