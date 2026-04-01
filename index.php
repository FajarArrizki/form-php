<?php 
// 1. Sertakan Class User (PBO) dari File Partial
include 'partials/User.php';

// Inisialisasi variabel $user menjadi null
$user = null;

// 2. Logika Pemrosesan Form
if (isset($_POST['submit'])) {
    // Instansiasi objek baru dari class User
    $user = new User(
        $_POST['firstname'], 
        $_POST['lastname'], 
        $_POST['phone'], 
        $_POST['address']
    );
}

include 'partials/header.php'; 
?>

<div class="form-wrapper" style="flex-direction: column;">
    <div class="glass-card form-card">
        
        <div class="form-header">
            <h2>User Information</h2>
            <p>Please fill out the form below</p>
        </div>
        
        <!-- Form input data -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="3" required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?></textarea>
            </div>
            
            <button type="submit" name="submit" class="submit-btn" id="submit-btn">Submit</button>
        </form>

    </div> <!-- Close form-card -->

    <!-- Menampilkan hasil input di kontener terpisah di bawah form -->
    <?php include 'partials/result.php'; ?>


</div> <!-- Close form-wrapper -->


<?php include 'partials/footer.php'; ?>
