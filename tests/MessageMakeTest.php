<?php

include "src/ExampleMessage.php";
include "src/Parser.php";
final class MessageMakeTest
{
    public function test()
    {
        $message = new ExampleMessage();
        $isoMaker = new Parser($message);
        $isoMaker->addMTI('0800');
        $isoMaker->addData(3, '123456');
        $isoMaker->addData(4, '000000001000');
        $isoMaker->addData(7, '1234567890');
        
        return $isoMaker->getISO();
    }

}