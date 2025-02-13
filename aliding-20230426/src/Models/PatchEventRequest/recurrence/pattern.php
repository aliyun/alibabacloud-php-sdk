<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\recurrence;

use AlibabaCloud\Dara\Model;

class pattern extends Model
{
    /**
     * @var int
     */
    public $dayOfMonth;
    /**
     * @var string
     */
    public $daysOfWeek;
    /**
     * @var string
     */
    public $index;
    /**
     * @var int
     */
    public $interval;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
