<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBaselineRequest;

use AlibabaCloud\Tea\Model;

class overtimeSettings extends Model
{
    /**
     * @description The cycle that corresponds to the committed completion time. For a day-level baseline, set this parameter to 1. For an hour-level baseline, set this parameter to a value that is no more than 24.
     *
     * @example 1
     *
     * @var int
     */
    public $cycle;

    /**
     * @description The committed completion time in the hh:mm format. Valid values of hh: [0,47]. Valid values of mm: [0,59].
     *
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
     * @return overtimeSettings
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
