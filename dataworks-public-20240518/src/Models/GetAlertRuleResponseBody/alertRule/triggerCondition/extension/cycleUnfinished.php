<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\cycleUnfinished\cycleAndTime;

class cycleUnfinished extends Model
{
    /**
     * @var cycleAndTime[]
     */
    public $cycleAndTime;
    protected $_name = [
        'cycleAndTime' => 'CycleAndTime',
    ];

    public function validate()
    {
        if (\is_array($this->cycleAndTime)) {
            Model::validateArray($this->cycleAndTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleAndTime) {
            if (\is_array($this->cycleAndTime)) {
                $res['CycleAndTime'] = [];
                $n1                  = 0;
                foreach ($this->cycleAndTime as $item1) {
                    $res['CycleAndTime'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CycleAndTime'])) {
            if (!empty($map['CycleAndTime'])) {
                $model->cycleAndTime = [];
                $n1                  = 0;
                foreach ($map['CycleAndTime'] as $item1) {
                    $model->cycleAndTime[$n1++] = cycleAndTime::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
