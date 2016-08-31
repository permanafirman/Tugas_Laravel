<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Memberikan hak akses 

    public function destroy(User $user, Book $book)
    {
        return $user->id == $book->user_id;
    }

}
