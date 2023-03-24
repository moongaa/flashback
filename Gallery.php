<!-- 개인갤러리, 공유갤러리 모두 형태는 같으니까 하나로 페이지 생성 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$id?> Gallery</title>
</head>
<body>
    <link rel="stylesheet" href="css/gallery.css">
    <div class="container">
        <div class="header">
            <form name="상단바" action="main.php" method="post">
                <input class="Flashback" type="button" name="아이디값" value="FlashBack">
            </form>
            <form name="상단바" action="Gallery.php" method="post">
                <input class="top-button" type="button" name="아이디값" value="My Gallery">
            </form>
            <form name="상단바" action="Gallery.php" method="post">
                <input class="top-button" type="button" name="아이디값" value="Share Gallery">
            </form>
            <form name="상단바" action="업로드 창띄우기" method="post">
                <input class="top-button" type="button" name="아이디값" value="Upload">
            </form>
            <form name="상단바" action="account.html" method="post">
                <input class="top-button" type="button" name="아이디값" value="Account">
            </form>
        </div>
        <div class="content">
            
        </div>
        <div class="footer">
            더보기
        </div>
    </div>
</body>
</html>