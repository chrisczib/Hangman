<?php  
    $conn = new mysqli("localhost", "root", "", "hangman");
    if($conn->connect_errno){
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    $query = "SELECT id FROM words";
    $ids = array();
    if ($result = $conn->query($query)) {
        while ($obj = $result -> fetch_object()){
            $ids[] = $obj->id;    
            json_encode($ids);
        }
    }else{
        echo "0 results";
    }
    $conn->close();

    $json = json_encode ( $ids, JSON_FORCE_OBJECT );
?>

<script src="jquery-3.6.0.min.js" type="text/javascript"></script>

<script type="text/javascript">
var json_obj = jQuery.parseJSON (<?php echo $json; ?>);
</script>

