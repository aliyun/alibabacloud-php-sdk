<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Schedule extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $delay;

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
    public $timeZone;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'delay' => 'delay',
        'interval' => 'interval',
        'runImmediately' => 'runImmediately',
        'timeZone' => 'timeZone',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
