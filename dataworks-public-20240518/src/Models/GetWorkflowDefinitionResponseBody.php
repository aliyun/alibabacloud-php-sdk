<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponseBody\workflowDefinition;
use AlibabaCloud\Tea\Model;

class GetWorkflowDefinitionResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F2BDD628-8A21-5BD1-B930-1A2D5989XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the workflow.
     *
     * @var workflowDefinition
     */
    public $workflowDefinition;
    protected $_name = [
        'requestId' => 'RequestId',
        'workflowDefinition' => 'WorkflowDefinition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workflowDefinition) {
            $res['WorkflowDefinition'] = null !== $this->workflowDefinition ? $this->workflowDefinition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowDefinitionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkflowDefinition'])) {
            $model->workflowDefinition = workflowDefinition::fromMap($map['WorkflowDefinition']);
        }

        return $model;
    }
}
