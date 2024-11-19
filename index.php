<?php


$status = readline("Iltimos Qo'shish, Ayirish, Ko'paytirish,Bo'lish shulardan birini tanlang va yozing: ");


// Agar terminalda Qo'shish degan yozsangiz qo'shish amaliga o'tadi agar Ayirish deb yozsangiz  Ayirish amali bajariladi va hokazolar



// Qo'shish Amali
if ($status === "Qo'shish") {
    $number1 = readline("Iltimos raqam kiriting ");
    $number2 = readline("Iltimos raqam kiriting ");

    if ($number1 && $number2) {
        $qoshish = $number1 + $number2;
        echo  "Javob " . $qoshish;
    }
}

// Ayirish Amali
if ($status === "Ayirish") {

    $number1 = readline("Iltimos raqam kiriting ");
    $number2 = readline("Iltimos raqam kiriting ");

    if ($number1 && $number2) {
        $ayirish = $number1 - $number2;
        echo "Javob " . $ayirish;
    }
}


// Ko'paytirish amali


if ($status === "Ko'paytirish") {
    $number1 = readline("Iltimos raqam kiriting ");
    $number2 = readline("Iltimos raqam kiriting ");

    if ($number1 && $number2) {
        $kopaytirish = $number1 * $number2;
        echo "Javob " . $kopaytirish;
    }
}


// Bo'lish amali

if($status === "Bo'lish")
{
    $number1 = readline('Iltimos raqam kiriting ');
    $number2 = readline("Iltimos raqam kiriting ");


    if($number1 && $number2)
    {
        $bolish = $number1 / $number2;
        echo "Javob  " . $bolish;
    }
}
