<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description 具体指明哪些调度节点的实例执行成功后可以触发
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description 何种事件可以触发质量校验任务执行
     *
     * @example ByScheduledTaskInstance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'taskIds' => 'TaskIds',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
