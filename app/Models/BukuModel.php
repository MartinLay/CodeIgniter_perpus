<?php namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
	protected $table = 'buku';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama_buku','penulis'
	];
	protected $returnType = 'App\Entities\Buku';
	protected $useTimestamps = false;
}