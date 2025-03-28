<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselinesResponseBody\data\baselines;

use AlibabaCloud\Dara\Model;

class overTimeSettings extends Model
{
    /**
     * @var int
     */
    public $cycle;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'cycle' => 'Cycle',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
