<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingConstraints\supportMetricTags;

class AutoScalingConstraints extends Model
{
    /**
     * @var MetricUnitValue[]
     */
    public $autoScalingMetricUnits;
    /**
     * @var ScalingRule[]
     */
    public $defaultMetricTriggeredRules;
    /**
     * @var int
     */
    public $maxAdjustmentValue;
    /**
     * @var int
     */
    public $maxByLoadRuleCount;
    /**
     * @var int
     */
    public $maxByTimeRuleCount;
    /**
     * @var supportMetricTags[]
     */
    public $supportMetricTags;
    /**
     * @var string[]
     */
    public $supportMetrics;
    /**
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
        if (\is_array($this->autoScalingMetricUnits)) {
            Model::validateArray($this->autoScalingMetricUnits);
        }
        if (\is_array($this->defaultMetricTriggeredRules)) {
            Model::validateArray($this->defaultMetricTriggeredRules);
        }
        if (\is_array($this->supportMetricTags)) {
            Model::validateArray($this->supportMetricTags);
        }
        if (\is_array($this->supportMetrics)) {
            Model::validateArray($this->supportMetrics);
        }
        if (\is_array($this->supportRuleTypes)) {
            Model::validateArray($this->supportRuleTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScalingMetricUnits) {
            if (\is_array($this->autoScalingMetricUnits)) {
                $res['AutoScalingMetricUnits'] = [];
                $n1                            = 0;
                foreach ($this->autoScalingMetricUnits as $item1) {
                    $res['AutoScalingMetricUnits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defaultMetricTriggeredRules) {
            if (\is_array($this->defaultMetricTriggeredRules)) {
                $res['DefaultMetricTriggeredRules'] = [];
                $n1                                 = 0;
                foreach ($this->defaultMetricTriggeredRules as $item1) {
                    $res['DefaultMetricTriggeredRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->supportMetricTags)) {
                $res['SupportMetricTags'] = [];
                $n1                       = 0;
                foreach ($this->supportMetricTags as $item1) {
                    $res['SupportMetricTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->supportMetrics) {
            if (\is_array($this->supportMetrics)) {
                $res['SupportMetrics'] = [];
                $n1                    = 0;
                foreach ($this->supportMetrics as $item1) {
                    $res['SupportMetrics'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportRuleTypes) {
            if (\is_array($this->supportRuleTypes)) {
                $res['SupportRuleTypes'] = [];
                $n1                      = 0;
                foreach ($this->supportRuleTypes as $item1) {
                    $res['SupportRuleTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AutoScalingMetricUnits'])) {
            if (!empty($map['AutoScalingMetricUnits'])) {
                $model->autoScalingMetricUnits = [];
                $n1                            = 0;
                foreach ($map['AutoScalingMetricUnits'] as $item1) {
                    $model->autoScalingMetricUnits[$n1++] = MetricUnitValue::fromMap($item1);
                }
            }
        }

        if (isset($map['DefaultMetricTriggeredRules'])) {
            if (!empty($map['DefaultMetricTriggeredRules'])) {
                $model->defaultMetricTriggeredRules = [];
                $n1                                 = 0;
                foreach ($map['DefaultMetricTriggeredRules'] as $item1) {
                    $model->defaultMetricTriggeredRules[$n1++] = ScalingRule::fromMap($item1);
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
                $n1                       = 0;
                foreach ($map['SupportMetricTags'] as $item1) {
                    $model->supportMetricTags[$n1++] = supportMetricTags::fromMap($item1);
                }
            }
        }

        if (isset($map['SupportMetrics'])) {
            if (!empty($map['SupportMetrics'])) {
                $model->supportMetrics = [];
                $n1                    = 0;
                foreach ($map['SupportMetrics'] as $item1) {
                    $model->supportMetrics[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupportRuleTypes'])) {
            if (!empty($map['SupportRuleTypes'])) {
                $model->supportRuleTypes = [];
                $n1                      = 0;
                foreach ($map['SupportRuleTypes'] as $item1) {
                    $model->supportRuleTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
