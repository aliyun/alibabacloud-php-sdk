<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description The IDs of scheduling tasks. This parameter is valid only if you set Type to ByScheduledTaskInstance.
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description The trigger type of the monitor. Valid values:
     *
     *   ByScheduledTaskInstance: The monitor is triggered by the associated scheduling tasks.
     *   ByManual: The monitor is manually triggered.
     *
     * @example ByScheduledTaskInstance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'taskIds' => 'TaskIds',
        'type' => 'Type',
    ];

    public function validate() {}

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
