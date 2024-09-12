<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('author', 100)->nullable();
            $table->integer('price_rent');
            $table->string('book_category', 10);
            $table->timestamps();
        });

        // Add check constraint for price_rent > 0
        DB::statement('ALTER TABLE books ADD CONSTRAINT check_price_rent CHECK (price_rent > 0)');

        // Add check constraint for book_category to allow only specific values
        DB::statement("ALTER TABLE books ADD CONSTRAINT check_book_category CHECK (book_category IN ('MANGA', 'NOVEL', 'MAGAZINE'))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE books DROP CONSTRAINT IF EXISTS chk_price_rent');
        DB::statement('ALTER TABLE books DROP CONSTRAINT IF EXISTS chk_book_category');

        Schema::dropIfExists('books');
    }
};
