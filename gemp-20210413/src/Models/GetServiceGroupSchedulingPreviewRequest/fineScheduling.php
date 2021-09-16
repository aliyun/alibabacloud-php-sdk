<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fineScheduling\schedulingFineShifts;
use AlibabaCloud\Tea\Model;

class fineScheduling extends Model
{
    /**
     * @description 循环周期
     *
     * @var int
     */
    public $period;

    /**
     * @description 循环周期单位 HOUR 小时 DAY 天
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description 班次类型 MORNING_NIGHT 早晚班 MORNING_NOON_NIGHT 早中晚班 CUSTOM 自定义
     *
     * @var string
     */
    public $shiftType;

    /**
     * @description 精细排班班次人员信息
     *
     * @var schedulingFineShifts[]
     */
    public $schedulingFineShifts;
    protected $_name = [
        'period'               => 'period',
        'periodUnit'           => 'periodUnit',
        'shiftType'            => 'shiftType',
        'schedulingFineShifts' => 'schedulingFineShifts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['periodUnit'] = $this->periodUnit;
        }
        if (null !== $this->shiftType) {
            $res['shiftType'] = $this->shiftType;
        }
        if (null !== $this->schedulingFineShifts) {
            $res['schedulingFineShifts'] = [];
            if (null !== $this->schedulingFineShifts && \is_array($this->schedulingFineShifts)) {
                $n = 0;
                foreach ($this->schedulingFineShifts as $item) {
                    $res['schedulingFineShifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fineScheduling
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['periodUnit'])) {
            $model->periodUnit = $map['periodUnit'];
        }
        if (isset($map['shiftType'])) {
            $model->shiftType = $map['shiftType'];
        }
        if (isset($map['schedulingFineShifts'])) {
            if (!empty($map['schedulingFineShifts'])) {
                $model->schedulingFineShifts = [];
                $n                           = 0;
                foreach ($map['schedulingFineShifts'] as $item) {
                    $model->schedulingFineShifts[$n++] = null !== $item ? schedulingFineShifts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
