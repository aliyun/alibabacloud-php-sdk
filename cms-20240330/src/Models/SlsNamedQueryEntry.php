<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SlsNamedQueryEntry extends Model
{
    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var int
     */
    public $window;
    protected $_name = [
        'end' => 'end',
        'expr' => 'expr',
        'start' => 'start',
        'timeUnit' => 'timeUnit',
        'window' => 'window',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        if (null !== $this->timeUnit) {
            $res['timeUnit'] = $this->timeUnit;
        }

        if (null !== $this->window) {
            $res['window'] = $this->window;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['timeUnit'])) {
            $model->timeUnit = $map['timeUnit'];
        }

        if (isset($map['window'])) {
            $model->window = $map['window'];
        }

        return $model;
    }
}
