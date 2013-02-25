<?php
class GNFC_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_games($game = FALSE)
	{
		if($game === FALSE)
		{
			$query = $this->db->get('games');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('games', array('game_name' => $game));
		return $query->row_array();
	}
	public function set_news()
	{
		$this->load->helper('url');
		$data = array(
			'game_name' => $this->input->post('game_name'),
			'num_players' => $this->input->post('num_players')
		);
		
		return $this->db->insert('games', $data);
	}
}