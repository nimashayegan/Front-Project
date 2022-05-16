<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/layout/Add user.css" type="text/css">
    <title>افزودن کاربر</title>
</head>
<body dir="rtl">

    <div class="div-home">

        <div class="div-title"> <p class="p-title">افزودن کاربر جدید</p> </div>

        <div class="div-body">
            <form action="">
                <div class="div-contorol">
                <div class="div-nuser">
                    <label>نام کاربری:</label>
                    <br>
                    <input name="userName" type="text" class="input-nuser">
                </div>

                <div class="div-email">
                    <label >ایمیل:</label>
                    <br>
                    <input name="email" type="email" class="input-email">
                </div>

                <div class="div-fname">
                    <label >نام:</label>
                    <br>
                    <input name="Fname" type="text" class="input-fname">
                </div>

                <div class="div-lname">
                    <label >نام خانوادگی:</label>
                    <br>
                    <input name="Lname" type="text" class="input-lname">
                </div>

                <div class="div-wb">
                    <label >وب سایت:</label>
                    <br>
                    <input name="website" type="url" class="input-wb">
                </div>

                <div class="div-password">
                    <label >رمزعبور:</label>
                    <br>
                    <input name="password" type="password" class="input-password">
                </div>

                <div class="div-naghsh">
                    <label >نقش:</label>
                    <br>
                    <select class="sel-naghsh">
                        <option name="role" value="admin">ادمین</option>
                        <option name="role" value="developer">توسعه دهنده</option>
                        <option name="role" value="buyer">مشتری</option>
                    </select>
                </div>
                <input type="submit" class="submit-1" value="ذخیره">
                </div>
            </form>
        </div>

    </div>

</body>
</html>