<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseCountStatistics extends Model
{
    /**
     * @description The number of advanced mitigation sessions that are used within the current calendar month.
     *
     * @example 0
     *
     * @var int
     */
    public $defenseCountTotalUsageOfCurrentMonth;

    /**
     * @description The number of available global advanced mitigation sessions for the Insurance mitigation plan.
     *
     * @example 0
     *
     * @var int
     */
    public $flowPackCountRemain;

    /**
     * @description The maximum number of advanced mitigation sessions available for the current calendar month. The advanced mitigation sessions include the advanced mitigation sessions that are provided free of charge and the global advanced mitigation sessions that you purchase.
     *
     * @example 20
     *
     * @var int
     */
    public $maxUsableDefenseCountCurrentMonth;

    /**
     * @description The number of available global advanced mitigation sessions for the Secure Chinese Mainland Acceleration (Sec-CMA) mitigation plan.
     *
     * @example 0
     *
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
