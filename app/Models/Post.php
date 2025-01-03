<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body', 'slug'];

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) { //ambil apapun yang ada di search tapi kalo gak ada false
        //     return $query->where('title', 'like', '%' . $filters('search') . '%') //untuk mencari apapun yang didepan dan dibelakang
        //         ->orWhere('body', 'like', '%' . $filters('search') . '%'); //untuk mencari apapaun yang ada di body
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) { // ?? artinya kalo search gak ada, false
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) { //whereHas artinya query ini punya relation sama Category
                $query->where('slug', $category); //category disini pake yang di paling atas
            });
        });

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
