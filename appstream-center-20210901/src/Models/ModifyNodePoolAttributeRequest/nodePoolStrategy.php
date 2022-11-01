<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;

use AlibabaCloud\Tea\Model;

class nodePoolStrategy extends Model
{
    /**
     * @var int
     */
    public $maxScalingAmount;

    /**
     * @var int
     */
    public $scalingDownAfterIdleMinutes;

    /**
     * @var int
     */
    public $scalingStep;

    /**
     * @var string
     */
    public $scalingUsageThreshold;

    /**
     * @var string
     */
    public $strategyType;
    protected $_name = [
        'maxScalingAmount'            => 'MaxScalingAmount',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingStep'                 => 'ScalingStep',
        'scalingUsageThreshold'       => 'ScalingUsageThreshold',
        'strategyType'                => 'StrategyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxScalingAmount) {
            $res['MaxScalingAmount'] = $this->maxScalingAmount;
        }
        if (null !== $this->scalingDownAfterIdleMinutes) {
            $res['ScalingDownAfterIdleMinutes'] = $this->scalingDownAfterIdleMinutes;
        }
        if (null !== $this->scalingStep) {
            $res['ScalingStep'] = $this->scalingStep;
        }
        if (null !== $this->scalingUsageThreshold) {
            $res['ScalingUsageThreshold'] = $this->scalingUsageThreshold;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePoolStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxScalingAmount'])) {
            $model->maxScalingAmount = $map['MaxScalingAmount'];
        }
        if (isset($map['ScalingDownAfterIdleMinutes'])) {
            $model->scalingDownAfterIdleMinutes = $map['ScalingDownAfterIdleMinutes'];
        }
        if (isset($map['ScalingStep'])) {
            $model->scalingStep = $map['ScalingStep'];
        }
        if (isset($map['ScalingUsageThreshold'])) {
            $model->scalingUsageThreshold = $map['ScalingUsageThreshold'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        return $model;
    }
}
