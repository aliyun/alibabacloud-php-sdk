<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponseBody\tasks\customMatchGroup;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponseBody\tasks\targetDeviceCount;

class tasks extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var customMatchGroup[]
     */
    public $customMatchGroup;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string[]
     */
    public $matchTargetIds;

    /**
     * @var string
     */
    public $scheduledStrategyId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var targetDeviceCount
     */
    public $targetDeviceCount;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $vulCount;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'createTime' => 'CreateTime',
        'customMatchGroup' => 'CustomMatchGroup',
        'endTimestamp' => 'EndTimestamp',
        'matchMode' => 'MatchMode',
        'matchTargetIds' => 'MatchTargetIds',
        'scheduledStrategyId' => 'ScheduledStrategyId',
        'status' => 'Status',
        'targetDeviceCount' => 'TargetDeviceCount',
        'taskDescription' => 'TaskDescription',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'vulCount' => 'VulCount',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->customMatchGroup)) {
            Model::validateArray($this->customMatchGroup);
        }
        if (\is_array($this->matchTargetIds)) {
            Model::validateArray($this->matchTargetIds);
        }
        if (null !== $this->targetDeviceCount) {
            $this->targetDeviceCount->validate();
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customMatchGroup) {
            if (\is_array($this->customMatchGroup)) {
                $res['CustomMatchGroup'] = [];
                $n1 = 0;
                foreach ($this->customMatchGroup as $item1) {
                    $res['CustomMatchGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->matchTargetIds) {
            if (\is_array($this->matchTargetIds)) {
                $res['MatchTargetIds'] = [];
                $n1 = 0;
                foreach ($this->matchTargetIds as $item1) {
                    $res['MatchTargetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduledStrategyId) {
            $res['ScheduledStrategyId'] = $this->scheduledStrategyId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetDeviceCount) {
            $res['TargetDeviceCount'] = null !== $this->targetDeviceCount ? $this->targetDeviceCount->toArray($noStream) : $this->targetDeviceCount;
        }

        if (null !== $this->taskDescription) {
            $res['TaskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomMatchGroup'])) {
            if (!empty($map['CustomMatchGroup'])) {
                $model->customMatchGroup = [];
                $n1 = 0;
                foreach ($map['CustomMatchGroup'] as $item1) {
                    $model->customMatchGroup[$n1] = customMatchGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['MatchTargetIds'])) {
            if (!empty($map['MatchTargetIds'])) {
                $model->matchTargetIds = [];
                $n1 = 0;
                foreach ($map['MatchTargetIds'] as $item1) {
                    $model->matchTargetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduledStrategyId'])) {
            $model->scheduledStrategyId = $map['ScheduledStrategyId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetDeviceCount'])) {
            $model->targetDeviceCount = targetDeviceCount::fromMap($map['TargetDeviceCount']);
        }

        if (isset($map['TaskDescription'])) {
            $model->taskDescription = $map['TaskDescription'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
