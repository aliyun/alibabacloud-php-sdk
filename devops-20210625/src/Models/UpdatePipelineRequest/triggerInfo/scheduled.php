<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineRequest\triggerInfo;

use AlibabaCloud\Tea\Model;

class scheduled extends Model
{
    /**
     * @var string
     */
    public $daysOfWeek;

    /**
     * @var string
     */
    public $fixedTime;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var bool
     */
    public $onlySourceChange;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'daysOfWeek'       => 'daysOfWeek',
        'fixedTime'        => 'fixedTime',
        'from'             => 'from',
        'interval'         => 'interval',
        'onlySourceChange' => 'onlySourceChange',
        'to'               => 'to',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysOfWeek) {
            $res['daysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->fixedTime) {
            $res['fixedTime'] = $this->fixedTime;
        }
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->onlySourceChange) {
            $res['onlySourceChange'] = $this->onlySourceChange;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduled
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['daysOfWeek'])) {
            $model->daysOfWeek = $map['daysOfWeek'];
        }
        if (isset($map['fixedTime'])) {
            $model->fixedTime = $map['fixedTime'];
        }
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['onlySourceChange'])) {
            $model->onlySourceChange = $map['onlySourceChange'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
