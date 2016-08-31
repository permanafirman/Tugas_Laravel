<?php

namespace App\Repositories;

use App\Leave;

class LeaveRepository
{
	public function forLeave(Leave $leave)
	{
		return $leave->Leave()
					 ->orderBy('createdBy', 'asc');
					 ->get();
	}
}