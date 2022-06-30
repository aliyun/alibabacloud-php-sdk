<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseCountStatistics extends Model
{
    /**
     * @var int
     */
    public $defenseCountTotalUsageOfCurrentMonth;

    /**
     * @var int
     */
    public $flowPackCountRemain;

    /**
     * @var int
     */
    public $maxUsableDefenseCountCurrentMonth;

    /**
     * @var int
     */
    public $secHighSpeedCountRemain;
    protected $_name = [
        'defenseCountTotalUsageOfCurrentMonth' => 'DefenseCountTotalUsageOfCurrentMonth',
        'flowPackCountRemain'                  => 'FlowPackCountRemain',
        'maxUsableDefenseCountCurrentMonth'    => 'MaxUsableDefenseCountCurrentMonth',
        'secHighSpeedCountRemain'              => 'SecHighSpeedCountRemain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseCountTotalUsageOfCurrentMonth) {
            $res['DefenseCountTotalUsageOfCurrentMonth'] = $this->defenseCountTotalUsageOfCurrentMonth;
        }
        if (null !== $this->flowPackCountRemain) {
            $res['FlowPackCountRemain'] = $this->flowPackCountRemain;
        }
        if (null !== $this->maxUsableDefenseCountCurrentMonth) {
            $res['MaxUsableDefenseCountCurrentMonth'] = $this->maxUsableDefenseCountCurrentMonth;
        }
        if (null !== $this->secHighSpeedCountRemain) {
            $res['SecHighSpeedCountRemain'] = $this->secHighSpeedCountRemain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defenseCountStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseCountTotalUsageOfCurrentMonth'])) {
            $model->defenseCountTotalUsageOfCurrentMonth = $map['DefenseCountTotalUsageOfCurrentMonth'];
        }
        if (isset($map['FlowPackCountRemain'])) {
            $model->flowPackCountRemain = $map['FlowPackCountRemain'];
        }
        if (isset($map['MaxUsableDefenseCountCurrentMonth'])) {
            $model->maxUsableDefenseCountCurrentMonth = $map['MaxUsableDefenseCountCurrentMonth'];
        }
        if (isset($map['SecHighSpeedCountRemain'])) {
            $model->secHighSpeedCountRemain = $map['SecHighSpeedCountRemain'];
        }

        return $model;
    }
}
