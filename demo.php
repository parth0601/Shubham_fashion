<!DOCTYPE html>
<html>
<head>
    <title>Data Insertion</title>
    <style>
        .flash-window {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            z-index: 9999;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                event.preventDefault(); // Prevent form submission
                var formData = $(this).serialize(); // Get form data

                // Perform AJAX request
                $.ajax({
                    url: 'insert.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Show flash window
                        $('.flash-window').fadeIn().delay(3000).fadeOut();
                    },
                    error: function() {
                        alert('Error occurred while inserting data.');
                    }
                });
            });
        });
    </script>
</head>
<body> 
  

    <form>
        <!-- Your form fields here -->
        <input type="submit" value="Submit">
    </form>

    <!-- Flash Window -->
    <div class="flash-window">
        <h2>Data Inserted Successfully!</h2>
    </div>
</body>
</html>
