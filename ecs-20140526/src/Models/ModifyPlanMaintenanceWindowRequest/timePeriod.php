<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPlanMaintenanceWindowRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPlanMaintenanceWindowRequest\timePeriod\rangeList;

class timePeriod extends Model
{
    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var rangeList[]
     */
    public $rangeList;
    protected $_name = [
        'periodUnit' => 'PeriodUnit',
        'rangeList' => 'RangeList',
    ];

    public function validate()
    {
        if (\is_array($this->rangeList)) {
            Model::validateArray($this->rangeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->rangeList) {
            if (\is_array($this->rangeList)) {
                $res['RangeList'] = [];
                $n1 = 0;
                foreach ($this->rangeList as $item1) {
                    $res['RangeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['RangeList'])) {
            if (!empty($map['RangeList'])) {
                $model->rangeList = [];
                $n1 = 0;
                foreach ($map['RangeList'] as $item1) {
                    $model->rangeList[$n1] = rangeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
