<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Schedule extends Model
{
    /**
     * @example 0/5 * * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example 4
     *
     * @var int
     */
    public $delay;

    /**
     * @example 60s
     *
     * @var string
     */
    public $interval;

    /**
     * @example false
     *
     * @var bool
     */
    public $runImmediately;

    /**
     * @example +0800
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description This parameter is required.
     *
     * @example FixedRate
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'delay'          => 'delay',
        'interval'       => 'interval',
        'runImmediately' => 'runImmediately',
        'timeZone'       => 'timeZone',
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
        if (null !== $this->delay) {
            $res['delay'] = $this->delay;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->runImmediately) {
            $res['runImmediately'] = $this->runImmediately;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['delay'])) {
            $model->delay = $map['delay'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['runImmediately'])) {
            $model->runImmediately = $map['runImmediately'];
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
