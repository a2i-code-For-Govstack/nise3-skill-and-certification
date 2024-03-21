<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="p-0 m-0">
    <p class="p-0 m-0">
        Dear {{ strtoupper(@$email_data['name']) }},
        &nbsp;
    </p>

    <p> 
        You have applied to {{@$email_data['course']}} course, <br>
        Thank you so much for enrolling to this course. <br>
        we will inform you very soon your admission status <br>
        
        Best regards,  <br>
        {{env('APP_NAME')}} <br>
    </p>
</div>


</body>
</html>
