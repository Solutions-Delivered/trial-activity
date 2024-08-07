<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        // Definitely not best practice but
        public function up(): void
        {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->text('description');
                $table->timestamps();
            });

            Schema::create('faqs', function (Blueprint $table) {
                $table->id();
                $table->string('question');
                $table->longText('answer');
                $table->timestamps();
            });

            Schema::create('social_media', function (Blueprint $table) {
                $table->id();
                $table->string('url');
                $table->string('icon');
                $table->timestamps();
            });

            Schema::create('memberships', function (Blueprint $table) {
                $table->id();
                $table->string('identifier');
                $table->string('logo_url');
                $table->timestamps();
            });

            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->string('short_description', 300);
                $table->string('description');
                $table->string('image')->nullable(); // Field for project image
                $table->timestamps();

                // Unique index for slug
                $table->unique('slug');
            });

            Schema::create('project_photos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
                $table->string('name');
                $table->string('image');
                $table->string('description')->nullable();
                $table->timestamps();
            });

            Schema::create('team_members', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('role');
                $table->string('twitter')->nullable();
                $table->string('github')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('image')->nullable(); // Field for team member image
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('team_members');
            Schema::dropIfExists('project_photos');
            Schema::dropIfExists('projects');
            Schema::dropIfExists('memberships');
            Schema::dropIfExists('social_media');
            Schema::dropIfExists('faqs');
            Schema::dropIfExists('services');
        }
    };
