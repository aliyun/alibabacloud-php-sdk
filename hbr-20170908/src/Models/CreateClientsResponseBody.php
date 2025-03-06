<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateClientsResponseBody\instanceStatuses;
use AlibabaCloud\Tea\Model;

class CreateClientsResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The status of the ECS instance. If you specify more than one instance IDs in the request and the status of an ECS instance does not meet the requirements to install an HBR client, an error message is returned based on the value of this parameter.
     *
     * @var instanceStatuses
     */
    public $instanceStatuses;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 4A8A9AE4-F798-5E6D-853E-10F9F5A1BD4E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the asynchronous job. You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *
     * @example t-000h9x5t02vhyksf1x7k
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'             => 'Code',
        'instanceStatuses' => 'InstanceStatuses',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'taskId'           => 'TaskId',
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
        if (null !== $this->instanceStatuses) {
            $res['InstanceStatuses'] = null !== $this->instanceStatuses ? $this->instanceStatuses->toMap() : null;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceStatuses'])) {
            $model->instanceStatuses = instanceStatuses::fromMap($map['InstanceStatuses']);
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
