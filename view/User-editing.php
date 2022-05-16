<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/layout/User-editing.css" type="text/css">
    <title>ویرایش کاربر</title>
</head>

<body dir="rtl">

    <div class="div-body">

        <div class="div-hom">

            <div class="div-1">

                <a href="" class="a-poro" name="n">

                    <img src="../assets/image/users/R.png" alt="" class="img-poro" >

                </a>

                <div class="div-img">
                    <label class="lable-1">

                        <span class="span-image"> ارسال تصویر جدید</span>
                        <input name="userPic" type="file" hidden accept="image/*" class="file-1">

                    </label>
                </div>
            </div>

            <hr>

            <div class="div-2">

                
                <div class="div-fname">
                    <label class="l-fname">نام:</label>
                    <br>
                    <input name="userName" type="text">
                </div>

                
                <div class="div-lname">
                    <label class="l-lname">نام خانوادگی:</label>
                    <br>
                    <input name="userLname" type="text">
                </div>

                
                <div class="div-phone">
                    <label class="l-phone">شماره تلفن:</label>
                    <br>
                    <input name="userNumber" type="text">
                </div>

                <div class="div-gender">
                    <label class="l-genser">جنسیت:</label>
                    <br>
                    <select name="userGender" class="sel-1">
                        <option value="female">خانوم</option>
                        <option value="male">اقا</option>
                    </select>
                </div>

                <div class="div-bio" >
                    <label class="l-bio">بیوگرافی:</label>
                    <br>
                    <textarea  name="bio" id="" cols="30" rows="10" class="textar-1"></textarea>
                </div>

                <input type="submit" value="ذخیره تغییرات" class="sub-1">

            </div>

            







        </div>

    </div>

</body>

</html>