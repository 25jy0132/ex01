<?php
$search_word = $_GET['q'];
header('Location: https://youtu.be/dQw4w9WgXcQ?si=eLucS7q6ewv511yi');
// 危険: htmlspecialcharsなどを使用せず、そのまま画面に出力している
echo "<h1>検索結果: " . $search_word . "</h1>";
?>
