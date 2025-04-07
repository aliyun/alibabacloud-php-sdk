<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool\recurrenceSchedules;
use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @description The number of resources purchased when the delivery group was created.
     *
     * @example 2
     *
     * @var int
     */
    public $amount;

    /**
     * @description The maximum number of idle sessions. After you specify a value for this parameter, auto scale-out is triggered only if the number of idle sessions in the delivery group is smaller than the specified value and the session usage exceeds the value specified for `ScalingUsageThreshold`. Otherwise, the system determines that idle sessions in the delivery group are sufficient and does not perform auto scale-out.`` You can use this parameter to flexibly manage auto scaling and reduce costs.
     *
     * @example 3
     *
     * @var int
     */
    public $maxIdleAppInstanceAmount;

    /**
     * @description The maximum number of resources that can be created for scale-out.
     *
     * @example 8
     *
     * @var int
     */
    public $maxScalingAmount;

    /**
     * @description The total number of subscription resources.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The maximum number of sessions that can be connected to a resource at the same time. If a resource connects to a large number of sessions at the same time, user experience can be compromised. The value range varies based on the resource specification. The following items describe the value ranges of different resource types:
     *
     *   appstreaming.general.4c8g: 1 to 2
     *   appstreaming.general.8c16g: 1 to 4
     *   appstreaming.vgpu.8c16g.4g: 1 to 4
     *   appstreaming.vgpu.8c31g.16g: 1 to 4
     *   appstreaming.vgpu.14c93g.12g: 1 to 6
     *
     * @example 2
     *
     * @var int
     */
    public $nodeCapacity;

    /**
     * @description The ID of the resource specification that you purchase.
     *
     * @example appstreaming.vgpu.4c8g.2g
     *
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-g6922kced36hx****
     *
     * @var string
     */
    public $nodePoolId;

    /**
     * @description The name of the resource specification.
     *
     * @var string
     */
    public $nodeTypeName;

    /**
     * @description The number of subscription resources that are in use.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeUsed;

    /**
     * @description The intervals at which the scaling policy is executed.
     *
     * @var recurrenceSchedules[]
     */
    public $recurrenceSchedules;

    /**
     * @description The duration for which no session is connected. Unit: minutes. If no session is connected in the resources after the specified duration elapses, auto scale-in is triggered. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $scalingDownAfterIdleMinutes;

    /**
     * @description The total number of scalable resources.
     *
     * @example 8
     *
     * @var int
     */
    public $scalingNodeAmount;

    /**
     * @description The number of scalable resources that are in use.
     *
     * @example 4
     *
     * @var int
     */
    public $scalingNodeUsed;

    /**
     * @description The number of resources that are created each time resources are scaled out. Valid values: 1 to 10.
     *
     * @example 2
     *
     * @var int
     */
    public $scalingStep;

    /**
     * @description The upper limit of session usage. If the session usage exceeds the specified upper limit, auto scale-out is triggered. The session usage is calculated by using the following formula: `Session usage = Number of current sessions/(Total number of resources × Number of concurrent sessions) × 100%`.
     *
     * @example 85
     *
     * @var string
     */
    public $scalingUsageThreshold;

    /**
     * @description The expiration date of the scaling policy. Format: yyyy-MM-dd.
     *
     * @example 2022-09-08
     *
     * @var string
     */
    public $strategyDisableDate;

    /**
     * @description The effective date of the scaling policy. Format: yyyy-MM-dd.
     *
     * @example 2022-08-01
     *
     * @var string
     */
    public $strategyEnableDate;

    /**
     * @description The type of the scaling policy.
     *
     * >  `NODE_SCALING_BY_USAGE` is returned for this parameter only if ChargeType is set to `PrePaid`. `NODE_SCALING_BY_SCHEDULE` is returned for this parameter only if ChargeType is set to `PostPaid`.
     *
     * Valid values:
     *
     *   NODE_FIXED: No scalable resources are used.
     *   NODE_SCALING_BY_SCHEDULE: Scheduled scaling is used.
     *   NODE_SCALING_BY_USAGE: Resources are scaled based on usage.
     *
     * @example NODE_FIXED
     *
     * @var string
     */
    public $strategyType;

    /**
     * @description Indicates whether resource prefetch is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $warmUp;
    protected $_name = [
        'amount' => 'Amount',
        'maxIdleAppInstanceAmount' => 'MaxIdleAppInstanceAmount',
        'maxScalingAmount' => 'MaxScalingAmount',
        'nodeAmount' => 'NodeAmount',
        'nodeCapacity' => 'NodeCapacity',
        'nodeInstanceType' => 'NodeInstanceType',
        'nodePoolId' => 'NodePoolId',
        'nodeTypeName' => 'NodeTypeName',
        'nodeUsed' => 'NodeUsed',
        'recurrenceSchedules' => 'RecurrenceSchedules',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingNodeAmount' => 'ScalingNodeAmount',
        'scalingNodeUsed' => 'ScalingNodeUsed',
        'scalingStep' => 'ScalingStep',
        'scalingUsageThreshold' => 'ScalingUsageThreshold',
        'strategyDisableDate' => 'StrategyDisableDate',
        'strategyEnableDate' => 'StrategyEnableDate',
        'strategyType' => 'StrategyType',
        'warmUp' => 'WarmUp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
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
        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }
        if (null !== $this->nodeTypeName) {
            $res['NodeTypeName'] = $this->nodeTypeName;
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
        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }
        if (isset($map['NodeTypeName'])) {
            $model->nodeTypeName = $map['NodeTypeName'];
        }
        if (isset($map['NodeUsed'])) {
            $model->nodeUsed = $map['NodeUsed'];
        }
        if (isset($map['RecurrenceSchedules'])) {
            if (!empty($map['RecurrenceSchedules'])) {
                $model->recurrenceSchedules = [];
                $n = 0;
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
