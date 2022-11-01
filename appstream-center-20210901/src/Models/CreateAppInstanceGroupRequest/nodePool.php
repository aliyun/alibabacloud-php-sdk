<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $maxScalingAmount;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var int
     */
    public $nodeCapacity;

    /**
     * @var string
     */
    public $nodeInstanceType;

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
        'nodeAmount'                  => 'NodeAmount',
        'nodeCapacity'                => 'NodeCapacity',
        'nodeInstanceType'            => 'NodeInstanceType',
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
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeCapacity) {
            $res['NodeCapacity'] = $this->nodeCapacity;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
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
     * @return nodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxScalingAmount'])) {
            $model->maxScalingAmount = $map['MaxScalingAmount'];
        }
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }
        if (isset($map['NodeCapacity'])) {
            $model->nodeCapacity = $map['NodeCapacity'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
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
