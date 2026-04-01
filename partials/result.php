<?php if ($user !== null): ?>
    <div class="glass-card form-card result-card" style="margin-top: 2rem;">
        <div class="form-header">
            <span class="result-badge">Success Submission</span>
            <h2>Summary Information</h2>
            <p>Data linked to your PBO User Object</p>
        </div>

        <div class="result-area">
            <div class="result-field">
                <span class="result-label">Full Name</span>
                <span class="result-value"><?php echo $user->getFullName(); ?></span>
            </div>
            
            <div class="result-field">
                <span class="result-label">Phone Number</span>
                <span class="result-value"><?php echo $user->phone; ?></span>
            </div>
            
            <div class="result-field">
                <span class="result-label">Address</span>
                <span class="result-value"><?php echo $user->address; ?></span>
            </div>

            <a href="index.php" class="reset-link">Reset form submission</a>
        </div>
    </div>
<?php endif; ?>


