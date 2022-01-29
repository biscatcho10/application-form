<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-title">
                <h3 class="lead text-primary m-3">Application Form</h3>
            </div>
            <div class="card-body w-100">
                <form action="backend.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="submitted" value="1" />

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Nationality</label>
                            <input type="text" name="nationality" placeholder="Nationality" class="form-control">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Date of birth</label>
                            <input class="form-control" type="date" name="dateOfBirth">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Social Status</label>
                            <select name="socialStatus" class="form-control">
                                <option value="" selected=""></option>
                                <option value="أعزب">أعزب</option>
                                <option value="خاطب">خاطب</option>
                                <option value="متزوج">متزوج</option>
                                <option value="ارمل">ارمل</option>
                                <option value="مطلق">مطلق</option>
                            </select>
                        </div>

                        <div class="form-group col-6">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control main-element">
                                <option value="" selected=""></option>
                                <option value="ذكر -Male">ذكر -Male</option>
                                <option value="انثي - Female ">انثي - Female </option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Email Address</label>
                            <input type="email" name="emailAddress" placeholder="Email Address" class="form-control">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Phone Number</label>
                            <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Educational Qualification</label>
                        <input type="text" class="form-control" name="educationalQualification" maxlength="150">
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Address</label>
                            <textarea class="form-control" name="addressStreet" rows="1" placeholder="Street" maxlength="255"></textarea>
                        </div>

                        <div class="form-group col-6">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="addressCountry" value="Egypt - مصر" placeholder="Country" maxlength="255">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="addressCity" placeholder="City" maxlength="255">
                        </div>
                        <div class="form-group col-4">
                            <label for="">State</label>
                            <input type="text" class="form-control" name="addressState" placeholder="State" maxlength="255">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Postal Code</label>
                            <input type="text" class="form-control" name="addressPostalCode" value="0" placeholder="Postal Code" maxlength="40">
                        </div>
                    </div>


                    <div class="row">

                        <div class="form-group col-4">
                            <label for="">Job</label>
                            <select name="job[]" class="form-control">
                                <option value="__emptystring__">None</option>
                                <option value="Sales Team Leader">Sales Team Leader</option>
                                <option value="Sales">Sales</option>
                                <option value="Sales Director">Sales Director</option>
                                <option value="Sales Manager">Sales Manager</option>
                                <option value="Business Developer">Business Developer</option>
                                <option value="Account Manager">Account Manager</option>
                                <option value="Account Manager Team Leader">Account Manager Team Leader</option>
                                <option value="Content Creator">Content Creator</option>
                                <option value="SEO Specialist">SEO Specialist</option>
                                <option value="Senior Content Creator">Senior Content Creator</option>
                                <option value="Marketer">Marketer</option>
                                <option value="SEO Content Specialist">SEO Content Specialist</option>
                                <option value="Social Media Moderator">Social Media Moderator</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                                <option value="Graphic Designer Team Leader">Graphic Designer Team Leader</option>
                                <option value="Motion Graphic Designer">Motion Graphic Designer</option>
                                <option value="Video Editor">Video Editor</option>
                                <option value="Videographer">Videographer</option>
                                <option value="Photographer">Photographer</option>
                                <option value="Art Director">Art Director</option>
                                <option value="Web Developer">Web Developer</option>
                                <option value="Wordpress Developer">Wordpress Developer</option>
                                <option value="Wordpress Developer Team Leader">Wordpress Developer Team Leader</option>
                                <option value="Office boy">Office boy</option>
                                <option value="Joker">Joker</option>
                                <option value="HR">HR</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Office Admin">Office Admin</option>
                                <option value="IT / Help Desk">IT / Help Desk</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label for="">Use programs</label>
                            <select name="usePrograms[]" class="form-control">
                                <option value="Photoshop">Photoshop</option>
                                <option value="Illustrator">Illustrator</option>
                                <option value="After effect">After effect</option>
                                <option value="Premiere">Premiere</option>
                                <option value="InDesign">InDesign</option>
                                <option value="SonyVegas">SonyVegas</option>
                                <option value="Microsoft Office">Microsoft Office</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label>Note</label>
                            <input type="text" class="form-control" name="note" maxlength="150">
                        </div>
                    </div>


                    <div class="row">

                        <div class="form-group col-4">
                            <label><span class="label-text">Minimum Salary - الحد الأدنى للراتب</span></label>
                            <div class="field">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="minimumSalary" pattern="[\-]?[0-9,.]*">
                                    <span class="input-group-btn">
                                        <select name="minimumSalaryCurrency" class="form-control">
                                            <option value="EGP" selected="">EGP</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label><span class="label-text">Expected salary - الراتب المتوقع</span></label>
                            <div class="field">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="expectedSalary" pattern="[\-]?[0-9,.]*">
                                    <span class="input-group-btn">
                                        <select name="expectedSalaryCurrency" class="form-control">
                                            <option value="EGP" selected="">EGP</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label><span class="label-text">Last salary - الراتب الاخير</span></label>
                            <div class="field" data-name="lastSalary">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="lastSalary" pattern="[\-]?[0-9,.]*">
                                    <span class="input-group-btn">
                                        <select name="lastSalaryCurrency" class="form-control">
                                            <option value="EGP" selected="">EGP</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Note</label>
                        <input type="file" name="yourCV" class="file pull-right" multiple="" accept=".pdf, image/*">
                    </div>

                    <div class="form-group">
                        <label>Other Details</label>
                        <textarea class="form-control" name="otherDetails" rows="4"></textarea>
                    </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
        </form>
    </div>
    </div>
    </div>
</body>

</html>