<?php
// application/controllers/Pics.php

class Pics extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pics_model');
        
        // $this->load->helper('url_helper');

        // // Bad News Dudes
        // $this->config->set_item('banner', 'Bad News Dudes');
    }

    public function index() {

        $pics = $this->pics_model->get_pics();
        
        foreach($pics as $pic){

            $size = 'm';
            $photo_url = '
            http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

            echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
        
        }
        // // Replace default title with 'this->' title
        // $this->config->set_item('title', 'Bad News Dudes');

        // // Nav Links
        // $nav1 = $this->config->item('nav1');
        // // var_dump($nav1);
        // // die;

        
        // $data['title'] = 'News archive';
        // $this->load->view('news/index', $data);
    }

    public function view($tags = NULL) {
        // // slug without dashes
        // $dashless_slug = str_replace("-", " ", $slug);

        // // uppercase slug words
        // $dashless_slug = ucwords($dashless_slug);

        // // Use dashless slug for title
        // $this->config->set_item('title', 'Newsflash! - ' . $dashless_slug);

        // $data['news_item'] = $this->news_model->get_news($slug);
        // if (empty($data['news_item'])) {
        //     show_404();
        // }
        // $data['title'] = $data['news_item']['title'];
        // $this->load->view('news/view', $data);
    }

    // THIS IS WHERE THE FLICKR (or any API) WILL GO
    

    // GOES HERE
    // 
    // WHERE THE CODE WILL FINISH
}