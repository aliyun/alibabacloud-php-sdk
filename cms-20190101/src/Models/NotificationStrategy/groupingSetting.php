<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\groupingSetting\groupingItems;
use AlibabaCloud\Tea\Model;

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
        'groupingItems'             => 'GroupingItems',
        'periodMin'                 => 'PeriodMin',
        'silenceSec'                => 'SilenceSec',
        'times'                     => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRawAlertDispatching) {
            $res['EnableRawAlertDispatching'] = $this->enableRawAlertDispatching;
        }
        if (null !== $this->groupingItems) {
            $res['GroupingItems'] = [];
            if (null !== $this->groupingItems && \is_array($this->groupingItems)) {
                $n = 0;
                foreach ($this->groupingItems as $item) {
                    $res['GroupingItems'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return groupingSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableRawAlertDispatching'])) {
            $model->enableRawAlertDispatching = $map['EnableRawAlertDispatching'];
        }
        if (isset($map['GroupingItems'])) {
            if (!empty($map['GroupingItems'])) {
                $model->groupingItems = [];
                $n                    = 0;
                foreach ($map['GroupingItems'] as $item) {
                    $model->groupingItems[$n++] = null !== $item ? groupingItems::fromMap($item) : $item;
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
