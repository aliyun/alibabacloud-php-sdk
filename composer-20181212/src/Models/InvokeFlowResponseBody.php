<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class InvokeFlowResponseBody extends Model
{
    /**
     * @description The unique identifier of the execution.
     *
     * @example 6b387696-d160-4ed7-xxxx-070ac29dce4d
     *
     * @var string
     */
    public $invocationId;

    /**
     * @description The ID for this request.
     *
     * @example 5CE7EAE6-XXXX-XXXX-A1A3-D3C2AE624000
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the workflow execution was triggered.
     *
     *   **true**: The workflow execution was triggered
     *   **false**: The workflow execution failed to be triggered.
     *
     * > : You can call the **GetInvocationLog** operation to check whether the workflow execution is successful.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'invocationId' => 'InvocationId',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
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
     * @return InvokeFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
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
