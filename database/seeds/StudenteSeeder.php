<?php
use App\Student;
use Illuminate\Database\Seeder;

class StudenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newStudent = [ [

            'student' => 'Francesco Petrarca',
            'class' => 'A1304',
            'course' => 'Poetica'

        ],
        [
            'student' => 'Luigi Pirandello',
            'class' => 'A1867',
            'course' => 'Drammaturgia'
        ]          
        ];

        foreach ($newStudent as $student) {
            $newStudent = new Student();
            $newStudent->student = $student['student'];
            $newStudent->class = $student['class'];
            $newStudent->course = $student['course'];
            $newStudent->save();
        }
    }
}
