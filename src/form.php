<!DOCTYPE html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>

    <div class="form-container">
        <form action="confirm.php" method="post">

            <div class="form-group">
                <label for="name">名前：</label>
                <input type="text" id="name" name="Name">
            </div>

            <div class="form-group">
                <label for="age">年齢：</label>
                <input type="number" id="age" name="Age">
            </div>

            <div class="form-group">
                <label for="phone">電話番号：</label>
                <input type="tel" id="phone" name="Phone">
            </div>

            <div class="form-group">
                <label for="email">メールアドレス：</label>
                <input type="text" id="email" name="Email">
            </div>

            <div class="form-group">
                <label for="address">住所：</label>
                <input type="text" id="address" name="Address">
            </div>

            <div class="form-group">
                <label for="question">質問：</label>
                <textarea id="question" name="Question" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="gender">性別：</label>
                <select id="gender" name="Gender">
                    <option value="">選択してください</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                </select>
            </div>

            <input type="submit" value="送信">

        </form>
    </div>
</body>
</html>