<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody\workflowTask;
use AlibabaCloud\Tea\Model;

class GetWorkflowTaskResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example ******0C-7870-15FE-B96F-8880BB******
     *
     * @var string
     */
    public $requestId;

    /**
     * @var workflowTask
     */
    public $workflowTask;
    protected $_name = [
        'requestId'    => 'RequestId',
        'workflowTask' => 'WorkflowTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workflowTask) {
            $res['WorkflowTask'] = null !== $this->workflowTask ? $this->workflowTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkflowTask'])) {
            $model->workflowTask = workflowTask::fromMap($map['WorkflowTask']);
        }

        return $model;
    }
}
