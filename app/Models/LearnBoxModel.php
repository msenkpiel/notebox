<?php namespace App\Models;

use CodeIgniter\Model;

class LearnBoxModel extends Model
{
    protected $table = 'learn_box';

    protected $allowedFields = ['title', 'slug', 'user_id'];

    public function getLearnBox($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}