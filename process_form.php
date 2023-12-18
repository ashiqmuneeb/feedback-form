<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $comment = $_POST['comment'];
    ?>

    <div class="submitted-data">
        <h2>Submitted Feedback</h2>
        <p><strong>Name:</strong><?php echo $name; ?></p>
        <p><strong>Email:</strong><?php echo $email; ?></p>
        <p><strong>Issue:</strong><?php echo $issue; ?></p>
        <p><strong>Comment:</strong></p>
        <div class="comment-display"><?php echo $comment; ?> </div>
        <br>
        <button onclick="goBack()">Edit</button>
</div>

<script>
    function goBack(){
        window.history.back();
    }
    </script>
</body>
</html>