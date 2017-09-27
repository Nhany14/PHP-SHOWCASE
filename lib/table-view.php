<?php
class TableView {
  private $titles, $body;

  public function __construct($data) {
    $this->titles = $data['titles'];
    $this->body = $data['body'];
  }

  public function render() {
    $html = '<table><thead><tr>' . join('',
      array_map(
        function($x) { return "<th>$x</th>"; },
        $this->titles
      )
    ) . '</tr></thead>';

    $html .= '<tbody>';
    foreach($this->body as $row) {
      $html .= '<tr>' . join('',
        array_map(
          function($x) { return "<td>$x</td>"; },
          $row
        )
      ) . '</tr>';
    }

    return $html . '</tbody></table>';
  }
}
?>