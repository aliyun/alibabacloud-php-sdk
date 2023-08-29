<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreateLockResponseBody extends Model
{
    /**
     * @description Code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example {"lockId":12323,"lockStatus":"ACQUIRED"}
     *
     * @var LockStatus
     */
    public $lockStatus;

    /**
     * @description Message
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @example 73201200-4C1A-4FEF-BD6B-C0DA7994FFA2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'lockStatus' => 'LockStatus',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lockStatus) {
            $res['LockStatus'] = null !== $this->lockStatus ? $this->lockStatus->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LockStatus'])) {
            $model->lockStatus = LockStatus::fromMap($map['LockStatus']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
