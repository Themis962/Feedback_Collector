<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback Form</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1>Feedback Form</h1>
    <form id="feedbackForm" action="submit.php" method="POST" onsubmit="return validateForm();">
      <label for="name">Name (optional)</label>
      <input type="text" id="name" name="name" />

      <label for="email">Email (optional)</label>
      <input type="email" id="email" name="email" />

      <label for="message">Message *</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit Feedback</button>
    </form>

    <h2>Previous Feedback</h2>
    <div class="feedback-list">
      <?php
        $file = "feedback.txt";
        if (file_exists($file)) {
          $entries = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          foreach ($entries as $entry) {
            echo "<div class='feedback-entry'>" . nl2br(htmlspecialchars($entry)) . "</div><hr>";
          }
        } else {
          echo "<p>No feedback yet.</p>";
        }
      ?>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
</html>