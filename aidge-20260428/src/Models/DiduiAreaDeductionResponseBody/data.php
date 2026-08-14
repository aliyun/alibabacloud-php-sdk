<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponseBody\data\result;

class data extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatus;

    /**
     * @var int
     */
    public $latencyMs;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modelRequestId;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'attempts' => 'Attempts',
        'code' => 'Code',
        'httpStatus' => 'HttpStatus',
        'latencyMs' => 'LatencyMs',
        'message' => 'Message',
        'modelRequestId' => 'ModelRequestId',
        'reqId' => 'ReqId',
        'result' => 'Result',
        'status' => 'Status',
        'success' => 'Success',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }

        if (null !== $this->latencyMs) {
            $res['LatencyMs'] = $this->latencyMs;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modelRequestId) {
            $res['ModelRequestId'] = $this->modelRequestId;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }

        if (isset($map['LatencyMs'])) {
            $model->latencyMs = $map['LatencyMs'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModelRequestId'])) {
            $model->modelRequestId = $map['ModelRequestId'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
