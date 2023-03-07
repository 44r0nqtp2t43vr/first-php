<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Student no.</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th>Program</th>
            <th>College</th>
        </tr>
        <tr>
            <td>{{ $data[0]->studentid }}</td>
            <td>{{ $data[0]->studentlname }}</td>
            <td>{{ $data[0]->studentfname }}</td>
            <td>{{ substr($data[0]->studentmname, 0, 1)."." }}</td>
            <td>{{ $data[0]->getProgramName->programshortname }}</td>
            <td>{{ $data[0]->getCollegename->collegeshortname }}</td>
        </tr>
    </table>
</body>
</html>
