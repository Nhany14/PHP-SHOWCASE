<?php
class Database {
  private $link;

  public function __construct($host, $username, $password, $dbname) {
    $link = mysqli_connect($host, $username, $password, $dbname);
    if (!$link) throw new Exception("Failed to connect database");
    $this->link = $link;

    $this->query('set names utf8');
  }

  public function __destruct() {
    mysqli_close($this->link);
  }

  public function query($sql) {
    return mysqli_query($this->link, $sql);
  }

  public function queryTable($sql) {
    return mysqli_fetch_all($this->query($sql));
  }

  public function getError() {
    return mysqli_error($this->link);
  }
}
?>