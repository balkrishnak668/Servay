<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Survey Form</title>
</head>
<body>
    <div class="container ">
        <header class="header">
            <h1 id="title">
                Survey from <br>
                Atmasampanna's spices<br>
                www.atmasampanna.in
            </h1>
            <p id="description">
                Thank you for taking the time to help us to improve 
            </p>
        </header>
        <form method="post" action="dbservay.php" id="survey-form">
            <!-- Text section -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="formControl" placeholder="Enter your name" >
            </div>
            <!-- end of text section -->

            <!-- Type Email section -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="formControl" placeholder="Enter your Email" >
            </div>
            <!-- end of Email section -->

            <!-- Type Number section -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="number" name="phone_number" id="phone_number" class="formControl" placeholder="Enter your phone number" >
            </div>
            <!-- end of Number section -->

            <!-- Type Number section -->
            <div class="form-group">
                <label for="address">Address <span class="clue">(optional)</span></label>
                <input type="text" name="address" id="address" class="formControl" placeholder="Enter your address">
            </div>
            <!--  end of number section -->
            <!--type age section -->
            <div class="form-group">
                <label for="address">age </label>
                <input type="text" name="age" id="age" class="formControl" placeholder="Enter your Date of Birth">
            </div>
            <!--end ofage section -->
            <!--type loaction section -->
            <div class="form-group">
                <label for="address">Loaction </label>
                <input type="text" name="location" id="location" class="formControl" placeholder="Enter your location">
            </div>
            <!--type loaction section -->
            <!-- select section -->
            <div class="form-group">
                <p id="quest">Which option best describe your current role</p>
                <select name="role"  id="dropdown" class="formControl">
                    <option value disabled selected >Select current role</option>
                    <option value="student">student</option>
                    <option value="teacher">teacher</option>
                    <option value="job">Job</option>
                    <option value="House wife">House wife</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div class="form-group">
                <p id="quest">Give us rating</p>
                <select name="rating"  id="dropdown" class="formControl">
                    <option value disabled selected >Customer ratings</option>
                    <option value="*">*</option>
                    <option value="**">**</option>
                    <option value="***">***</option>
                    <option value="****">****</option>
                    <option value="*****">*****</option>
                </select>
            </div>
            <!-- end of select section -->

            <!-- radio button section -->
            <div class="form-group">
                <p id="quest">How you come to know about our Atmasampanna's spices  ?</p>
                <label for="">
                    <input type="radio" name="source" value="freinds"
                    class="inputRadio"
                    checked> Friends
                </label>
                <label for="">
                    <input type="radio" name="source" value="tv-ads"
                    class="inputRadio"
                    >TV Ads
                </label>
                <label for="">
                    <input type="radio" name="source" value="social-media"
                    class="inputRadio"
                    > Social Media
                </label>
                <label for="">
                    <input type="radio" name="source" value="newspaper"
                    class="inputRadio"
                    > Newspaper
                </label>
                <label for="">
                    <input type="radio" name="source" value="other"
                    class="inputRadio"
                    > Other
                </label>
            </div>
            <!-- end of radio button -->

            <!-- Checkbox section -->
            <div class="form-group">
                <p id="quest">which product you like Most  ? </p>
                <label for="">
                    <input type="checkbox" name="prefer[]" class="checkbox" value="spices"> spices
                </label>
                <label for="">
                    <input type="checkbox" name="prefer[]" class="checkbox" value="DryFruits"> DryFruits
                </label>
            </div>
            <div class="form-group">
                <p id="quest">Our Spices you like to Buy</p>
                <select name="spices"  id="dropdown" class="formControl">
                    <option value disabled selected >Spices</option>
                    <option value="Haldi Powder (turmeric powder)">Haldi Powder (turmeric powder)</option>
                    <option value="dhania powder (coriander powder)">dhania powder (coriander powder)</option>
                    <option value="Lal Mirch Powder (red chilli powder)">Lal Mirch Powder (red chilli powder)</option>
                    <option value="Atmasampanna Garam Masala">Atmasampanna Garam Masala</option>
                    <option value="Adrak Powder- ???????????? ??????????????? - Dry Ginger Powder">Adrak Powder- ???????????? ??????????????? - Dry Ginger Powder</option>
                    <option value="Amchur - ??????????????? - Dry mango powder">Amchur - ??????????????? - Dry mango powder</option>
                    <option value="cumin seeds (jeera )">cumin seeds (jeera )</option>
                    <option value="Tejpatta Powder- ???????????? ??????????????? ??????????????? - Bay Leaf powder">Tejpatta Powder- ???????????? ??????????????? ??????????????? - Bay Leaf powder</option>
                    <option value="All of them">All of them</option>
                </select>
            </div>
            <div class="form-group">
                <p id="quest">Our DryFruits you like to Buy</p>
                <select name="dryfruits" class="formControl">
                    <option value disabled selected >DryFruits</option>
                    <option value="Kaju">Kaju</option>
                    <option value="Kiahmish">Kiahmish</option>
                    <option value="Nariyal - ?????????????????? - dry coconut">Nariyal - ?????????????????? - dry coconut</option>
                    <option value="Akhrot - ??????????????? - Walnut">Akhrot - ??????????????? - Walnut</option>
                    <option value="Badam">Badam</option>
                    <option value="Pista - ?????????????????? - Pistachio">Pista - ?????????????????? - Pistachio</option>
                    <option value="?????????????????? - Chhuhara - Dry Date">?????????????????? - Chhuhara - Dry Date</option>
                    <option value="Khajoor - ???????????? - Date">Khajoor - ???????????? - Date</option>
                    <option value="All of them">All of them</option>
                </select>
            </div>
            
            <!-- End of checkbox section -->

            <!-- Textarea section -->
            <div class="form-group">
                <p id="quest">Give us your feedback</p>
                <textarea name="feedback"  cols="30" rows="5"  id="feedback" class="textarea" placeholder="Enter your feedback here..."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" id="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>