<?php
require "../koneksi.php";
$posts = $conn->query("SELECT * FROM Post");
header("Content-type:application/json; charset=UTF-8");
echo json_encode($posts->fetch_all(MYSQLI_ASSOC));
?>
<script>
      function getData() {
        xhr.open('GET', 'http://172.70.8.171/kuliah/api/post.php');
        xhr.send();
      }
</script>