<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo;

class ModelOutputContentSyncDetectResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskInfo;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var string
     */
    public $safeAnswer;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var traceInfo
     */
    public $traceInfo;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'riskInfo' => 'RiskInfo',
        'riskResult' => 'RiskResult',
        'safeAnswer' => 'SafeAnswer',
        'success' => 'Success',
        'traceInfo' => 'TraceInfo',
    ];

    public function validate()
    {
        if (null !== $this->traceInfo) {
            $this->traceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = $this->riskInfo;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->safeAnswer) {
            $res['SafeAnswer'] = $this->safeAnswer;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->traceInfo) {
            $res['TraceInfo'] = null !== $this->traceInfo ? $this->traceInfo->toArray($noStream) : $this->traceInfo;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskInfo'])) {
            $model->riskInfo = $map['RiskInfo'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['SafeAnswer'])) {
            $model->safeAnswer = $map['SafeAnswer'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TraceInfo'])) {
            $model->traceInfo = traceInfo::fromMap($map['TraceInfo']);
        }

        return $model;
    }
}
