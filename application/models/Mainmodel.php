<?php
	class Mainmodel extends CI_Model
	{
		public function _construct()
		{
			$this->load->database();
		}

		function check_user($email, $pass)
		{
			$query = $this->db->get_where('user', array('email' => $email, 'password' => $pass));
			return $query->num_rows();
		}

		function get_user($email)
		{
			$query = $this->db->get_where('user', array('email' => $email));
			return $query->row();
		}

		function show_news()
		{
			$query = $this->db->query('SELECT * FROM `news` INNER JOIN `category` ON news.id_category = category.id_category');
			return $query->result_array();
		}

		function get_category()
		{
			$query = $this->db->get('category');

			return $query->result_array();
		}

		function add_news($data)
		{
			$query = $this->db->insert('news', $data);
		}

		function delete_news($id_news)
		{
			$this->db->where('id_news', $id_news);
			$this->db->delete('news');
		}

		function get_where_show($id_news)
		{
			$query = $this->db->get_where('news', array('id_news' => $id_news));
				return $query->row();
		}

		function edit_news($id_news, $data)
		{
			$this->db->where('id_news', $id_news);
			$this->db->update('news', $data);
		}

		function add_category($data)
		{
			$query = $this->db->insert('category', $data);
		}

		function delete_cat($id_category)
		{
			$this->db->where('id_category', $id_category);
			$this->db->delete('category');
		}

			
	}
?>