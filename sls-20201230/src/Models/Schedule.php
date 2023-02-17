<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Schedule extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var bool
     */
    public $runImmediately;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'dayOfWeek'      => 'dayOfWeek',
        'hour'           => 'hour',
        'interval'       => 'interval',
        'runImmediately' => 'runImmediately',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }
        if (null !== $this->dayOfWeek) {
            $res['dayOfWeek'] = $this->dayOfWeek;
        }
        if (null !== $this->hour) {
            $res['hour'] = $this->hour;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->runImmediately) {
            $res['runImmediately'] = $this->runImmediately;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Schedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }
        if (isset($map['dayOfWeek'])) {
            $model->dayOfWeek = $map['dayOfWeek'];
        }
        if (isset($map['hour'])) {
            $model->hour = $map['hour'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['runImmediately'])) {
            $model->runImmediately = $map['runImmediately'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
