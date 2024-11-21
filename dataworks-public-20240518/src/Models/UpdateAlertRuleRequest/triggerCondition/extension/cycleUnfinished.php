<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\cycleUnfinished\cycleAndTime;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleAndTime) {
            $res['CycleAndTime'] = [];
            if (null !== $this->cycleAndTime && \is_array($this->cycleAndTime)) {
                $n = 0;
                foreach ($this->cycleAndTime as $item) {
                    $res['CycleAndTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cycleUnfinished
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleAndTime'])) {
            if (!empty($map['CycleAndTime'])) {
                $model->cycleAndTime = [];
                $n                   = 0;
                foreach ($map['CycleAndTime'] as $item) {
                    $model->cycleAndTime[$n++] = null !== $item ? cycleAndTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
