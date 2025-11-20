<?php

namespace LORIS\Utils;

class Notification
{
    public function send(string $to, string $subject, string $message): bool
    {
        // EXACT BEHAVIOR YOU WANT: no headers, no from
        return mail($to, $subject, $message);
    }
}
