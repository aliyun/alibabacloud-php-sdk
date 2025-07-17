<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunWorkflowInstancesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description Specifies whether to rerun the matched instances and all downstream instances.
     *
     * @example false
     *
     * @var bool
     */
    public $rerunDownstreamEnabled;

    /**
     * @description The internal task IDs used for matching manual workflow instances.
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description The statuses of internal tasks used for matching manual workflow instances.
     *
     * @var string[]
     */
    public $taskInstanceStatuses;

    /**
     * @description The internal task name used for matching the manual workflow instance.
     *
     * @example test
     *
     * @var string
     */
    public $taskName;

    /**
     * @description Match internal tasks within the manual workflow by type.
     *
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'rerunDownstreamEnabled' => 'RerunDownstreamEnabled',
        'taskIds' => 'TaskIds',
        'taskInstanceStatuses' => 'TaskInstanceStatuses',
        'taskName' => 'TaskName',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rerunDownstreamEnabled) {
            $res['RerunDownstreamEnabled'] = $this->rerunDownstreamEnabled;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskInstanceStatuses) {
            $res['TaskInstanceStatuses'] = $this->taskInstanceStatuses;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskTypes) {
            $res['TaskTypes'] = $this->taskTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RerunDownstreamEnabled'])) {
            $model->rerunDownstreamEnabled = $map['RerunDownstreamEnabled'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['TaskInstanceStatuses'])) {
            if (!empty($map['TaskInstanceStatuses'])) {
                $model->taskInstanceStatuses = $map['TaskInstanceStatuses'];
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = $map['TaskTypes'];
            }
        }

        return $model;
    }
}
