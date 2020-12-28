<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyFlowRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $refResource;

    /**
     * @var int
     */
    public $clusterFallbackThreshold;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $limitOrigin;

    /**
     * @var int
     */
    public $statDurationMs;

    /**
     * @var int
     */
    public $clusterThresholdType;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $relationStrategy;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @var float
     */
    public $clusterEstimatedMaxQps;

    /**
     * @var int
     */
    public $controlBehavior;

    /**
     * @var int
     */
    public $warmUpPeriodSec;

    /**
     * @var int
     */
    public $clusterFallbackStrategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $clusterMode;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'refResource'              => 'RefResource',
        'clusterFallbackThreshold' => 'ClusterFallbackThreshold',
        'namespace'                => 'Namespace',
        'limitOrigin'              => 'LimitOrigin',
        'statDurationMs'           => 'StatDurationMs',
        'clusterThresholdType'     => 'ClusterThresholdType',
        'ruleId'                   => 'RuleId',
        'relationStrategy'         => 'RelationStrategy',
        'appName'                  => 'AppName',
        'resource'                 => 'Resource',
        'maxQueueingTimeMs'        => 'MaxQueueingTimeMs',
        'clusterEstimatedMaxQps'   => 'ClusterEstimatedMaxQps',
        'controlBehavior'          => 'ControlBehavior',
        'warmUpPeriodSec'          => 'WarmUpPeriodSec',
        'clusterFallbackStrategy'  => 'ClusterFallbackStrategy',
        'threshold'                => 'Threshold',
        'clusterMode'              => 'ClusterMode',
        'enable'                   => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refResource) {
            $res['RefResource'] = $this->refResource;
        }
        if (null !== $this->clusterFallbackThreshold) {
            $res['ClusterFallbackThreshold'] = $this->clusterFallbackThreshold;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->limitOrigin) {
            $res['LimitOrigin'] = $this->limitOrigin;
        }
        if (null !== $this->statDurationMs) {
            $res['StatDurationMs'] = $this->statDurationMs;
        }
        if (null !== $this->clusterThresholdType) {
            $res['ClusterThresholdType'] = $this->clusterThresholdType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->relationStrategy) {
            $res['RelationStrategy'] = $this->relationStrategy;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }
        if (null !== $this->clusterEstimatedMaxQps) {
            $res['ClusterEstimatedMaxQps'] = $this->clusterEstimatedMaxQps;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->warmUpPeriodSec) {
            $res['WarmUpPeriodSec'] = $this->warmUpPeriodSec;
        }
        if (null !== $this->clusterFallbackStrategy) {
            $res['ClusterFallbackStrategy'] = $this->clusterFallbackStrategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefResource'])) {
            $model->refResource = $map['RefResource'];
        }
        if (isset($map['ClusterFallbackThreshold'])) {
            $model->clusterFallbackThreshold = $map['ClusterFallbackThreshold'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['LimitOrigin'])) {
            $model->limitOrigin = $map['LimitOrigin'];
        }
        if (isset($map['StatDurationMs'])) {
            $model->statDurationMs = $map['StatDurationMs'];
        }
        if (isset($map['ClusterThresholdType'])) {
            $model->clusterThresholdType = $map['ClusterThresholdType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RelationStrategy'])) {
            $model->relationStrategy = $map['RelationStrategy'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }
        if (isset($map['ClusterEstimatedMaxQps'])) {
            $model->clusterEstimatedMaxQps = $map['ClusterEstimatedMaxQps'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['WarmUpPeriodSec'])) {
            $model->warmUpPeriodSec = $map['WarmUpPeriodSec'];
        }
        if (isset($map['ClusterFallbackStrategy'])) {
            $model->clusterFallbackStrategy = $map['ClusterFallbackStrategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
