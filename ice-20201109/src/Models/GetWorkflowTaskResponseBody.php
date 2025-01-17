<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody\workflowTask;

class GetWorkflowTaskResponseBody extends Model
{
    /**
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
        if (null !== $this->workflowTask) {
            $this->workflowTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workflowTask) {
            $res['WorkflowTask'] = null !== $this->workflowTask ? $this->workflowTask->toArray($noStream) : $this->workflowTask;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
