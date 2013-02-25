<?php
class GNFC extends CI_Controller
{
	public function index()
	{
		$this->load->model("GNFC");
		$data['games']=get_games();
		$this->load->view("templates/header.php", $data);
		$this->load->view("showGames.php", $data);
		$this->load->view("templates/footer.php", $data);
	}
	public function gameDetails($game)
	{
		$this->load->model("GNFC");
		$data['game']=get_games($game);
		$this->load->view("templates/header.php", $data);
		$this->load->view("gameDetail.php", $data);
		$this->load->view("templates/footer.php", $data);
	}
	public function addGame()
	{
		$this->load->view("templates/header.php", $data);
		$this->load->view("addGame.php", $data);
		$this->load->view("templates/footer.php", $data);
	}
	public function editGame($game)
	{
		$this->load->model("GNFC");
		$data['game'] = get_games($game);
		$this->load->view("templates/header.php", $data);
		$this->load->view("editGame.php", $data);
		$this->load->view("templates/footer.php", $data);
	}
	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Add a Game';
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view("templates/header.php", $data);
			$this->load->view("addGame.php", $data);
			$this->load->view("templates/footer.php", $data);
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('GNFC/success');
		}
	}
}
?>