<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();

            $table->string('title_en')->nullable();
            $table->string('title_vi')->nullable();
            $table->string('title_jp')->nullable();

            $table->string('photo')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('status');
            $table->integer('visits');
            $table->integer('webmaster_id');
            $table->integer('father_id');
            $table->integer('row_no');

            $table->string('seo_title_jp')->nullable();
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_vi')->nullable();

            $table->string('seo_description_jp')->nullable();
            $table->string('seo_description_en')->nullable();
            $table->string('seo_description_vi')->nullable();

            $table->string('seo_keywords_vi')->nullable();
            $table->string('seo_keywords_en')->nullable();
            $table->string('seo_keywords_jp')->nullable();

            $table->string('seo_url_slug_jp')->nullable();
            $table->string('seo_url_slug_en')->nullable();
            $table->string('seo_url_slug_vi')->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('sections');
    }
}
