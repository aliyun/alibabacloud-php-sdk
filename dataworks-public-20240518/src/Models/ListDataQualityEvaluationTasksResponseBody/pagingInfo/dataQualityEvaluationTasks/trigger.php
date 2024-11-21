<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description The IDs of the auto triggered nodes of which the instances are successfully run. This parameter takes effect only if the Type parameter is set to ByScheduledTaskInstance.
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description The trigger condition of the task.
     *
     *   Valid values: ByScheduledTaskInstance. The value indicates that the task is triggered when the instance of an auto triggered node is successfully run.
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
