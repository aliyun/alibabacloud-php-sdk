<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowInstanceResponseBody\workflowInstance;
use AlibabaCloud\Tea\Model;

class GetWorkflowInstanceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 22C97E95-F023-56B5-8852-B1A77A17XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the workflow instance.
     *
     * @var workflowInstance
     */
    public $workflowInstance;
    protected $_name = [
        'requestId' => 'RequestId',
        'workflowInstance' => 'WorkflowInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workflowInstance) {
            $res['WorkflowInstance'] = null !== $this->workflowInstance ? $this->workflowInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowInstanceResponseBody
     */
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
