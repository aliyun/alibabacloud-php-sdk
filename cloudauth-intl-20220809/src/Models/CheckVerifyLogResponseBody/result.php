<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $interruptPage;

    /**
     * @var string[]
     */
    public $logInfo;

    /**
     * @var string
     */
    public $logStatisticsInfo;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $verifyErrorCode;

    /**
     * @var string
     */
    public $verifyStatus;
    protected $_name = [
        'extInfo' => 'ExtInfo',
        'interruptPage' => 'InterruptPage',
        'logInfo' => 'LogInfo',
        'logStatisticsInfo' => 'LogStatisticsInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'verifyErrorCode' => 'VerifyErrorCode',
        'verifyStatus' => 'VerifyStatus',
    ];

    public function validate()
    {
        if (\is_array($this->logInfo)) {
            Model::validateArray($this->logInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        if (null !== $this->interruptPage) {
            $res['InterruptPage'] = $this->interruptPage;
        }

        if (null !== $this->logInfo) {
            if (\is_array($this->logInfo)) {
                $res['LogInfo'] = [];
                $n1 = 0;
                foreach ($this->logInfo as $item1) {
                    $res['LogInfo'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->logStatisticsInfo) {
            $res['LogStatisticsInfo'] = $this->logStatisticsInfo;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->verifyErrorCode) {
            $res['VerifyErrorCode'] = $this->verifyErrorCode;
        }

        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        if (isset($map['InterruptPage'])) {
            $model->interruptPage = $map['InterruptPage'];
        }

        if (isset($map['LogInfo'])) {
            if (!empty($map['LogInfo'])) {
                $model->logInfo = [];
                $n1 = 0;
                foreach ($map['LogInfo'] as $item1) {
                    $model->logInfo[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LogStatisticsInfo'])) {
            $model->logStatisticsInfo = $map['LogStatisticsInfo'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['VerifyErrorCode'])) {
            $model->verifyErrorCode = $map['VerifyErrorCode'];
        }

        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }

        return $model;
    }
}
