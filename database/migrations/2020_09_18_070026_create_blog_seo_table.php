<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_seo', function (Blueprint $table) {
            $table->id();
            $table->integer('SeoID');
            $table->string('MetaTitle');
            $table->string('MetaDescription');
            $table->string('MainKeyword');
            $table->boolean('IndexFollow');
            $table->integer('BlogID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_seo');
    }
}
