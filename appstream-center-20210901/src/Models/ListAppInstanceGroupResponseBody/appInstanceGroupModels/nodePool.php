<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool\recurrenceSchedules;
use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $amount;

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
     * @var string
     */
    public $nodePoolId;

    /**
     * @var int
     */
    public $nodeUsed;

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
    public $scalingNodeAmount;

    /**
     * @var int
     */
    public $scalingNodeUsed;

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
        'amount'                      => 'Amount',
        'maxScalingAmount'            => 'MaxScalingAmount',
        'nodeAmount'                  => 'NodeAmount',
        'nodeCapacity'                => 'NodeCapacity',
        'nodeInstanceType'            => 'NodeInstanceType',
        'nodePoolId'                  => 'NodePoolId',
        'nodeUsed'                    => 'NodeUsed',
        'recurrenceSchedules'         => 'RecurrenceSchedules',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingNodeAmount'           => 'ScalingNodeAmount',
        'scalingNodeUsed'             => 'ScalingNodeUsed',
        'scalingStep'                 => 'ScalingStep',
        'scalingUsageThreshold'       => 'ScalingUsageThreshold',
        'strategyDisableDate'         => 'StrategyDisableDate',
        'strategyEnableDate'          => 'StrategyEnableDate',
        'strategyType'                => 'StrategyType',
        'warmUp'                      => 'WarmUp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
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
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }
        if (null !== $this->nodeUsed) {
            $res['NodeUsed'] = $this->nodeUsed;
        }
        if (null !== $this->recurrenceSchedules) {
            $res['RecurrenceSchedules'] = [];
            if (null !== $this->recurrenceSchedules && \is_array($this->recurrenceSchedules)) {
                $n = 0;
                foreach ($this->recurrenceSchedules as $item) {
                    $res['RecurrenceSchedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scalingDownAfterIdleMinutes) {
            $res['ScalingDownAfterIdleMinutes'] = $this->scalingDownAfterIdleMinutes;
        }
        if (null !== $this->scalingNodeAmount) {
            $res['ScalingNodeAmount'] = $this->scalingNodeAmount;
        }
        if (null !== $this->scalingNodeUsed) {
            $res['ScalingNodeUsed'] = $this->scalingNodeUsed;
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

    /**
     * @param array $map
     *
     * @return nodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
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
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }
        if (isset($map['NodeUsed'])) {
            $model->nodeUsed = $map['NodeUsed'];
        }
        if (isset($map['RecurrenceSchedules'])) {
            if (!empty($map['RecurrenceSchedules'])) {
                $model->recurrenceSchedules = [];
                $n                          = 0;
                foreach ($map['RecurrenceSchedules'] as $item) {
                    $model->recurrenceSchedules[$n++] = null !== $item ? recurrenceSchedules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScalingDownAfterIdleMinutes'])) {
            $model->scalingDownAfterIdleMinutes = $map['ScalingDownAfterIdleMinutes'];
        }
        if (isset($map['ScalingNodeAmount'])) {
            $model->scalingNodeAmount = $map['ScalingNodeAmount'];
        }
        if (isset($map['ScalingNodeUsed'])) {
            $model->scalingNodeUsed = $map['ScalingNodeUsed'];
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
