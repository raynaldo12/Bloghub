Post::create([
'title' => 'Judl ketiga',
'category_id' => 3,
'slug' => 'judl-ketiga',
'excerpt' => 'Lorem ipsum ketiga',
'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex quidem itaque consequatur quod eos minus, rem placeat odit minima optio?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae itaque, veniam exercitationem ut a inventore illo distinctio id dolores.</p>'
])

Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor iste corrupti voluptates veniam reiciendis quos harum ex sapiente, fuga ratione perspiciatis animi. Accusantium labore, totam aliquid pariatur enim numquam voluptatibus eum, quae sint adipisci debitis alias fugit esse. Quisquam distinctio laudantium, ipsam iure nemo enim nesciunt fugiat eos quasi rem mollitia tenetur illum! Rerum, accusamus. Ratione nemo velit nesciunt atque delectus quisquam possimus temporibus architecto dolorem vel vero, voluptatum rem amet voluptatem, nostrum maxime quasi asperiores ut assumenda corrupti, hic ullam saepe unde. Pariatur neque consequatur mollitia quae expedita rem et accusantium natus aut quam voluptates soluta harum laboriosam reiciendis repellat fuga accusamus magni ullam sequi, laborum voluptatum? Itaque corrupti explicabo dolorem sunt placeat dicta ullam quaerat illo. Error mollitia, incidunt temporibus ullam quisquam repellat aut eaque obcaecati. Laboriosam consectetur asperiores, debitis eum voluptatum repellendus neque consequuntur modi cupiditate adipisci praesentium quis, unde dicta quia reprehenderit, quaerat perspiciatis sequi? Nostrum.

Category::create([
    'name' => 'programing',
    'slug' => 'programing'
])

Post::where('title', ' Judl ketiga berubah')->update(['excerpt' => 'excerpt post 3 berubah'])