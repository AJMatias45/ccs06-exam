<html>
    <head>
</head>
<body>
    <form action='/compute-grades' method='POST'>
        <div>
            <label>{{ $student_1 }}</label>
            Midterm Grade: <input type='number' name='s1_attempt1' />
            Final Grade: <input type='number' name='s1_attempt2' />
        </div>
        <div>
            <label>{{ $student_2 }}</label>
            Midterm Grade: <input type='number' name='s2_attempt1' />
            Final Grade: <input type='number' name='s2_attempt2' />
        </div>
        <div>
            <label>{{ $student_3 }}</label>
            Midterm Grade: <input type='number' name='s3_attempt1' />
            Final Grade: <input type='number' name='s3_attempt2' />
        </div>
        <div>
            <label>{{ $student_4 }}</label>
            Midterm Grade: <input type='number' name='s4_attempt1' />
            Final Grade: <input type="number" name='s4_attempt2' />
        </div>
        <div>
            <label>{{ $student_5 }}</label>
            Midterm Grade: <input type='number' name='s5_attempt1' />
            Final Grade: <input type='number' name='s5_attempt2' />
        </div>
        <div>
            <input type='submit' />
</div>
</form>
</body>
    </html>
