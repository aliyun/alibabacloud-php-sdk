<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowInstanceResponseBody\workflowInstance;

class GetWorkflowInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var workflowInstance
     */
    public $workflowInstance;
    protected $_name = [
        'requestId'        => 'RequestId',
        'workflowInstance' => 'WorkflowInstance',
    ];

    public function validate()
    {
        if (null !== $this->workflowInstance) {
            $this->workflowInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workflowInstance) {
            $res['WorkflowInstance'] = null !== $this->workflowInstance ? $this->workflowInstance->toArray($noStream) : $this->workflowInstance;
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

        if (isset($map['WorkflowInstance'])) {
            $model->workflowInstance = workflowInstance::fromMap($map['WorkflowInstance']);
        }

        return $model;
    }
}
