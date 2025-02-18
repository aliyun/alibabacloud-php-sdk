<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\nodePool\recurrenceSchedules;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $maxIdleAppInstanceAmount;
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
     * @var recurrenceSchedules[]
     */
    public $recurrenceSchedules;
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
    public $strategyDisableDate;
    /**
     * @var string
     */
    public $strategyEnableDate;
    /**
     * @var string
     */
    public $strategyType;
    /**
     * @var bool
     */
    public $warmUp;
    protected $_name = [
        'maxIdleAppInstanceAmount'    => 'MaxIdleAppInstanceAmount',
        'maxScalingAmount'            => 'MaxScalingAmount',
        'nodeAmount'                  => 'NodeAmount',
        'nodeCapacity'                => 'NodeCapacity',
        'nodeInstanceType'            => 'NodeInstanceType',
        'recurrenceSchedules'         => 'RecurrenceSchedules',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingStep'                 => 'ScalingStep',
        'scalingUsageThreshold'       => 'ScalingUsageThreshold',
        'strategyDisableDate'         => 'StrategyDisableDate',
        'strategyEnableDate'          => 'StrategyEnableDate',
        'strategyType'                => 'StrategyType',
        'warmUp'                      => 'WarmUp',
    ];

    public function validate()
    {
        if (\is_array($this->recurrenceSchedules)) {
            Model::validateArray($this->recurrenceSchedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxIdleAppInstanceAmount) {
            $res['MaxIdleAppInstanceAmount'] = $this->maxIdleAppInstanceAmount;
        }

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

        if (null !== $this->recurrenceSchedules) {
            if (\is_array($this->recurrenceSchedules)) {
                $res['RecurrenceSchedules'] = [];
                $n1                         = 0;
                foreach ($this->recurrenceSchedules as $item1) {
                    $res['RecurrenceSchedules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->strategyDisableDate) {
            $res['StrategyDisableDate'] = $this->strategyDisableDate;
        }

        if (null !== $this->strategyEnableDate) {
            $res['StrategyEnableDate'] = $this->strategyEnableDate;
        }

        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        if (null !== $this->warmUp) {
            $res['WarmUp'] = $this->warmUp;
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
        if (isset($map['MaxIdleAppInstanceAmount'])) {
            $model->maxIdleAppInstanceAmount = $map['MaxIdleAppInstanceAmount'];
        }

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

        if (isset($map['RecurrenceSchedules'])) {
            if (!empty($map['RecurrenceSchedules'])) {
                $model->recurrenceSchedules = [];
                $n1                         = 0;
                foreach ($map['RecurrenceSchedules'] as $item1) {
                    $model->recurrenceSchedules[$n1++] = recurrenceSchedules::fromMap($item1);
                }
            }
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

        if (isset($map['StrategyDisableDate'])) {
            $model->strategyDisableDate = $map['StrategyDisableDate'];
        }

        if (isset($map['StrategyEnableDate'])) {
            $model->strategyEnableDate = $map['StrategyEnableDate'];
        }

        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        if (isset($map['WarmUp'])) {
            $model->warmUp = $map['WarmUp'];
        }

        return $model;
    }
}
