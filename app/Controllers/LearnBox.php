<?php namespace App\Controllers;

use App\Models\LearnBoxModel;
use CodeIgniter\Controller;

class LearnBox extends BaseController
{
    public function index()
    {
        $model = new LearnBoxModel();

        $data = [
            'news' => $model->getLearnBox(),
            'title' => 'LearnBox archive',
        ];

        echo view('templates/header', $data);
        echo view('learnbox/overview', $data);
        echo view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $model = new LearnBoxModel();

        $data['learnBox'] = $model->getLearnBox($slug);

        if (empty($data['learnBox'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find learn box: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('learnbox/view', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        helper('form');
        $model = new LearnBoxModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]'
        ])) {
            echo view('templates/header', ['title' => 'Create a learn box']);
            echo view('learnbox/create');
            echo view('templates/footer');

        } else {

            try {
                $model->save([
                    'title' => $this->request->getVar('title'),
                    'slug' => strtolower(url_title($this->request->getVar('title'))),
                    'user_id' => 1 // @TODO: add real user id
                ]);
            } catch (\ReflectionException $e) {
            }

            //echo view('news/success');
            $this->index();
        }
    }
}