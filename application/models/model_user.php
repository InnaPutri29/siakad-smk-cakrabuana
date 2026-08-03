<?php
 
	class Model_user extends CI_Model
	{

		public $table = "tbl_user";
		
		// mengambil data $username & $password dari hasil parsing controller Auth function check_login() dan mencocokanya dengan data yang ada di database
		function login($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$user = $this->db->get('tbl_user')->row_array();
			return $user;
		}

		function save($foto)
		{
			$data = array(
				'nama_lengkap'  => $this->input->post('nama_lengkap', TRUE),
				'username'      => $this->input->post('username', TRUE),
				'password'      => md5( $this->input->post('password', TRUE) ),
				'id_level_user' => $this->input->post('level_user', TRUE),
				'foto'          => !empty($foto) ? $foto : 'user-siluet.jpg'
			);
			$this->db->insert($this->table, $data);
		}

		function update($foto)
		{
			$id_user = $this->input->post('id_user', TRUE);
			$pass_input = $this->input->post('password', TRUE);
			$hapus_foto = $this->input->post('hapus_foto', TRUE);
			
			$data = array(
				'nama_lengkap'  => $this->input->post('nama_lengkap', TRUE),
				'username'      => $this->input->post('username', TRUE),
				'id_level_user' => $this->input->post('level_user', TRUE),
			);

			$user_current = $this->db->get_where('tbl_user', array('id_user' => $id_user))->row_array();
			if (!empty($pass_input) && $pass_input !== $user_current['password']) {
				$data['password'] = md5($pass_input);
			}

			if ($hapus_foto == '1') {
				$data['foto'] = 'user-siluet.jpg';
			} elseif (!empty($foto)) {
				$data['foto'] = $foto;
			}

			$this->db->where('id_user', $id_user);
			$this->db->update($this->table, $data);
		}

	}

?>