<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Costa Rica Israel</title>

    <link rel="stylesheet" href="/costaRicaIsrael/css/main.css">
    <link rel="stylesheet" href="/costaRicaIsrael/css/contest.css">
    <link rel="stylesheet" href="/costaRicaIsrael/css/form.css">
    <link rel="stylesheet" href="/costaRicaIsrael/css/modal.css">

    <script src="/costaRicaIsrael/js/contest.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/costaRicaIsrael/js/modal.js"></script>

</head>

<body>
    <?php require 'templates/navbar.php'?>

    <div id="container_center">
        <div class="container">
            <h2> Registration</h2>
            <form class="general_form" method="get" action="form.php">
                <fieldset><legend>Personal data:</legend>

                    <label for="fname">First name</label>
                    <input class="form_field" type="text" id="fname" autofocus="" required><br>

                    <label for="lname">Last name</label>
                    <input class="form_field" type="text" id="lname" required><br>

                    <label for="email">Email</label>
                    <input class="form_field" type="email" id="email" required><br>

                    <label for="mobile">Mobile number</label>
                    <input class="form_field" type="tel" id="mobile" required pattern="[05]{2}[0|2-9][0-9]{7}" title="Enter a vaild Israeli mobile number"><br><br>

                    <label>Gender</label>
                    <label class="gender" for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label class="gender" for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female" required><br>

                    <label for="bDate">Date of birth</label>
                    <input class="form_field" type="date" id="bDate" min="1920-01-02" onchange="validateDate()" required><br>

                    <label for="address">Address</label>
                    <input class="form_field" type="text" id="address" required><br>

                </fieldset>
                <fieldset><legend>Student data:</legend>

                    <label for="institution">Institution</label>
                    <select class="form_field" id="institution" required>
                            <option disabled selected value="">Please select..</option>
                            <option value="university">University</option>
                            <option value="college">College</option>
                    </select><br>

                    <label for="institute_id">Institute name</label>
                    <input class="form_field" type="text" id="institute_id" required><br>

                    <label for="faculty">Faculty</label>
                    <input class="form_field" list="faculty_list" id="faculty" required>
                    <datalist id="faculty_list">
                        <option value="Natural Sciences">
                        <option value="Engineering Science">
                        <option value="Humanities and Social Sciences">
                        <option value="Health Sciences">
                        <option value="Education">
                        <option value="Art">
                    </datalist><br>

                    <label for="degree">Degree</label>
                    <input class="form_field" list="degree_list" id="degree" required>
                    <datalist id="degree_list">
                        <option disabled selected value="please select">Please select..</option>
                        <option value="Bachelor"></option>
                        <option value="Master"></option>
                        <option value="PhD"></option>
                    </datalist><br>

                    <label for="year_number">Year number</label>
                    <input class="form_field" type="number" id="year_number" min="1" max="7" required><br>
                </fieldset>
                <div id="formbuttons">
                    <button class="btn_default" type="submit"><span class="btn_icon icon_accept"></span> Submit</button>
                    <button class="btn_default" type="reset"><span class="btn_icon icon_refresh"></span> Reset</button>
                </div>
            </form>
            <br><hr><br>

            <h2> Know The Winners </h2>

            <h3>  2013 contest winners - #8 </h3>
            <table class="winnersTable" id="winners_6">
                    <script> eventsHeader(); </script>
            </table>

            <script>insertDataToTable("winners_6"); </script>

            <br>
            <div class="imageTable"></div>

        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <div>
                    <table>
                        <tr>
                            <td onclick="toggleLeft();"> <a href="#openModal"><span class="arrow_left"></span></a> </td>

                            <td id="image"></td>

                            <td onclick="toggleRight();"> <a href="#openModal"><span class="arrow_right"></span></a> </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        </div>
    </div>

    <?php require 'templates/footer.php' ?>

</body>
</html>
