<?php
// Include database connection file
include 'components/connect.php';

// Fetch data from the database
$sql = "SELECT * FROM quiz_questions"; // Change 'your_table' to the actual table name
$result = $conn->query($sql);

// Check if there are any rows returned

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Java MCQ Quiz</title>
  <!-- Include your CSS files here -->
</head>
<body>

  <div class="quiz-container">
    <!-- Display Quiz -->
    <div id="quiz" class="question" style="display: none;"></div>
    <div id="options" class="options" style="display: none;"></div>
    <button id="nextBtn" style="display: none;" onclick="nextQuestion()">Next</button>

    <!-- Result Display -->
    <div id="result" style="display: none;"></div>

    <!-- Certificate Section -->
    <div id="certificate" style="display: none;">
      <h2>Congratulations, <span id="studentNameDisplay"></span>!</h2>
      <p>This is to certify that <span id="certificateName"></span> has successfully completed the Java MCQ Quiz.</p>
      <button onclick="restartQuiz()">Restart Quiz</button>
      <br>
      <!-- Add a button to download certificate if needed -->
    </div>

    <!-- Retest Section -->
    <div id="retest" style="display: none;">
      <h2>Retest Required</h2>
      <p>Your score is below the passing threshold. Please retest to improve your score.</p>
      <button onclick="restartQuiz()">Retest</button>
    </div>

  </div>

  <script>
    // Pass questions fetched from PHP to JavaScript
    var questions = <?php echo json_encode($questions); ?>;

    // Include your quiz.js script here

    // Start the quiz directly
    fetchQuestionsFromDatabase();
  </script>
</body>
</html>

<?php

?>
