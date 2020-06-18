<?php 
    include_once 'database.inc.php';

    function setComment ($conn) {
        if (isset($_POST['Submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            $sql="INSERT INTO comments(name, email, comment) VALUES('$name', '$email', '$comment')";
            $result = $conn->query($sql);

        }
    }
    
    function getComment ($conn) {
        $sql = "SELECT *FROM comments ORDER BY comments.date DESC";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<ul class='comment-list'>
                        <li class='comment'>
                            <div class='comment-body'>
                                <h3><span class='fa fa-user-circle-o'></span>" .$row ['name']. "</h3>
                                <div class='meta'>
                                    <span class='fa fa-calendar-o'></span>" .$row ['date']. 
                                "</div>
                                <p>" .nl2br($row ['comment']). "</p>
                            </div>
                        </li>
                    </ul>";
            }
        }
        else {
            echo "<h3>No Comments found !</h3>";
        }
    }

?>
