<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponseBody\workflowDefinition;

class GetWorkflowDefinitionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var workflowDefinition
     */
    public $workflowDefinition;
    protected $_name = [
        'requestId'          => 'RequestId',
        'workflowDefinition' => 'WorkflowDefinition',
    ];

    public function validate()
    {
        if (null !== $this->workflowDefinition) {
            $this->workflowDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workflowDefinition) {
            $res['WorkflowDefinition'] = null !== $this->workflowDefinition ? $this->workflowDefinition->toArray($noStream) : $this->workflowDefinition;
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

        if (isset($map['WorkflowDefinition'])) {
            $model->workflowDefinition = workflowDefinition::fromMap($map['WorkflowDefinition']);
        }

        return $model;
    }
}
