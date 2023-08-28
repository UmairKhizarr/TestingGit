<?php
class Calculator
{
   public function ADD($val,$val2)
   {
      return $val + $val2;
   }
   public function Substract($val,$val2)
   {
      return $val - $val2;
   }
   public function Multiply($val,$val2)
   {
      return $val *$val2;
   }
   public function divide($val,$val2)
   {
      if($val2 == 0)
      {
        echo "Error Number Can't be Divied By Zero";
      }
      else
      {
        return $val/$val2;
      }
   }
   
}

$resultValue = "";
if(isset($_POST['btnMethod']))
{
    $method = $_POST['btnMethod'];
    $frstVal = $_POST["frstNo"];
    $secVal = $_POST["secNo"];

    if(empty($frstVal) || empty($secVal))
    {
        // echo "Enter Number in the respective field...";
        $resultValue = "Error... <br>Enter Number in the respective field...";
    }
    else
    {
        $obj1 = new Calculator();

        if($method == "Add")
        {
           $result = $obj1->ADD($frstVal,$secVal);
           $resultValue = "Additon of these Two Number is " . $result;
        //    echo "Additon of these Two Number is " . $result;
        }
        else if($method == "subtract")
        {
            $result = $obj1->Substract($frstVal,$secVal);
            $resultValue = "Subtraction of these number are " . $result;
            // echo "Subtraction of these number are " . $result;
            
        }
        else if($method == "multiply")
        {
            $result = $obj1->Multiply($frstVal,$secVal);
            $resultValue = "Multiplication of these number are " . $result;
            // echo "Multiplication of these number are " . $result; 
        }
        else if($method == "divide")
        {
            $result = $obj1->divide($frstVal,$secVal);
            $resultValue = "Division of these number are " . $result;
            // echo "Division of these number are " . $result;
        }
    }    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" action="index.php">
                <h1 class="h1 mt-5">Simple Calculator</h1>
                <label for="frstNo">First Number</label>
                <input type="number" placeholder="Enter a Number" class="form-control mt-3" id="frstNo" name="frstNo">
                <label for="secNo" class="label mt-3">Second Number</label>
                <input type="number" placeholder="Enter Another Number" class="form-control mt-2" id="secNo"
                    name="secNo">

                    <label class="mt-2">Result<br><?php echo $resultValue?></label>
                <div class="btns mt-4">
                    <button type="submit" name="btnMethod" class="btn btn-primary px-4" value="Add">+</button>
                    <button type="submit" name="btnMethod" class="btn btn-secondary px-4" value="subtract">-</button>
                    <button type="submit" name="btnMethod" class="btn btn-success px-4" value="multiply">*</button>
                    <button type="submit" name="btnMethod" class="btn  btn-danger px-4" value="divide">/</button>
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
   
</body>
</html>