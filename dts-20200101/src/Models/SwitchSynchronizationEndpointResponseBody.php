<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SwitchSynchronizationEndpointResponseBody extends Model
{
    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example 3232F84C-C961-4811-B014-4EA7A27C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The task ID. You must specify the task ID when you call the [DescribeEndpointSwitchStatus](~~135598~~) operation to query the execution status of the task.
     *
     * @example 11****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
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
     * @return SwitchSynchronizationEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
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
