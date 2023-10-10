<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationScalingRuleRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplicationlink](~~149390~~).
     *
     * @example 78194c76-3dca-418e-a263-cccd1ab4****
     *
     * @var string
     */
    public $appId;

    /**
     * @description 配置自定义弹性行为，具体数据结构参考样例。
     *
     * @example {
     * }
     * @var string
     */
    public $scalingBehaviour;

    /**
     * @description Specifies whether to enable the auto scaling policy. Valid values:
     *
     *   **true**: enables the auto scaling policy.
     *   **false**: disables the auto scaling policy.
     *
     * @example true
     *
     * @var bool
     */
    public $scalingRuleEnable;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var string
     */
    public $scalingRuleMetric;

    /**
     * @description The name of the auto scaling policy. The name must start with a lowercase letter, and can contain lowercase letters, digits, and hyphens (-). The name must be 1 to 32 characters in length.
     *
     * @example cpu-trigger
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var string
     */
    public $scalingRuleTimer;

    /**
     * @description The trigger policy for the auto scaling policy. Set the value in the JSON format by using the ScalingRuleTriggerDTO class. For more information, see Additional information about request parameters.
     *
     * @example ScalingRuleTriggerDTO{......}
     *
     * @var string
     */
    public $scalingRuleTrigger;

    /**
     * @description The type of the auto scaling policy. Set the value to **trigger**.
     *
     * @example trigger
     *
     * @var string
     */
    public $scalingRuleType;
    protected $_name = [
        'appId'              => 'AppId',
        'scalingBehaviour'   => 'ScalingBehaviour',
        'scalingRuleEnable'  => 'ScalingRuleEnable',
        'scalingRuleMetric'  => 'ScalingRuleMetric',
        'scalingRuleName'    => 'ScalingRuleName',
        'scalingRuleTimer'   => 'ScalingRuleTimer',
        'scalingRuleTrigger' => 'ScalingRuleTrigger',
        'scalingRuleType'    => 'ScalingRuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->scalingBehaviour) {
            $res['ScalingBehaviour'] = $this->scalingBehaviour;
        }
        if (null !== $this->scalingRuleEnable) {
            $res['ScalingRuleEnable'] = $this->scalingRuleEnable;
        }
        if (null !== $this->scalingRuleMetric) {
            $res['ScalingRuleMetric'] = $this->scalingRuleMetric;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->scalingRuleTimer) {
            $res['ScalingRuleTimer'] = $this->scalingRuleTimer;
        }
        if (null !== $this->scalingRuleTrigger) {
            $res['ScalingRuleTrigger'] = $this->scalingRuleTrigger;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ScalingBehaviour'])) {
            $model->scalingBehaviour = $map['ScalingBehaviour'];
        }
        if (isset($map['ScalingRuleEnable'])) {
            $model->scalingRuleEnable = $map['ScalingRuleEnable'];
        }
        if (isset($map['ScalingRuleMetric'])) {
            $model->scalingRuleMetric = $map['ScalingRuleMetric'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['ScalingRuleTimer'])) {
            $model->scalingRuleTimer = $map['ScalingRuleTimer'];
        }
        if (isset($map['ScalingRuleTrigger'])) {
            $model->scalingRuleTrigger = $map['ScalingRuleTrigger'];
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }

        return $model;
    }
}
