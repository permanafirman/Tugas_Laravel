<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BarangPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    /**

        *Determine if the given user can delete the given overtime
        *
        * @param User #user
        Memberikan hak akses untuk user

    */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Barang $barang)
    {
        return $user->id == $barang->user_id;
    }

}
