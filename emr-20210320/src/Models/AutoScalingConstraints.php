<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingConstraints\supportMetricTags;
use AlibabaCloud\Tea\Model;

class AutoScalingConstraints extends Model
{
    /**
     * @description 按负载伸缩指标单位描述。
     *
     * @var MetricUnitValue[]
     */
    public $autoScalingMetricUnits;

    /**
     * @description 默认按负载弹性伸缩规则列表
     *
     * @var ScalingRule[]
     */
    public $defaultMetricTriggeredRules;

    /**
     * @description 单次伸缩活动最大扩缩容节点数量。
     *
     * @example 1000
     *
     * @var int
     */
    public $maxAdjustmentValue;

    /**
     * @description 按负载规则数量最大值。
     *
     * @example 10
     *
     * @var int
     */
    public $maxByLoadRuleCount;

    /**
     * @description 按时间规则数量最大值。
     *
     * @example 10
     *
     * @var int
     */
    public $maxByTimeRuleCount;

    /**
     * @description 支持的按负载弹性伸缩指标Tag列表。
     *
     * @var supportMetricTags[]
     */
    public $supportMetricTags;

    /**
     * @description 支持的按负载弹性伸缩指标列表。
     *
     * @example ["YarnRootAvailableMemoryUsage","YarnRootAvailableVcores"]
     *
     * @var string[]
     */
    public $supportMetrics;

    /**
     * @description 支持的弹性伸缩规则类型。
     *
     * @example ["TIME_TRIGGER","METRICS_TRIGGER"]
     *
     * @var string[]
     */
    public $supportRuleTypes;
    protected $_name = [
        'autoScalingMetricUnits'      => 'AutoScalingMetricUnits',
        'defaultMetricTriggeredRules' => 'DefaultMetricTriggeredRules',
        'maxAdjustmentValue'          => 'MaxAdjustmentValue',
        'maxByLoadRuleCount'          => 'MaxByLoadRuleCount',
        'maxByTimeRuleCount'          => 'MaxByTimeRuleCount',
        'supportMetricTags'           => 'SupportMetricTags',
        'supportMetrics'              => 'SupportMetrics',
        'supportRuleTypes'            => 'SupportRuleTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScalingMetricUnits) {
            $res['AutoScalingMetricUnits'] = [];
            if (null !== $this->autoScalingMetricUnits && \is_array($this->autoScalingMetricUnits)) {
                $n = 0;
                foreach ($this->autoScalingMetricUnits as $item) {
                    $res['AutoScalingMetricUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultMetricTriggeredRules) {
            $res['DefaultMetricTriggeredRules'] = [];
            if (null !== $this->defaultMetricTriggeredRules && \is_array($this->defaultMetricTriggeredRules)) {
                $n = 0;
                foreach ($this->defaultMetricTriggeredRules as $item) {
                    $res['DefaultMetricTriggeredRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxAdjustmentValue) {
            $res['MaxAdjustmentValue'] = $this->maxAdjustmentValue;
        }
        if (null !== $this->maxByLoadRuleCount) {
            $res['MaxByLoadRuleCount'] = $this->maxByLoadRuleCount;
        }
        if (null !== $this->maxByTimeRuleCount) {
            $res['MaxByTimeRuleCount'] = $this->maxByTimeRuleCount;
        }
        if (null !== $this->supportMetricTags) {
            $res['SupportMetricTags'] = [];
            if (null !== $this->supportMetricTags && \is_array($this->supportMetricTags)) {
                $n = 0;
                foreach ($this->supportMetricTags as $item) {
                    $res['SupportMetricTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportMetrics) {
            $res['SupportMetrics'] = $this->supportMetrics;
        }
        if (null !== $this->supportRuleTypes) {
            $res['SupportRuleTypes'] = $this->supportRuleTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutoScalingConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoScalingMetricUnits'])) {
            if (!empty($map['AutoScalingMetricUnits'])) {
                $model->autoScalingMetricUnits = [];
                $n                             = 0;
                foreach ($map['AutoScalingMetricUnits'] as $item) {
                    $model->autoScalingMetricUnits[$n++] = null !== $item ? MetricUnitValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultMetricTriggeredRules'])) {
            if (!empty($map['DefaultMetricTriggeredRules'])) {
                $model->defaultMetricTriggeredRules = [];
                $n                                  = 0;
                foreach ($map['DefaultMetricTriggeredRules'] as $item) {
                    $model->defaultMetricTriggeredRules[$n++] = null !== $item ? ScalingRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxAdjustmentValue'])) {
            $model->maxAdjustmentValue = $map['MaxAdjustmentValue'];
        }
        if (isset($map['MaxByLoadRuleCount'])) {
            $model->maxByLoadRuleCount = $map['MaxByLoadRuleCount'];
        }
        if (isset($map['MaxByTimeRuleCount'])) {
            $model->maxByTimeRuleCount = $map['MaxByTimeRuleCount'];
        }
        if (isset($map['SupportMetricTags'])) {
            if (!empty($map['SupportMetricTags'])) {
                $model->supportMetricTags = [];
                $n                        = 0;
                foreach ($map['SupportMetricTags'] as $item) {
                    $model->supportMetricTags[$n++] = null !== $item ? supportMetricTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportMetrics'])) {
            if (!empty($map['SupportMetrics'])) {
                $model->supportMetrics = $map['SupportMetrics'];
            }
        }
        if (isset($map['SupportRuleTypes'])) {
            if (!empty($map['SupportRuleTypes'])) {
                $model->supportRuleTypes = $map['SupportRuleTypes'];
            }
        }

        return $model;
    }
}
