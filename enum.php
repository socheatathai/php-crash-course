<?php

enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::MONDAY;

if($today == DaysOfWeek::SUNDAY) {
    echo "Today is Sunday\n";
} else {
    echo "Today is not Sunday\n";
}