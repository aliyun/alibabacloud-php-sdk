<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterNodePoolResponseBody extends Model
{
    /**
     * @description The node pool ID.
     *
     * @example np31da1b38983f4511b490fc62108a****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example T-613b19bbd160ad492800****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'nodepoolId' => 'nodepool_id',
        'requestId'  => 'request_id',
        'taskId'     => 'task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterNodePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
