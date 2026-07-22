<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduledTaskShrinkRequest extends Model
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
     * @var int
     */
    public $maxExecutions;

    /**
     * @var string
     */
    public $runConfigShrink;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'instanceIds' => 'InstanceIds',
        'maxExecutions' => 'MaxExecutions',
        'runConfigShrink' => 'RunConfig',
        'taskName' => 'TaskName',
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

        if (null !== $this->maxExecutions) {
            $res['MaxExecutions'] = $this->maxExecutions;
        }

        if (null !== $this->runConfigShrink) {
            $res['RunConfig'] = $this->runConfigShrink;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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

        if (isset($map['MaxExecutions'])) {
            $model->maxExecutions = $map['MaxExecutions'];
        }

        if (isset($map['RunConfig'])) {
            $model->runConfigShrink = $map['RunConfig'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
