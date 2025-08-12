<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\groupingSetting\groupingItems;

class groupingSetting extends Model
{
    /**
     * @var bool
     */
    public $enableRawAlertDispatching;

    /**
     * @var groupingItems[]
     */
    public $groupingItems;

    /**
     * @var int
     */
    public $periodMin;

    /**
     * @var int
     */
    public $silenceSec;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'enableRawAlertDispatching' => 'EnableRawAlertDispatching',
        'groupingItems' => 'GroupingItems',
        'periodMin' => 'PeriodMin',
        'silenceSec' => 'SilenceSec',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (\is_array($this->groupingItems)) {
            Model::validateArray($this->groupingItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableRawAlertDispatching) {
            $res['EnableRawAlertDispatching'] = $this->enableRawAlertDispatching;
        }

        if (null !== $this->groupingItems) {
            if (\is_array($this->groupingItems)) {
                $res['GroupingItems'] = [];
                $n1 = 0;
                foreach ($this->groupingItems as $item1) {
                    $res['GroupingItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->periodMin) {
            $res['PeriodMin'] = $this->periodMin;
        }

        if (null !== $this->silenceSec) {
            $res['SilenceSec'] = $this->silenceSec;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['EnableRawAlertDispatching'])) {
            $model->enableRawAlertDispatching = $map['EnableRawAlertDispatching'];
        }

        if (isset($map['GroupingItems'])) {
            if (!empty($map['GroupingItems'])) {
                $model->groupingItems = [];
                $n1 = 0;
                foreach ($map['GroupingItems'] as $item1) {
                    $model->groupingItems[$n1] = groupingItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PeriodMin'])) {
            $model->periodMin = $map['PeriodMin'];
        }

        if (isset($map['SilenceSec'])) {
            $model->silenceSec = $map['SilenceSec'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
