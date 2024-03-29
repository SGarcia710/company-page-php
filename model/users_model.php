<?php
class users_model
{
  private $db;
  private $users;
  public function __construct()
  { //Conexión a la base de datos
    require_once("connect.php"); // archivo que conecta a la base de datos
    $this->db = connect::connection(); //Función que hace la conexión a la base de datos
    $this->users = array();
  }
  public function get_users()
  {
    $query = $this->db->query("SELECT *FROM users");
    while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
      $this->users[] = $rows;
    }
    return $this->users;
  }
}
