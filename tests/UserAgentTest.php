<?php

require __DIR__ . '/../vendor/mobiledetect/mobiledetectlib/tests/UserAgentTest.php';

use Orzcc\Agent\Agent;

class UserAgentTestExtended extends UserAgentTest
{
    /**
     * @var Agent
     */
    protected $detect;

    public function setUp()
    {
        $this->detect = new Agent;
    }
}
