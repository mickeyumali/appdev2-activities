<?php
// I did it in controller


# task 1,
// SELECT * FROM students;
$students = DB::table('students')->get();
return response()->json($students);

#task 2,
// SELECT * FROM students WHERE grade = '10';
$students = DB::table('students')->where('grade', '10')->get();
return response()->json($students);


#task 3,
// SELECT * FROM students WHERE age BETWEEN 15 AND 18;
$students = DB::table('students')->whereBetween('age', [15, 18])->get();
return response()->json($students);


#task 4,
//SELECT * FROM students WHERE city = 'Manila';
$students = DB::table('students')->where('city', 'Manila')->get();
return response()->json($students);

#task 5,
// SELECT * FROM students ORDER BY age DESC;
$students = DB::table('students')->orderBy('age', 'desc')->get();
return response()->json($students);

#task 6,
// SELECT students.*, teachers.name AS teacher_name FROM students LEFT JOIN teachers ON students.teacher_id = teachers.id;
$students = DB::table('students')
            ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
            ->select('students.*', 'teachers.name as teacher_name')
            ->get();

return response()->json($students);


#task 7, 
//  SELECT teachers.*, COUNT(students.id) AS student_count 
//  FROM teachers 
//  LEFT JOIN students ON teachers.id = students.teacher_id 
//  GROUP BY teachers.id; 
$teachers = DB::table('teachers')
            ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
            ->select('teachers.*', DB::raw('COUNT(students.id) as student_count'))
            ->groupBy('teachers.id')
            ->get();

return response()->json($teachers);


#task 8,
// SELECT students.*, subjects.name AS subject_name 
// FROM students 
// INNER JOIN subjects ON students.subject_id = subjects.id;
$students = DB::table('students')
            ->join('subjects', 'students.subject_id', '=', 'subjects.id')
            ->select('students.*', 'subjects.name as subject_name')
            ->get();

return response()->json($students);

#task 9,
// SELECT students.*, AVG(scores.score) AS average_score 
// FROM students 
// LEFT JOIN scores ON students.id = scores.student_id 
// GROUP BY students.id;
$students = DB::table('students')
            ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
            ->select('students.*', DB::raw('AVG(scores.score) as average_score'))
            ->groupBy('students.id')
            ->get();

return response()->json($students);


#task 10,
// SELECT teachers.*, COUNT(students.id) AS student_count 
// FROM teachers 
// LEFT JOIN students ON teachers.id = students.teacher_id 
// GROUP BY teachers.id 
// ORDER BY student_count DESC 
// LIMIT 5;
$teachers = DB::table('teachers')
            ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
            ->select('teachers.*', DB::raw('COUNT(students.id) as student_count'))
            ->groupBy('teachers.id')
            ->orderByDesc('student_count')
            ->limit(5)
            ->get();

return response()->json($teachers);




?>