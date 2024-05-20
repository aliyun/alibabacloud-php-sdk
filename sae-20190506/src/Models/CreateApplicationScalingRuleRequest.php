<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationScalingRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @example 3
     *
     * @var int
     */
    public $minReadyInstances;

    /**
     * @example true
     *
     * @var bool
     */
    public $scalingRuleEnable;

    /**
     * @example {"maxReplicas":3,"minReplicas":1,"metrics":[{"metricType":"CPU","metricTargetAverageUtilization":20},{"metricType":"MEMORY","metricTargetAverageUtilization":30},{"metricType":"tcpActiveConn","metricTargetAverageUtilization":20},{"metricType":"SLB_QPS","MetricTargetAverageUtilization":25,"SlbProject":"aliyun-fc-cn-hangzhou-d95881d9-5d3c-5f26-a6b8-************","SlbLogstore":"function-log","Vport":"80"},{"metricType":"SLB_RT","MetricTargetAverageUtilization":35,"SlbProject":"aliyun-fc-cn-hangzhou-d95881d9-5d3c-5f26-a6b8-************","SlbLogstore":"function-log","Vport":"80"}],"scaleUpRules":{"step":"100","disabled":false,"stabilizationWindowSeconds":0},"scaleDownRules":{"step":"100","disabled":false,"stabilizationWindowSeconds":300}}
     *
     * @var string
     */
    public $scalingRuleMetric;

    /**
     * @description This parameter is required.
     *
     * @example timer-0800-2100
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @example {"beginDate":null,"endDate":null,"period":"* * *","schedules":[{"atTime":"08:00","targetReplicas":10},{"atTime":"20:00","targetReplicas":3}]}
     *
     * @var string
     */
    public $scalingRuleTimer;

    /**
     * @description This parameter is required.
     *
     * @example timing
     *
     * @var string
     */
    public $scalingRuleType;
    protected $_name = [
        'appId'                 => 'AppId',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances'     => 'MinReadyInstances',
        'scalingRuleEnable'     => 'ScalingRuleEnable',
        'scalingRuleMetric'     => 'ScalingRuleMetric',
        'scalingRuleName'       => 'ScalingRuleName',
        'scalingRuleTimer'      => 'ScalingRuleTimer',
        'scalingRuleType'       => 'ScalingRuleType',
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
        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }
        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
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
        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }
        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
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
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }

        return $model;
    }
}
