<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RestartWorkflowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $workflowIdsShrink;
    protected $_name = [
        'workflowIdsShrink' => 'WorkflowIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowIdsShrink) {
            $res['WorkflowIds'] = $this->workflowIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartWorkflowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkflowIds'])) {
            $model->workflowIdsShrink = $map['WorkflowIds'];
        }

        return $model;
    }
}
