<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody\timeVariables;

class ListTaskFlowTimeVariablesResponseBody extends Model
{
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
     * @var timeVariables
     */
    public $timeVariables;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'timeVariables' => 'TimeVariables',
    ];

    public function validate()
    {
        if (null !== $this->timeVariables) {
            $this->timeVariables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = null !== $this->timeVariables ? $this->timeVariables->toArray($noStream) : $this->timeVariables;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TimeVariables'])) {
            $model->timeVariables = timeVariables::fromMap($map['TimeVariables']);
        }

        return $model;
    }
}
