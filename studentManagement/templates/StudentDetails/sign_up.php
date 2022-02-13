<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        #wrap {
            background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
            /* Mozilla Firefox */
            background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
            /* Opera */
            background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
            /* Webkit (Safari/Chrome 10) */
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
            /* Webkit (Chrome 11+) */
            background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
            /* W3C Markup, IE10 Release Preview */
            background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        legend {
            color: #141823;
            font-size: 25px;
            font-weight: bold;
        }

        .signup-btn {
            background: #79bc64;
            background-image: -webkit-linear-gradient(top, #79bc64, #578843);
            background-image: -moz-linear-gradient(top, #79bc64, #578843);
            background-image: -ms-linear-gradient(top, #79bc64, #578843);
            background-image: -o-linear-gradient(top, #79bc64, #578843);
            background-image: linear-gradient(to bottom, #79bc64, #578843);
            -webkit-border-radius: 4;
            -moz-border-radius: 4;
            border-radius: 4px;
            text-shadow: 0px 1px 0px #898a88;
            -webkit-box-shadow: 0px 0px 0px #a4e388;
            -moz-box-shadow: 0px 0px 0px #a4e388;
            box-shadow: 0px 0px 0px #a4e388;
            font-family: Arial;
            color: #ffffff;
            /* font-size: 20px; */
            padding: 10px 20px 10px 20px;
            border: solid #3b6e22 1px;
            text-decoration: none;
        }

        .signup-btn:hover {
            background: #79bc64;
            background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
            background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
            background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
            background-image: -o-linear-gradient(top, #79bc64, #5e7056);
            background-image: linear-gradient(to bottom, #79bc64, #5e7056);
            text-decoration: none;
        }

        .navbar-default .navbar-brand {
            color: #fff;
            font-size: 30px;
            font-weight: bold;
        }

        .form .form-control {
            margin-bottom: 10px;
        }

        @media (min-width:768px) {
            #home {
                margin-top: 50px;
            }

            #home .slogan {
                color: #0e385f;
                line-height: 29px;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="wrap">
        <div class="row" style="padding: 2em;">
            <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                    <legend>Sign Up</legend>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="first name" value="" class="form-control input-lg" placeholder="First Name" />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="last name" value="" class="form-control input-lg" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="college" class="form-control input-lg">
                                <option disabled selected>College</option>
                                <option value="101">GEU</option>
                                <option value="102">IIT</option>
                                <option value="103">DIT</option>
                                <option value="104">IIM</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="department" class="form-control input-lg">
                                <option disabled selected>Department</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="course" class="form-control input-lg">
                                <option disabled selected>Course</option>
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" />
                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" />
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="phone" value="" class="form-control input-lg" placeholder="Phone Number" />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="age" value="" class="form-control input-lg" placeholder="Age" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <input type="text" name="address" value="" class="form-control input-lg" placeholder="Address" />
                        </div>
                    </div>
                    <br />
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>