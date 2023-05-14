<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="get">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">တက်ရောက်မည့်ဘာသာရပ် <span class="text-danger">*</span></label>
                                <select name="program" class="form-select">
                                    <option value="mba">Master of Business Administration</optin>
                                    <option value="bba">Master of Business Administration</optin>
                                    <option value="bbs">Master of Business Administration</optin>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <div>
                                <label for="" class="form-label">လျောက်ထားသူအမည်( မြန်မာ) </label>
                                <input type="text" name="name_mm" id="" class="form-control" >
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="" class="form-label">လျောက်ထားသူအမည်( အ၈လိပ်) </label>
                                <input type="text" name="name_eng" id="" class="form-control" >
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="" class="form-label">မွေးနေ့ </label>
                                <input type="date" name="dob" id="" class="form-control" >
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="">လူမျိုး</label> <br>
                                                     
                            <br><span class="text-danger"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="">Marital Status</label><br>
                            <input type="radio" name="marital" id="" value="marriage" class="form-check-input"> <label for="" class="form-check-label">Marriage</label>
                            <input type="radio" name="marital" id="" value="single" class="form-check-input"> <label for="" class="form-check-label">Single</label>
                            <input type="radio" name="marital" id="" value="other" class="form-check-input"> <label for="" class="form-check-label">Other</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Gender</label><br>
                            <input type="radio" name="gender" id="" value="male" class="form-check-input"> <label for="" class="form-check-label">Male</label>
                            <input type="radio" name="gender" id="" value="female" class="form-check-input"> <label for="" class="form-check-label">Female</label>
                            <input type="radio" name="gender" id="" value="other" class="form-check-input"> <label for="" class="form-check-label">Other</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <button class="btn btn-primary" name="submit" value="submit">Register</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/myscript.js"></script>
</body>
</html>
