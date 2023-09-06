<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\recurrence;

use AlibabaCloud\Tea\Model;

class pattern extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $dayOfMonth;

    /**
     * @example sunday
     *
     * @var string
     */
    public $daysOfWeek;

    /**
     * @example last
     *
     * @var string
     */
    public $index;

    /**
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @example daily
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dayOfMonth' => 'dayOfMonth',
        'daysOfWeek' => 'daysOfWeek',
        'index'      => 'index',
        'interval'   => 'interval',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfMonth) {
            $res['dayOfMonth'] = $this->dayOfMonth;
        }
        if (null !== $this->daysOfWeek) {
            $res['daysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dayOfMonth'])) {
            $model->dayOfMonth = $map['dayOfMonth'];
        }
        if (isset($map['daysOfWeek'])) {
            $model->daysOfWeek = $map['daysOfWeek'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
