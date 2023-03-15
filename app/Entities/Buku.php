<?php namespace App\Entities;

use CodeIgniter\Entity;

class Buku extends Entity
{
	public function setImage($file)
	{
		$fileName = $file->getRandomName();
		$writePath ='./uploads';
		$file->move($writePath, $fileName);
		$this->attributes['image'] = $fileName;
		return $this;
	}
}