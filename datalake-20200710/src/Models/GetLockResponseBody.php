<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetLockResponseBody extends Model
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
     * @example {"lockId":123,"lockStatus":"Acquired"}
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
     * @example 558D764F-8C55-49CA-BF38-80EA532FC08F
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
     * @return GetLockResponseBody
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
