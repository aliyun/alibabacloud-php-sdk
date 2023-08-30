<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ScheduledAction extends Model
{
    /**
     * @example 2024-03-10T10:10:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example test_1
     *
     * @var string
     */
    public $name;

    /**
     * @example cron(0 0 22 * * *)
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @example 2023-03-10T10:10:10Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 50
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
     * @return ScheduledAction
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
