<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponseBody\taskFlowList;
use AlibabaCloud\Tea\Model;

class ListTaskFlowResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example 403
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the latest deployment record.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the task flow.
     *
     * @example 4116147E-C628-5816-8779-8EEAF8E973F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The operation that you want to perform. Set the value to **ListTaskFlow**.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The name of the user who creates the task flow.
     *
     * @var taskFlowList
     */
    public $taskFlowList;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'taskFlowList' => 'TaskFlowList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskFlowList) {
            $res['TaskFlowList'] = null !== $this->taskFlowList ? $this->taskFlowList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskFlowResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskFlowList'])) {
            $model->taskFlowList = taskFlowList::fromMap($map['TaskFlowList']);
        }

        return $model;
    }
}
