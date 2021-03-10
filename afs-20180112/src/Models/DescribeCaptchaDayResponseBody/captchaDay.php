<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaDayResponseBody;

use AlibabaCloud\Tea\Model;

class captchaDay extends Model
{
    /**
     * @var int
     */
    public $checkTested;

    /**
     * @var int
     */
    public $direcetStrategyInterception;

    /**
     * @var int
     */
    public $maliciousFlow;

    /**
     * @var int
     */
    public $pass;

    /**
     * @var int
     */
    public $legalSign;

    /**
     * @var int
     */
    public $uncheckTested;

    /**
     * @var int
     */
    public $askForVerify;

    /**
     * @var int
     */
    public $init;

    /**
     * @var int
     */
    public $twiceVerify;
    protected $_name = [
        'checkTested'                 => 'CheckTested',
        'direcetStrategyInterception' => 'DirecetStrategyInterception',
        'maliciousFlow'               => 'MaliciousFlow',
        'pass'                        => 'Pass',
        'legalSign'                   => 'LegalSign',
        'uncheckTested'               => 'UncheckTested',
        'askForVerify'                => 'AskForVerify',
        'init'                        => 'Init',
        'twiceVerify'                 => 'TwiceVerify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkTested) {
            $res['CheckTested'] = $this->checkTested;
        }
        if (null !== $this->direcetStrategyInterception) {
            $res['DirecetStrategyInterception'] = $this->direcetStrategyInterception;
        }
        if (null !== $this->maliciousFlow) {
            $res['MaliciousFlow'] = $this->maliciousFlow;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->legalSign) {
            $res['LegalSign'] = $this->legalSign;
        }
        if (null !== $this->uncheckTested) {
            $res['UncheckTested'] = $this->uncheckTested;
        }
        if (null !== $this->askForVerify) {
            $res['AskForVerify'] = $this->askForVerify;
        }
        if (null !== $this->init) {
            $res['Init'] = $this->init;
        }
        if (null !== $this->twiceVerify) {
            $res['TwiceVerify'] = $this->twiceVerify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return captchaDay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckTested'])) {
            $model->checkTested = $map['CheckTested'];
        }
        if (isset($map['DirecetStrategyInterception'])) {
            $model->direcetStrategyInterception = $map['DirecetStrategyInterception'];
        }
        if (isset($map['MaliciousFlow'])) {
            $model->maliciousFlow = $map['MaliciousFlow'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['LegalSign'])) {
            $model->legalSign = $map['LegalSign'];
        }
        if (isset($map['UncheckTested'])) {
            $model->uncheckTested = $map['UncheckTested'];
        }
        if (isset($map['AskForVerify'])) {
            $model->askForVerify = $map['AskForVerify'];
        }
        if (isset($map['Init'])) {
            $model->init = $map['Init'];
        }
        if (isset($map['TwiceVerify'])) {
            $model->twiceVerify = $map['TwiceVerify'];
        }

        return $model;
    }
}
