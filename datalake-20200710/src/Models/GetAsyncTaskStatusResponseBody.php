<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskStatusResponseBody extends Model
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
     * @description Message
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example Success
     *
     * @var TaskStatus
     */
    public $taskStatus;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'taskStatus' => 'TaskStatus',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = null !== $this->taskStatus ? $this->taskStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = TaskStatus::fromMap($map['TaskStatus']);
        }

        return $model;
    }
}
