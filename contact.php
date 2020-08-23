
<?php include 'head.php'; ?>
<div class="row">
    <div class="col-4">
        <div class="company_address">
            <h2>Clinic Address</h2>
            <p>110 West 13th Street</p>
            <p>New York</p>
            <p>Phone:(00) 222 666 444</p>
            <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>info@bsc.com</span></p>

        </div>
    </div>
    <div class="col-8">
        <div class="col-sm-6 p-5">
            <form role="form"  method="POST">
                <legend>Contact</legend>
                <div class="form-group">
                    <label for="InputName">Your Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>

                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Your Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required>

                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Message</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>

                    </div>
                </div>

                <input type="button" name="submit" onclick="javascript: validateContact()" id="submit" value="Submit" class="btn btn-info pull-right">
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

