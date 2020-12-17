<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\taskResult;
use AlibabaCloud\Tea\Model;

class DescribeTaskInfoResponseBody extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 任务ID。
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 任务创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 任务更新时间。
     *
     * @var string
     */
    public $updated;

    /**
     * @description 任务当前状态。
     *
     * @var string
     */
    public $state;

    /**
     * @description 当前任务类型。
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 任务执行详情。
     *
     * @var taskResult[]
     */
    public $taskResult;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'taskId'     => 'task_id',
        'created'    => 'created',
        'updated'    => 'updated',
        'state'      => 'state',
        'taskType'   => 'task_type',
        'taskResult' => 'task_result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->taskType) {
            $res['task_type'] = $this->taskType;
        }
        if (null !== $this->taskResult) {
            $res['task_result'] = [];
            if (null !== $this->taskResult && \is_array($this->taskResult)) {
                $n = 0;
                foreach ($this->taskResult as $item) {
                    $res['task_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['task_type'])) {
            $model->taskType = $map['task_type'];
        }
        if (isset($map['task_result'])) {
            if (!empty($map['task_result'])) {
                $model->taskResult = [];
                $n                 = 0;
                foreach ($map['task_result'] as $item) {
                    $model->taskResult[$n++] = null !== $item ? taskResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
