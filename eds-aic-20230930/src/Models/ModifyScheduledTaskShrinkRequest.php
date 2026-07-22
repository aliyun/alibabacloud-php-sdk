<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyScheduledTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $runConfigShrink;

    /**
     * @var string
     */
    public $scheduledId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskVersion;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'instanceIds' => 'InstanceIds',
        'runConfigShrink' => 'RunConfig',
        'scheduledId' => 'ScheduledId',
        'status' => 'Status',
        'taskName' => 'TaskName',
        'taskVersion' => 'TaskVersion',
        'userPrompt' => 'UserPrompt',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runConfigShrink) {
            $res['RunConfig'] = $this->runConfigShrink;
        }

        if (null !== $this->scheduledId) {
            $res['ScheduledId'] = $this->scheduledId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskVersion) {
            $res['TaskVersion'] = $this->taskVersion;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RunConfig'])) {
            $model->runConfigShrink = $map['RunConfig'];
        }

        if (isset($map['ScheduledId'])) {
            $model->scheduledId = $map['ScheduledId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskVersion'])) {
            $model->taskVersion = $map['TaskVersion'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
