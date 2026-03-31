# Form PHP Project

This is a simple PHP project to build a data submission form.  
The project uses PHP, HTML, and Vanilla CSS.

## Repository

GitHub repository:

```bash
https://github.com/FajarArrizki/form-php.git
```

## Getting Started

### 1. Clone the repository

Use this command to download the project to your computer. Make sure you open your terminal inside your Local Server directory (e.g., `C:\xampp\htdocs` or `C:\laragon\www`):

```bash
git clone https://github.com/FajarArrizki/form-php.git
```

### 2. Start the Local Server

Open your XAMPP or Laragon control panel and start the **Apache** service.

### 3. Open in Browser

Visit the URL in your browser to view the project:
[http://localhost/form-php](http://localhost/form-php)

*(Note: If your folder name is different, change `form-php` to match your folder name).*

## Branch Workflow

Each member should create and use their own branch before starting work.

Suggested branch names:

- `khalimatus-saharani-pramudyah`
- `salsabila-khairunnisa-lumbantobing`
- `fajar-arrizki`

### Step 1. Check the current branch

Before creating a new branch, check which branch is currently active:

```bash
git branch --show-current
```

### Step 2. Create your own branch

Choose the branch name that matches your name:

For Khalimatus:

```bash
git checkout -b khalimatus-saharani-pramudyah
```

For Salsabila:

```bash
git checkout -b salsabila-khairunnisa-lumbantobing
```

For Fajar:

```bash
git checkout -b fajar-arrizki
```

### Step 3. Make your changes in your own branch

After switching to your branch, update the `index.php` and `styles/main.css` files according to your assigned task (e.g., HTML structure, PHP logic, or CSS styling).

### Step 4. Check changed files

```bash
git status
```

### Step 5. Add files to staging

```bash
git add .
```

### Step 6. Create a commit

Example:

```bash
git commit -m "feat: add form HTML structure"
```

### Step 7. Push to your own branch

Push your work to the same branch you created earlier.

For Khalimatus:

```bash
git push -u origin khalimatus-saharani-pramudyah
```

For Salsabila:

```bash
git push -u origin salsabila-khairunnisa-lumbantobing
```

For Fajar:

```bash
git push -u origin fajar-arrizki
```

### Step 8. Update the `main` branch

After your branch has been pushed, the changes should also be added to the `main` branch.

Recommended workflow:

1. Push your personal branch first.
2. Open a Pull Request from your branch to `main` on GitHub.
3. Review the changes.
4. Merge the branch into `main`.

If you are updating `main` locally after the merge, use:

```bash
git checkout main
git pull origin main
```

If the repository owner wants to merge directly from a local machine, merge each completed branch into `main` one by one:

```bash
git checkout main
git pull origin main
git merge khalimatus-saharani-pramudyah
git merge salsabila-khairunnisa-lumbantobing
git merge fajar-arrizki
git push origin main
```

Only merge branches that are finished and already reviewed. If there is a conflict, resolve it first before continuing to the next branch. **Since everyone is editing `index.php` and `main.css`, pay close attention to git merge conflicts.**

### Important Notes

- Do not rename your branch to `main` if you want to push to your personal branch.
- Create the branch first, then work, then commit, then push to the same branch.
- The branch name in `git push` must match the branch name created with `git checkout -b`.
- After updating your personal branch, the final approved changes should also be merged into `main`.

## Project Structure

Main folders and files used in this PHP project:

```bash
.
|-- partials/
|   |-- header.php
|   `-- footer.php
|-- styles/
|   `-- main.css
|-- index.php
`-- README.md
```

### Structure Explanation

- `partials/`
  Stores modular PHP components that can be reused across the project.
  - `header.php`: Contains the navigation bar, `<head>`, and CSS links.
  - `footer.php`: Contains the footer and closing `</body>` HTML tags.

- `styles/`
  Stores CSS files.
  - `main.css`: Global styling for the project.

- `index.php`
  The main landing page and entry point of the project. **The HTML form and the PHP logic to process the form will be placed inside this single file.**

- `README.md`
  Documentation for the project workflow.

## What Should Be Built

The main task in this project is to build a functional HTML form that processes and displays user input using PHP.

The form must contain the following fields:

- First Name
- Last Name
- Phone Number
- Address
- Submit Button

**Form Output:**
After the user clicks the Submit button, the submitted data (First Name, Last Name, Phone Number, and Address) must be displayed directly below the form on the same page.

## Development Workflow

Follow this workflow when building the form:

### 1. Edit `index.php`

All members will work inside the `index.php` file to build the form layout and process the PHP submission.

Example:
```php
<?php include 'partials/header.php'; ?>

<main class="form-container">
  <h1>Data Submission Form</h1>
  
  <!-- Form HTML goes here -->
  <form method="POST" action="">
    <label>First Name</label>
    <input type="text" name="first_name" required>
    <!-- Add other fields (Last Name, Phone, Address) & Submit Button -->
  </form>

  <!-- Form Output PHP Logic goes here -->
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Process form data and display output below the form
      echo "<div class='output-result'>";
      echo "<h3>Submitted Data:</h3>";
      echo "<p>First Name: " . htmlspecialchars($_POST['first_name']) . "</p>";
      // Display other fields
      echo "</div>";
  }
  ?>
</main>

<?php include 'partials/footer.php'; ?>
```

### 2. Add styling in `main.css`

Place all your CSS code inside `styles/main.css`. Coordinate your class names to avoid conflicting with other team members' designs.

Example:
```css
.form-container { ... }
.form-container form { ... }
.form-container input { ... }
.output-result { ... }
```

## Render Flow

The application flow is:

Browsing to `localhost/form-php/index.php` -> Loads `header.php` -> Renders the HTML Form -> Processes PHP `$_POST` (if submitted) -> Displays Output Below Form -> Loads `footer.php`

## Notes

- This project uses pure PHP, HTML, and Vanilla CSS.
- Ensure proper use of `htmlspecialchars()` when displaying form output to prevent XSS attacks.
- **Merge Conflicts:** Because everyone will be editing `index.php` and `main.css`, please coordinate with your team when merging to Main to securely handle merge conflicts.
