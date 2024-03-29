<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Cebutter - 会員登録</title>
</head>
<body>
  <h1>会員登録</h1>
  <p>次のフォームに必要事項をご記入ください。</p>
  <!-- 自分自身に送信するときはactionは空で良い -->
  <!-- ファイル送信する場合はenctypeが必要 -->
  <form action="" method="post" enctype="multipart/form-data">
    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd><input type="text" name="name" size="35" maxlength="255"></dd>

      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd><input type="text" name="email" size="35" maxlength="255"></dd>
      
      <dt>パスワード<span class="required">必須</span></dt>
      <dd><input type="password" name="password" size="10" maxlength="20"></dd>

      <dt>写真など</dt>
      <dd><input type="file" name="image" size="35"></dd>
    </dl>
    <div><input type="submit" value="入力内容を確認する" /></div>
  </form>
</body>
</html>
