<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyTaskInfoResponseBody extends Model
{
    /**
     * @description The error code for the failed task. It is the same as that of the ModifyTaskInfo operation.
     *
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the failed task. The operation returns results after a task fails.
     *
     * @example ""
     *
     * @var string
     */
    public $errorTaskId;

    /**
     * @description The request ID.
     *
     * @example 6163731A-XXXX-XXXX-B934-3388DE70C217
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of successful tasks.
     *
     * @example 1
     *
     * @var string
     */
    public $successCount;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorTaskId'  => 'ErrorTaskId',
        'requestId'    => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorTaskId) {
            $res['ErrorTaskId'] = $this->errorTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTaskInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorTaskId'])) {
            $model->errorTaskId = $map['ErrorTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
