<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterNodePoolResponseBody extends Model
{
    /**
     * @description 任务ID。
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 节点池ID。
     *
     * @var string
     */
    public $nodepoolId;
    protected $_name = [
        'taskId'     => 'task_id',
        'nodepoolId' => 'nodepool_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterNodePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        return $model;
    }
}
