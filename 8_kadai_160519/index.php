<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フィードバック</legend>
       <label>数字1：<input type="text" name="name1"></label><br>
       <label>数字2：<input type="text" name="name2"></label><br>
       <label>数字3：<input type="text" name="name3"></label><br>
       <label>数字4：<input type="text" name="name4"></label><br>
       <label>数字5：<input type="text" name="name5"></label><br>
       <label>数字6：<input type="text" name="name6"></label><br>
       <label>数字7：<input type="text" name="name7"></label><br>
     <label>回数：<input type="text" name="number"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
