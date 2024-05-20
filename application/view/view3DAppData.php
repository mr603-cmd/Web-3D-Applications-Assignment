<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>X3D Model Data</title> 
	    <style>
        h2 {
            color:white;
            margin: 5px;
        }
        p {
            color:green;
            margin-left: 5px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }
        .boxModel{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .boxText{
            border: 1px solid rgba(1, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            width: 220px;
            height: auto;
            background-color: #009879;
            text-align: left;
            font-weight: bold;
        }
    </style> 


</head>
<body>
        <div class="boxModel">
                <div class="boxText">
                    <h1><?php echo "Model Title" ?></h1>
                </div>
                <div class="boxText">
                    <h1><?php echo "Creation Method" ?></h1>
                </div>
                <div class="boxText">
                    <h1><?php echo "Brand" ?></h1>
                </div>
                <div class="boxText">
                    <h1><?php echo "Model Subtitle" ?></h1>
                </div>
                <div class="boxText">
                    <h1><?php echo "Model Description" ?></h1>
                </div>
        </div>

    	<?php for ($i=0; $i <count ($data); $i++){ ?>
            <div class="boxModel">
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dModelTitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dCreationMethod'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelTitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelSubtitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelDescription'] ?></h2>
                </div>
            </div>
            

    	<?php } ?>

        <div class="col-sm-8">
            <div class="card-body">
                <div class="card-header">
                    <a href="https://users.sussex.ac.uk/~mr603/3dapp/assignment/index.php/apiinsertfield" class="btn btn-primary btn-responsive">Get a Single Database Field</a>                 
                </div>
            </div>
            <div class="card-body">
                <div class="card-header">
                    <a href="https://users.sussex.ac.uk/~mr603/3dapp/assignment/index.php/apiinsertfield" class="btn btn-primary btn-responsive">Insert a Database Field</a>                 
            </div>
            <div class="card-body">
                <div class="card-header">
                    <a href="https://users.sussex.ac.uk/~mr603/3dapp/assignment/index.php/apiinsertfield" class="btn btn-primary btn-responsive">Update a Database Field</a>                 
            </div>

        </div>
</body>
</html>