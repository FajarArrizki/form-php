<?php include 'partials/header.php'; ?>

<div class="form-wrapper">
    <div class="glass-card form-card">
        
        <div class="form-header">
            <h2>User Information</h2>
            <p>Please fill out the form below</p>
        </div>
        
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>
            
            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>

        <?php if ($user !== null): ?>
            <div class="result-area">
                <p>Hi, my name is <strong><?php echo $user->getFullName(); ?></strong></p>
                <p>Phone Number : <?php echo $user->getPhoneNumber(); ?></p>
                <p>Address : <?php echo $user->getAddress(); ?></p>
                <a href="" class="reset-link">Reset</a>
            </div>
        <?php endif; ?>

    </div>
</div>


<?php include 'partials/footer.php'; ?>