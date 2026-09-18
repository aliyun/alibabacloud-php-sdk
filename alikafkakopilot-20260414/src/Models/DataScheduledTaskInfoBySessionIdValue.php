<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class DataScheduledTaskInfoBySessionIdValue extends Model
{
    /**
     * @var string
     */
    public $asOf;

    /**
     * @var int
     */
    public $enabledCount;

    /**
     * @var bool
     */
    public $hasScheduledTask;

    /**
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'asOf' => 'AsOf',
        'enabledCount' => 'EnabledCount',
        'hasScheduledTask' => 'HasScheduledTask',
        'taskCount' => 'TaskCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asOf) {
            $res['AsOf'] = $this->asOf;
        }

        if (null !== $this->enabledCount) {
            $res['EnabledCount'] = $this->enabledCount;
        }

        if (null !== $this->hasScheduledTask) {
            $res['HasScheduledTask'] = $this->hasScheduledTask;
        }

        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
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
        if (isset($map['AsOf'])) {
            $model->asOf = $map['AsOf'];
        }

        if (isset($map['EnabledCount'])) {
            $model->enabledCount = $map['EnabledCount'];
        }

        if (isset($map['HasScheduledTask'])) {
            $model->hasScheduledTask = $map['HasScheduledTask'];
        }

        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
