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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('property');
            $table->enum('property_type', ['Villa', 'Apartment', 'TownHouse']);
            $table->integer('floor_no');
            $table->integer('unit_no');
            $table->string('bhk');
            $table->string('view');
            $table->string('size');
            $table->string('price');
            $table->string('comment');
            $table->string('calling_date');
            $table->enum('availability_status', ['For Sale', 'Not Available', 'For Rent']);
            $table->string('is_post');

            $table->enum('status', ['Vacant', 'Occupied']);
            $table->string('client_name');
            $table->string('contact_no');
            $table->string('email');
            $table->string('assignedTo');
            $table->string('assignedBy');
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
        Schema::dropIfExists('properties');
    }
};
