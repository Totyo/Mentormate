<?
//Basicly the core of M is the first half of the letter. So, I separeted the first half in four smaller part.
//Firstly, I've done the task with just one M and after that I added a second one.
//The tricky moment here are the rows, and that's because my functions are chained to an exact row(ex. $this->showM() <-- it calls just one row)
class LetterM{
  private $i;
  private $n;



  public function showMTwice($n){
    $this->n = $n;

    echo "N=".$this->n;
    echo "<br>";
    for($i=0; $i<=$n; $i++){

      $this->i = $i;

      $this->showM();
      $this->showM();
      echo "<br>";
    }
  }

  public function  showM(){
    $n = $this->n;
    $i = $this->i;

    $this->firstPartOfM();

    $this->secondPartOfM();

    $this->thirdPartOfM();

    $this->fourthPartOfM();

    //--------------------
    if($i <= $n/2){
      echo "-";
    }else{
      echo "*";
    }
    //--------------------

    $this->fourthPartOfM();

    $this->thirdPartOfM();

    $this->secondPartOfM();

    $this->firstPartOfM();





  }

  private function firstPartOfM(){
    $n = $this->n;
    $i = $this->i;
    for($j = 0; $j<$n-$i; $j++){
      echo "-";
    }
  }

  private function secondPartOfM(){
    $n = $this->n;
    $i = $this->i;
    for($j = 0; $j<$n; $j++){
      echo "*";
    }
  }

  private function thirdPartOfM(){
    $n = $this->n;
    $i = $this->i;
    if($i <= $n/2){
      for($j = 0; $j<2*$i; $j++){
        echo "*";
      }

    }else{
      $x = floor($i-(floor($n/2 +1)));

      for($j = 0; $j<1+(2*$x); $j++){
        echo "-";
      }

    }
  }

  private function fourthPartOfM(){
    $n = $this->n;
    $i = $this->i;
    if($i <= $n/2){
      for($j = 0; $j<(floor($n/2)-$i); $j++){
        echo "-";
      }

    }else{
      $x = $n-1;
      $y = $i - (floor($n/2)+1);

      for($j = 0; $j<$x-$y; $j++){
        echo "*";
      }

    }
  }

}

$obj = new LetterM();
$obj->showMTwice(7);

?>
