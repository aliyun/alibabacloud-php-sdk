<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetAICoachTaskSessionResourceUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $audioUsage;

    /**
     * @var int
     */
    public $deductionStatus;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $tokenUsage;
    protected $_name = [
        'audioUsage' => 'audioUsage',
        'deductionStatus' => 'deductionStatus',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId' => 'requestId',
        'success' => 'success',
        'tokenUsage' => 'tokenUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioUsage) {
            $res['audioUsage'] = $this->audioUsage;
        }

        if (null !== $this->deductionStatus) {
            $res['deductionStatus'] = $this->deductionStatus;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->tokenUsage) {
            $res['tokenUsage'] = $this->tokenUsage;
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
        if (isset($map['audioUsage'])) {
            $model->audioUsage = $map['audioUsage'];
        }

        if (isset($map['deductionStatus'])) {
            $model->deductionStatus = $map['deductionStatus'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['tokenUsage'])) {
            $model->tokenUsage = $map['tokenUsage'];
        }

        return $model;
    }
}
