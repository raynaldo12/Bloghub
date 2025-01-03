<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Raynaldo',
            'username' => 'ray',
            'email' => 'raynaldo@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Edward Agustino',
        //     'email' => 'edward@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judl Pertama',
        //     'slug' => 'judl-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse. Quisquam distinctio laudantium, ipsam iure nemo enim nesciunt fugiat eos quasi rem mollitia tenetur illum! Rerum, accusamus. Ratione nemo velit nesciunt atque delectus quisquam possimus temporibus architecto dolorem vel vero, voluptatum rem amet voluptatem, nostrum maxime quasi asperiores ut assumenda corrupti, hic ullam saepe unde. Pariatur neque consequatur mollitia quae expedita rem et accusantium natus aut quam voluptates soluta harum laboriosam reiciendis repellat fuga accusamus magni ullam sequi, laborum voluptatum? Itaque corrupti explicabo dolorem sunt placeat dicta ullam quaerat illo. Error mollitia, incidunt temporibus ullam quisquam repellat aut eaque obcaecati. Laboriosam consectetur asperiores, debitis eum voluptatum repellendus neque consequuntur modi cupiditate adipisci praesentium quis, unde dicta quia reprehenderit, quaerat perspiciatis sequi? Nostrum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judl Kedua',
        //     'slug' => 'judl-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse. Quisquam distinctio laudantium, ipsam iure nemo enim nesciunt fugiat eos quasi rem mollitia tenetur illum! Rerum, accusamus. Ratione nemo velit nesciunt atque delectus quisquam possimus temporibus architecto dolorem vel vero, voluptatum rem amet voluptatem, nostrum maxime quasi asperiores ut assumenda corrupti, hic ullam saepe unde. Pariatur neque consequatur mollitia quae expedita rem et accusantium natus aut quam voluptates soluta harum laboriosam reiciendis repellat fuga accusamus magni ullam sequi, laborum voluptatum? Itaque corrupti explicabo dolorem sunt placeat dicta ullam quaerat illo. Error mollitia, incidunt temporibus ullam quisquam repellat aut eaque obcaecati. Laboriosam consectetur asperiores, debitis eum voluptatum repellendus neque consequuntur modi cupiditate adipisci praesentium quis, unde dicta quia reprehenderit, quaerat perspiciatis sequi? Nostrum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judl Ketiga',
        //     'slug' => 'judl-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse. Quisquam distinctio laudantium, ipsam iure nemo enim nesciunt fugiat eos quasi rem mollitia tenetur illum! Rerum, accusamus. Ratione nemo velit nesciunt atque delectus quisquam possimus temporibus architecto dolorem vel vero, voluptatum rem amet voluptatem, nostrum maxime quasi asperiores ut assumenda corrupti, hic ullam saepe unde. Pariatur neque consequatur mollitia quae expedita rem et accusantium natus aut quam voluptates soluta harum laboriosam reiciendis repellat fuga accusamus magni ullam sequi, laborum voluptatum? Itaque corrupti explicabo dolorem sunt placeat dicta ullam quaerat illo. Error mollitia, incidunt temporibus ullam quisquam repellat aut eaque obcaecati. Laboriosam consectetur asperiores, debitis eum voluptatum repellendus neque consequuntur modi cupiditate adipisci praesentium quis, unde dicta quia reprehenderit, quaerat perspiciatis sequi? Nostrum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judl Keempat',
        //     'slug' => 'judl-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse. Quisquam distinctio laudantium, ipsam iure nemo enim nesciunt fugiat eos quasi rem mollitia tenetur illum! Rerum, accusamus. Ratione nemo velit nesciunt atque delectus quisquam possimus temporibus architecto dolorem vel vero, voluptatum rem amet voluptatem, nostrum maxime quasi asperiores ut assumenda corrupti, hic ullam saepe unde. Pariatur neque consequatur mollitia quae expedita rem et accusantium natus aut quam voluptates soluta harum laboriosam reiciendis repellat fuga accusamus magni ullam sequi, laborum voluptatum? Itaque corrupti explicabo dolorem sunt placeat dicta ullam quaerat illo. Error mollitia, incidunt temporibus ullam quisquam repellat aut eaque obcaecati. Laboriosam consectetur asperiores, debitis eum voluptatum repellendus neque consequuntur modi cupiditate adipisci praesentium quis, unde dicta quia reprehenderit, quaerat perspiciatis sequi? Nostrum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
