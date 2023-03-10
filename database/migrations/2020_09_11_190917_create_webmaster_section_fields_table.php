<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebmasterSectionFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webmaster_section_fields', function (Blueprint $table) {
            $table->id();
            $table->integer('webmaster_id');
            $table->integer('type');

            $table->string('title_jp')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_vi')->nullable(); 

            $table->string('default_value')->nullable();

            $table->longText('details_jp')->nullable();
            $table->longText('details_en')->nullable();
            $table->longText('details_vi')->nullable();

            $table->integer('row_no');
            $table->tinyInteger('status');
            $table->tinyInteger('required');
            $table->tinyInteger('in_table')->default(0);
            $table->tinyInteger('in_search')->default(0);
            $table->tinyInteger('in_listing')->default(0);
            $table->tinyInteger('in_page')->default(0);
            $table->tinyInteger('in_statics')->default(0);
            $table->string('lang_code')->nullable();
            $table->string('css_class')->nullable();
            $table->string('view_permission_groups')->nullable();
            $table->string('add_permission_groups')->nullable();
            $table->string('edit_permission_groups')->nullable();
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
        Schema::dropIfExists('webmaster_section_fields');
    }
}
