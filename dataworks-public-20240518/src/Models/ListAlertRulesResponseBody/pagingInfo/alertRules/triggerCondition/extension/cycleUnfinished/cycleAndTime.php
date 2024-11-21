<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition\extension\cycleUnfinished;

use AlibabaCloud\Tea\Model;

class cycleAndTime extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cycleId;

    /**
     * @example 01:00
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'cycleId' => 'CycleId',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleId) {
            $res['CycleId'] = $this->cycleId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cycleAndTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleId'])) {
            $model->cycleId = $map['CycleId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
