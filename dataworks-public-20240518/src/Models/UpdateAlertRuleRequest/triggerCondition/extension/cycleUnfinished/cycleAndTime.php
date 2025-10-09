<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\cycleUnfinished;

use AlibabaCloud\Dara\Model;

class cycleAndTime extends Model
{
    /**
     * @var int
     */
    public $cycleId;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'cycleId' => 'CycleId',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
