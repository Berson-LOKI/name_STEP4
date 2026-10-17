<?php
$Name = $_POST["Name"] ?? "";
$Age = $_POST["Age"] ?? "";
$Phone = $_POST["Phone"] ?? "";
$Email = $_POST["Email"] ?? "";
$Address = $_POST["Address"] ?? "";
$Question = $_POST["Question"] ?? "";
$Gender = $_POST["Gender"] ?? "";
$Category = $_POST["Category"] ?? "";

$errors = [];

if ($Name === "" || !preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z]+\z/u', $Name)) {
    $errors[] = "名前はひらがな、カタカナ、漢字、英字のみ使用できます。";
}

if ($Age === "" || !ctype_digit($Age) || (int)$Age < 0 || (int)$Age > 150) {
    $errors[] = "年齢は0から150の間で入力してください。";
}

if ($Phone === "" || !preg_match('/\A[0-9-]+\z/', $Phone)) {
    $errors[] = "電話番号は半角数字とハイフンのみ使用できます。";
}

if ($Email === "" || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスの形式が正しくありません。";
}

if ($Address === "" || !preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z0-9-]+\z/u', $Address)) {
    $errors[] = "住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。";
}

if (trim($Question) === "") {
    $errors[] = "質問を入力してください。";
}

if (!in_array($Gender, ["男性", "女性", "その他", "回答しない"], true)) {
    $errors[] = "性別を選択してください。";
}

if (!in_array($Category, ["商品について", "サービスについて", "その他"], true)) {
    $errors[] = "カテゴリーを選択してください。";
}

function h($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>入力確認</h1>

    <div class="form-container">

        <?php if (!empty($errors)): ?>

            <h2>入力内容にエラーがあります</h2>

            <?php foreach ($errors as $error): ?>
                <p><?= h($error) ?></p>
            <?php endforeach; ?>

            <a href="form.php">入力フォームに戻る</a>

        <?php else: ?>

            <h2>入力内容</h2>

            <p>名前：<?= h($Name) ?></p>
            <p>年齢：<?= h($Age) ?></p>
            <p>電話番号：<?= h($Phone) ?></p>
            <p>メールアドレス：<?= h($Email) ?></p>
            <p>住所：<?= h($Address) ?></p>
            <p>質問：<?= nl2br(h($Question)) ?></p>
            <p>性別：<?= h($Gender) ?></p>
            <p>カテゴリー：<?= h($Category) ?></p>

            <a href="index.php">入力フォームに戻る</a>

        <?php endif; ?>

    </div>
</body>
</html>