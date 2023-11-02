<?php

class Exam
{
    public $exam_name;
    public $duration;
    public $examiner;
    public $total;
    public $result;
    public $time_left;


    public function __construct($exam_name, $duration, $examiner)
    {
        $this->exam_name = $exam_name;
        $this->duration = $duration;
        $this->examiner = $examiner;
    }
}

$exam = new Exam('Predegree', 40, 'promise');


?>
<div>
    <h1>Generating reciept</h1>
    <?php echo $exam->exam_name; ?> <br />
    <?php echo $exam->duration; ?><br />
    <?php echo $exam->examiner; ?><br />
</div>