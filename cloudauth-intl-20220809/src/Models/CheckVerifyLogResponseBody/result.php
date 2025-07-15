<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {}
     *
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
     * @example {
     * "faceOverTimes": 0,
     * "hasFaceOverTimes": false,
     * "hasFacePermissionRefuse": false,
     * "hasOcrEdit": true,
     * "hasOcrEditOverTimes": false,
     * "hasOcrOverTimes": true,
     * "hasOcrPermissionRefuse": false,
     * "ocrEditOverTimes": 0,
     * "ocrEditTimes": 1,
     * "ocrOverTimes": 1,
     * "pageStayTimeInfo": {
     * "LOADING": "1615",
     * "OCR_SCAN": "37446",
     * "OCR_RESULT": "1338",
     * "FACE": "8707"
     * }
     * }
     *
     * @var string
     */
    public $logStatisticsInfo;

    /**
     * @example Y
     *
     * @var string
     */
    public $passed;

    /**
     * @example 200
     *
     * @var string
     */
    public $subCode;

    /**
     * @example 1001
     *
     * @var string
     */
    public $verifyErrorCode;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->interruptPage) {
            $res['InterruptPage'] = $this->interruptPage;
        }
        if (null !== $this->logInfo) {
            $res['LogInfo'] = $this->logInfo;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
                $model->logInfo = $map['LogInfo'];
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
