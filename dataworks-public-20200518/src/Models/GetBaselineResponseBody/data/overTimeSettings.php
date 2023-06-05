<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineResponseBody\data;

use AlibabaCloud\Tea\Model;

class overTimeSettings extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cycle;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'cycle' => 'Cycle',
        'time'  => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return overTimeSettings
     */
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
