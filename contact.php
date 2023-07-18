<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
</head>
<body>
  <h1 style="text-align: center;">Contact Us</h1>
  <form action="submit_form.php" method="POST" style="max-width: 400px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
    <label for="name" style="display: block; margin-bottom: 10px;">Name:</label>
    <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

    <label for="email" style="display: block; margin-bottom: 10px;">Email:</label>
    <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

    <label for="message" style="display: block; margin-bottom: 10px;">Message:</label>
    <textarea id="message" name="message" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical;"></textarea>

    <input type="submit" value="Submit" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
  </form>
</body>
</html>
