<?php

/**
 * ini adalah Users Modules
 */

namespace Modules\Users\Controllers;

use App\Controllers\BaseController;
use Modules\Users\models\NewsModel;

class Users extends BaseController
{
    protected $news;
    public function __construct()
    {
        $this->news = new NewsModel();
    }

    public function index()
    {
        echo "Users Modules Index Function";
    }

    public function send()
    {
        $data = $this->request->getPost('data');

        dd($data);
    }

    public function news()
    {
        $news = $this->news->findAll();

        $data = [
            'news' => $news
        ];
        return view('Modules\Users\Views\user', $data);
    }
}
