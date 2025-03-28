<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployHuggingFaceModelInput\provisionConfig;

use AlibabaCloud\Dara\Model;

class scheduledActions extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scheduleExpression;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $target;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'endTime' => 'endTime',
        'name' => 'name',
        'scheduleExpression' => 'scheduleExpression',
        'startTime' => 'startTime',
        'target' => 'target',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->scheduleExpression) {
            $res['scheduleExpression'] = $this->scheduleExpression;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['scheduleExpression'])) {
            $model->scheduleExpression = $map['scheduleExpression'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
