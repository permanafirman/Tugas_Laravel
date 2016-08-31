<?php

namespace App\Repositories;


use App\User;
use App\Barang;

class BarangRepository
{
	public function forBarang(Barang $barang)
	{
		return $barang->Barangs()
					  ->orderBy('created_at', 'asc')
					  ->get();
	}
}