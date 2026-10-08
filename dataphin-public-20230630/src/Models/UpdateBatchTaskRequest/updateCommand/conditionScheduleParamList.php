<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class conditionScheduleParamList extends Model
{
    /**
     * @var string
     */
    public $conditionName;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $followScheduleParam;

    /**
     * @var int
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $scheduleConditionJson;

    /**
     * @var string
     */
    public $scheduleTime;
    protected $_name = [
        'conditionName' => 'ConditionName',
        'cronExpression' => 'CronExpression',
        'enable' => 'Enable',
        'followScheduleParam' => 'FollowScheduleParam',
        'nodeStatus' => 'NodeStatus',
        'scheduleConditionJson' => 'ScheduleConditionJson',
        'scheduleTime' => 'ScheduleTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionName) {
            $res['ConditionName'] = $this->conditionName;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->followScheduleParam) {
            $res['FollowScheduleParam'] = $this->followScheduleParam;
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->scheduleConditionJson) {
            $res['ScheduleConditionJson'] = $this->scheduleConditionJson;
        }

        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
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
        if (isset($map['ConditionName'])) {
            $model->conditionName = $map['ConditionName'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['FollowScheduleParam'])) {
            $model->followScheduleParam = $map['FollowScheduleParam'];
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['ScheduleConditionJson'])) {
            $model->scheduleConditionJson = $map['ScheduleConditionJson'];
        }

        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }

        return $model;
    }
}
