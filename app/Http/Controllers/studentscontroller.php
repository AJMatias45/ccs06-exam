<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentscontroller extends Controller
{
    public function start()
    {
        return view('begin');
    }

    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('enter-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageScore($score1, $score2)
    {
        $average = ($score1 + $score2) / 2;
        return round($average, 2);
    }
    protected function Remarks($average)
    {
        if($average >= 75){
            return 'PASSED';
        }
        else{
            return 'FAILED';
        }
    }
    public function computePower(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        $s1_average = $this->computeAverageScore($request->s1_attempt1, $request->s1_attempt2);
        $s2_average = $this->computeAverageScore($request->s2_attempt1, $request->s2_attempt2);
        $s3_average = $this->computeAverageScore($request->s3_attempt1, $request->s3_attempt2);
        $s4_average = $this->computeAverageScore($request->s4_attempt1, $request->s4_attempt2);
        $s5_average = $this->computeAverageScore($request->s5_attempt1, $request->s5_attempt2);

        $s1_remark = $this->Remarks($s1_average);
        $s2_remark = $this->Remarks($s2_average);
        $s3_remark = $this->Remarks($s3_average);
        $s4_remark = $this->Remarks($s4_average);
        $s5_remark = $this->Remarks($s5_average);

        return view('compute-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // Student 1 attempts
            's1_attempt1' => $request->s1_attempt1,
            's1_attempt2' => $request->s1_attempt2,
            's1_average' => $s1_average,
            's1_remark' => $s1_remark,
            // Student 2 attempts
            's2_attempt1' => $request->s2_attempt1,
            's2_attempt2' => $request->s2_attempt2,
            's2_average' => $s2_average,
            's2_remark' => $s2_remark,
            // Student 3 attempts
            's3_attempt1' => $request->s3_attempt1,
            's3_attempt2' => $request->s3_attempt2,
            's3_average' => $s3_average,
            's_3remark' => $s3_remark,
            // Student 4 attempts
            's4_attempt1' => $request->s4_attempt1,
            's4_attempt2' => $request->s4_attempt2,
            's4_average' => $s4_average,
            's4_remark' => $s4_remark,
            // Student 5 attempts
            's5_attempt1' => $request->s5_attempt1,
            's5_attempt2' => $request->s5_attempt2,
            's5_average' => $s5_average,
            's5_remark' => $s5_remark
        ]);
    }
}
