<?php
require('table-formatter.php');

// this function accepts one parameter which is a type of Object.

// The data parameter must contain the following elements

// 1. firstName
// 2. middelName
// 3. lastName
// 4. lastName
// 5. studentNumber
// 6. course
// 7. academicYear
// 8. semester 
// 9. yearLevel 
// 10. subject   ...this is a two dimensional array, each array contains the following elements
    //   1. subjectCode
    //   2. subjectDescription
    //   3. yearSection
    //   4. numUnits
    //   5. numdays
    //   6. time
    //   7. room

Class Student_OVRF{
    public $firstName = '';
    public $middelName = '';
    public $lastName = '';
    public $studentNumber = '';
    public $course = '';
    public $academicYear = '';
    public $semester = '';
    public $yearLevel = '';
    public $subjects = Array();
    public $computerFee = '0.00';

    function setName($last, $first, $middle){
        $this->firstName = $first;
        $this->middelName = $middle;
        $this->lastName = $last;
    }

    function setCourse($c){
        $this->course = $c;
    }
    function setStudentNumber($s){
        $this->studentNumber = $s;
    }
    function setAcademicYear($a){
        $this->academicYear = $a;
    }
    function setSemester($se){
        $this->semester = $se;
    }
    function setYearLevel($y){
        $this->yearLevel = $y;
    }
    function setSubjects($su){
        $this->subjects = $su;
    }

    function generateOvrf(){
        $pdf = new PDF_MC_Table('P', 'mm', 'Letter' );
        // first Page
        $pdf->AddPage();
        $pdf->Image('assets/img/cdm-logo.jpg',15,12,16,16);

        $pdf->SetFont('Arial', '', '30');
        $pdf->ln(8);
        $pdf->Cell(21);
        $pdf->Cell(120, 6, "Colegio de Montalban", 0, 0, '');
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->Cell(50, 6, 'REGISTRATION FORM', 1, 0, 'C');
        $pdf->ln(6);
        $pdf->Cell(143);
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->Cell(25, 5, 'SEMESTRAL FEES', 1, 0, 'C');
        $pdf->Cell(10, 5, 'PLAN', 1, 0, 'C');
        $pdf->Cell(15, 5, '', 1, 0, '');
        $pdf->ln(5);
        $pdf->Cell(18);
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(125, 4, "Kasiglahan Village, San Jose, Rodriguez, Rizal Tel No.: (02)2868667/ (02)283959731", 0, 0, '');
        $pdf->Cell(25, 4, "Tuition Fee", 1, 0, '');
        $pdf->Cell(25, 4, "750.00", 1, 0, '');
        $pdf->ln(4);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->Cell(50, 4, "LAST NAME", 1, 0, 'C');
        $pdf->Cell(50, 4, "FIRST NAME", 1, 0, 'C');
        $pdf->Cell(38, 4, "MIDDLE NAME", 1, 0, 'C');
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(25, 4, "Admission Fee", 1, 0, '');
        $pdf->Cell(25, 4, "0.00", 1, 0, '');
        // $pdf->SetWidths(Array(48, 48, 42, 25, 25));
        // $pdf->SetLineHeight(4);
        // $pdf->Row(Array(
        //     'LAST NAME',
        //     'FIRST NAME',
        //     'MIDDLE NAME',
        //     'Admission Fee',
        //     '0.00',
        // ));
        $pdf->ln(4);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', '', '9');
        $pdf->Cell(50, 5, $this->lastName, 1, 0, 'C');
        $pdf->Cell(50, 5, $this->firstName, 1, 0, 'C');
        $pdf->Cell(38, 5, $this->middelName, 1, 0, 'C');
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(25, 5, "Athletic Fee", 1, 0, '');
        $pdf->Cell(25, 5, "50.00", 1, 0, '');

        $pdf->ln(5);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->Cell(27, 4, 'STUDENT NUMBER', 1, 0, 'C');
        $pdf->Cell(47, 4, 'COURSE', 1, 0, 'C');
        $pdf->Cell(26, 4, 'ACADEMIC YEAR', 1, 0, 'C');
        $pdf->Cell(19, 4, 'SEMESTER', 1, 0, 'C');
        $pdf->Cell(19, 4, 'YEAR LEVEL', 1, 0, 'C');
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(25, 4, "Computer Fee", 1, 0, '');
        $pdf->Cell(25, 4, $this->computerFee, 1, 0, '');
        $pdf->ln(4);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', '', '9');
        $pdf->Cell(27, 5, $this->studentNumber, 1, 0, 'C');
        $pdf->Cell(47, 5, $this->course, 1, 0, 'C');
        $pdf->Cell(26, 5, $this->academicYear, 1, 0, 'C');
        $pdf->Cell(19, 5, $this->semester, 1, 0, 'C');
        $pdf->Cell(19, 5, $this->yearLevel, 1, 0, 'C');
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(25, 5, "Cultural Fee", 1, 0, '');
        $pdf->Cell(25, 5, '0.00', 1, 0, '');
        // $pdf->SetFont('Arial', 'B', '9');
        // $pdf->SetLineHeight(5);
        // $pdf->SetWidths(Array(27, 47, 26, 19, 19));
        // $pdf->SetAligns('C');
        // $pdf->Row(Array(
        //     $this->studentNumber,
        //     $this->course,
        //     $this->academicYear,
        //     $this->semester,
        //     $this->yearLevel,
        // ));
        $pdf->ln(5);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->Cell(15, 5, 'CODE', 1, 0, 'C');
        $pdf->Cell(50, 5, 'SUBJECT DESCRIPTION', 1, 0, 'C');
        $pdf->Cell(15, 5, 'YEAR-SEC', 1, 0, 'C');
        $pdf->Cell(15, 5, 'UNITS', 1, 0, 'C');
        $pdf->Cell(13, 5, 'DAYS', 1, 0, 'C');
        $pdf->Cell(15, 5, 'TIME', 1, 0, 'C');
        $pdf->Cell(15, 5, 'ROOM', 1, 0, 'C');
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(25, 5, "Development Fee", 1, 0, '');
        $pdf->Cell(25, 5, '0.00', 1, 0, '');

        $remainingFees = Array(
            array(
                'name'=>'Guidance Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'Handbook Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'Laboratory Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'Library Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'Medical & Dental Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'Registration Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'NSTP Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'School ID Fee',
                'amount'=>'100.00'
            ),
            array(
                'name'=>'',
                'amount'=>''
            ),
            array(
                'name'=>'',
                'amount'=>''
            ),
            array(
                'name'=>'',
                'amount'=>''
            ),
            array(
                'name'=>'',
                'amount'=>''
            ),
        );

        for($x=0; $x < count($this->subjects); $x++){
            $pdf->ln(5);
            $pdf->Cell(5);
            $pdf->SetFont('Arial', '', '7');
            $pdf->Cell(15, 4, $this->subjects[$x]['code'], 1, 0, 'C');
            $pdf->Cell(50, 4, $this->subjects[$x]['subjectDescription'], 1, 0, 'C');
            $pdf->Cell(15, 4, $this->subjects[$x]['yearSec'], 1, 0, 'C');
            $pdf->Cell(15, 4, $this->subjects[$x]['units'], 1, 0, 'C');
            $pdf->Cell(13, 4, $this->subjects[$x]['days'], 1, 0, 'C');
            $pdf->Cell(15, 4, $this->subjects[$x]['time'], 1, 0, 'C');
            $pdf->Cell(15, 4, $this->subjects[$x]['room'], 1, 0, 'C');
            $pdf->Cell(25, 4, $remainingFees[$x]['name'], 1, 0, '');
            $pdf->Cell(25, 4, $remainingFees[$x]['amount'], 1, 0, '');
            // $pdf->Row(Array(
            //     $item['code'],
            //     $item['subjectDescription'],
            //     $item['yearSec'],
            //     $item['units'],
            //     $item['days'],
            //     $item['time'],
            //     $item['room'],
            // ));
        }
        // to have minimum of 12 rows in subjects section
        for($x=sizeof($this->subjects)+1; $x < 12; $x++){
            $pdf->ln(4);
            $pdf->Cell(5);
            $pdf->Cell(15, 4, '', 1, 0, 'C');
            $pdf->Cell(50, 4, '', 1, 0, 'C');
            $pdf->Cell(15, 4, '', 1, 0, 'C');
            $pdf->Cell(15, 4, '', 1, 0, 'C');
            $pdf->Cell(13, 4, '', 1, 0, 'C');
            $pdf->Cell(15, 4, '', 1, 0, 'C');
            $pdf->Cell(15, 4, '', 1, 0, 'C');
            $pdf->Cell(25, 4, $remainingFees[$x]['name'], 1, 0, '');
            $pdf->Cell(25, 4, $remainingFees[$x]['amount'], 1, 0, '');
        }
        // $pdf->Cell(5);
        // $pdf->SetFont('Arial', 'B', '7');
        // $pdf->SetLineHeight(5);
        // $pdf->SetWidths(Array(50, 30));
        // $pdf->SetAligns('L');
        // $pdf->Row(Array(
        //     'ADVISER',
        //     'Total Units',
        // ));
        $pdf->ln(4);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', 'B', '8');
        $pdf->Cell(50, 5, "ADVISER", 1, 0, 'C');
        $pdf->Cell(30, 5, "Total Units", 1, 0, 'C');
        $pdf->SetFont('Arial', 'B', '10');
        $pdf->Cell(15, 9, "3", 1, 0, 'C');
        $pdf->SetFont('Arial', 'B', '8');
        $pdf->Cell(43, 9, "REGISTRAR", 1, 0, '');
        $pdf->SetFont('Arial', 'B', '9');
        $pdf->Cell(25, 5, "TOTAL", 1, 0, 'C');
        $pdf->Cell(25, 5, "1,550.00", 1, 0, 'C');
        $pdf->ln(5);
        $pdf->Cell(5);
        $pdf->Cell(80, 4, "DATE", 1, 0, '');
        $pdf->Cell(58);
        $pdf->SetFont('Arial', '', '8');
        $pdf->Cell(25, 4, "ASSESED BY", 1, 0, '');
        $pdf->SetFont('Arial', '', '5');
        $pdf->Cell(25, 4, "OFFICE OF THE REGISTRAR", 1, 0, '');
        $pdf->ln(4);
        $pdf->Cell(5);
        $pdf->SetFont('Arial', '', '7');
        $pdf->Cell(8, 10, "Note", 1, 0, '');
        $pdf->Cell(130, 10, "OFFICIALLY ENROLLED C/O UNIFAST R.A. 10931", 1, 0, '');
        $pdf->Cell(50, 10, "", 1, 0, '');

        
        $pdf->Output('F', "ovrf.pdf");
    }
}


?>