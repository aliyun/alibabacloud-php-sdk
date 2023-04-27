<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponseBody\nodeList;
use AlibabaCloud\Tea\Model;

class GetTaskInstanceRelationResponseBody extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **GetTaskInstanceRelation**.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The status of the node. Valid values:
     *
     *   **0**: The node is waiting to be scheduled.
     *   **1**: The node is running.
     *   **2**: The node is suspended.
     *   **3**: The node failed to run.
     *   **4**: The node is run.
     *   **5**: The node is complete.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to obtain the ID of the task flow.
     *
     * @var nodeList
     */
    public $nodeList;

    /**
     * @description The error code returned if the request fails.
     *
     * @example 028BF827-3801-5869-8548-F4A039256304
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error message returned if the request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'nodeList'     => 'NodeList',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = null !== $this->nodeList ? $this->nodeList->toMap() : null;
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
     * @return GetTaskInstanceRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = nodeList::fromMap($map['NodeList']);
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
