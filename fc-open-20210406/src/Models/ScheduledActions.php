<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ScheduledActions extends Model
{
    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description scheduleExpression
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description target
     *
     * @var int
     */
    public $target;
    protected $_name = [
        'endTime'            => 'endTime',
        'name'               => 'name',
        'scheduleExpression' => 'scheduleExpression',
        'startTime'          => 'startTime',
        'target'             => 'target',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduledActions
     */
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

        return $model;
    }
}
