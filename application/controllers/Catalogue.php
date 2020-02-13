<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalogue extends CI_Controller
{
    public function liste()
    {
        $data["liste"] = $this->db->query("select * from disc")->result();

        $this->load->view('catalogue/liste', $data);
    }
    
    public function add($id)
    {
        $disc = $this->db->query("select * from disc where disc_id=?", $id)->row();

        $data = [
            "id" => $disc->disc_id,
            "title" => $disc->disc_title,
            "price" => $disc->disc_price,
        ];

        $this->basket->add($data);

        redirect(site_url("catalogue/liste"));
    }
    
    public function panier()
    {
        $data["panier"] = $this->basket->get_basket();

        $this->load->view('catalogue/panier', $data);
    }
}
