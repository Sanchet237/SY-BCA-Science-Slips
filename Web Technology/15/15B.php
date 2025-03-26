<?php
$courses = [
    ["name" => "Arts", "level" => "Undergraduate", "capacity" => 120],
    ["name" => "Science", "level" => "Postgraduate", "capacity" => 80],
    ["name" => "Commerce", "level" => "Undergraduate", "capacity" => 100],
    ["name" => "Management", "level" => "MBA", "capacity" => 60]
];

$doc = new DOMDocument('1.0', 'UTF-8');
$doc->formatOutput = true;

$college = $doc->createElement('College');
$doc->appendChild($college);

$coursesElement = $doc->createElement('Courses');
$college->appendChild($coursesElement);

foreach ($courses as $c) {
    $courseElement = $doc->createElement('Course');

    $name = $doc->createElement('Name', $c['name']);
    $courseElement->appendChild($name);

    $level = $doc->createElement('Level', $c['level']);
    $courseElement->appendChild($level);

    $capacity = $doc->createElement('Intake_Capacity', $c['capacity']);
    $courseElement->appendChild($capacity);

    $coursesElement->appendChild($courseElement);
}

$file = 'Course.xml';
$doc->save($file);

echo "XML file created successfully: $file";
?>
