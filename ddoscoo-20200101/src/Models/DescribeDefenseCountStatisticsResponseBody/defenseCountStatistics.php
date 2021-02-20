<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseCountStatistics extends Model
{
    /**
     * @var int
     */
    public $maxUsableDefenseCountCurrentMonth;

    /**
     * @var int
     */
    public $flowPackCountRemain;

    /**
     * @var int
     */
    public $defenseCountTotalUsageOfCurrentMonth;
    protected $_name = [
        'maxUsableDefenseCountCurrentMonth'    => 'MaxUsableDefenseCountCurrentMonth',
        'flowPackCountRemain'                  => 'FlowPackCountRemain',
        'defenseCountTotalUsageOfCurrentMonth' => 'DefenseCountTotalUsageOfCurrentMonth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxUsableDefenseCountCurrentMonth) {
            $res['MaxUsableDefenseCountCurrentMonth'] = $this->maxUsableDefenseCountCurrentMonth;
        }
        if (null !== $this->flowPackCountRemain) {
            $res['FlowPackCountRemain'] = $this->flowPackCountRemain;
        }
        if (null !== $this->defenseCountTotalUsageOfCurrentMonth) {
            $res['DefenseCountTotalUsageOfCurrentMonth'] = $this->defenseCountTotalUsageOfCurrentMonth;
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
        if (isset($map['MaxUsableDefenseCountCurrentMonth'])) {
            $model->maxUsableDefenseCountCurrentMonth = $map['MaxUsableDefenseCountCurrentMonth'];
        }
        if (isset($map['FlowPackCountRemain'])) {
            $model->flowPackCountRemain = $map['FlowPackCountRemain'];
        }
        if (isset($map['DefenseCountTotalUsageOfCurrentMonth'])) {
            $model->defenseCountTotalUsageOfCurrentMonth = $map['DefenseCountTotalUsageOfCurrentMonth'];
        }

        return $model;
    }
}
