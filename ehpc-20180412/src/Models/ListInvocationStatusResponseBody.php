<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;
use AlibabaCloud\Tea\Model;

class ListInvocationStatusResponseBody extends Model
{
    /**
     * @description The ID of the command.
     *
     * @example c-hz01v8x80o3****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The list of statuses. A list is returned for each node.
     *
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @description The overall status of all nodes in the cluster. Valid values:
     *
     * - Stopped
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commandId'       => 'CommandId',
        'invokeInstances' => 'InvokeInstances',
        'invokeStatus'    => 'InvokeStatus',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvocationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
