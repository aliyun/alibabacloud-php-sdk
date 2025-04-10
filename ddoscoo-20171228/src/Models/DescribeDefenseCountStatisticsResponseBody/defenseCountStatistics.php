<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDefenseCountStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'defenseCountTotalUsageOfCurrentMonth' => 'DefenseCountTotalUsageOfCurrentMonth',
        'flowPackCountRemain' => 'FlowPackCountRemain',
        'maxUsableDefenseCountCurrentMonth' => 'MaxUsableDefenseCountCurrentMonth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
