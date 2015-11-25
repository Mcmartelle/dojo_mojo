<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
	// gets user for the login to check to see if they are in the database based on the email
	// they typed in
	public function get_current_user($email)
	{
		$query = "SELECT id, name, alias, birthday, email, password, roles, phone FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}

	public function add_user($user)
	{
		$query = "INSERT INTO users (name, alias, birthday, email, password, roles, phone)
			VALUES (?, ?, ?, ?, ?, ?, ?)";
		$value = array($user["name"], $user["alias"], $user["birthday"], $user["email_address"], $user["password"], 0, $user["phone_no"]);
		return $this->db->query($query, $value);
	}
	// getting a specific user when we call the specific user id, mostly used for session results
	public function get_user_id($userid)
	{
		$query = "SELECT id, name, alias, birthday, email, password, roles, phone FROM users WHERE id = ?";
		$value = array($userid);
		return $this->db->query($query, $value)->result_array();
	}

}