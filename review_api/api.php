<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $_POST["obj"];

    $obj = json_decode($result);

    $review = $obj->review;
    $user_id = $obj->user_id;
    $product_id = $obj->product_id;
    if(($review!="")&&($user_id!="")&&($product_id!="")){
        $con = mysqli_connect("localhost","root","","product_review");
        $sql = "INSERT INTO review  (user_id,product_id,review) VALUES ('$user_id','$product_id','$review')";
        $query=mysqli_query($con,$sql);
        if($query){
            $response = ['status' => 'success', 'message' => 'Review submitted successfully'];
            echo json_encode ($response);
        }else{
            $response = ['status' => 'fail', 'message' => 'Review submitted successfully'];
            echo json_encode ($response);
        }
    }else{
        $response = ['status' => 'error', 'message' => 'Missing required fields'];
        echo json_encode ($response);

    }
}else{
    $response = ['status' => 'error', 'message' => 'Invalid request method'];
}
// }else{
//     $response = ['status' => 'error', 'message' => 'Missing required fields'];
//     echo $response;
// }
// }else{
//     $response = ['status' => 'error', 'message' => 'Invalid request method'];
//     echo $response;
// }
?>