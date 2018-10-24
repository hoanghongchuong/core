<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = DB::table('roles')->insert([
			'name' => 'Author',
			'slug' => 'author',
			'permissions' => json_encode([
				'create-post' => true,
			]),
        ]);

        $editor = DB::table('roles')->insert([
			'name' => 'Editor',
			'slug' => 'editor',
			'permissions' => json_encode([
				'update-post' => true,
				'published-post' => true,
			
			]),
        ]);
    }
}
