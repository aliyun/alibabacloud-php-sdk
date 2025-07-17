<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow;
use AlibabaCloud\Tea\Model;

class GetWorkflowResponseBody extends Model
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
     * @description The information about the workflow.
     *
     * @var workflow
     */
    public $workflow;
    protected $_name = [
        'requestId' => 'RequestId',
        'workflow' => 'Workflow',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workflow) {
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Workflow'])) {
            $model->workflow = workflow::fromMap($map['Workflow']);
        }

        return $model;
    }
}
