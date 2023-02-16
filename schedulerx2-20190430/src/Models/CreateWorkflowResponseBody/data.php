<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 92583
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
