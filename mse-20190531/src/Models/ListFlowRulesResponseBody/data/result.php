<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@5f1b08becb*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example finance
     *
     * @var string
     */
    public $appName;

    /**
     * @description The throttling effect.
     *
     * Valid values:
     *
     *   0
     *
     * <!-- -->
     *
     *   2
     *
     * <!-- -->
     * @example 0
     *
     * @var int
     */
    public $controlBehavior;

    /**
     * @description Indicates whether the throttling rule was enabled.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The throttling behavior.
     *
     * @example "{\"appName\":\"spring-cloud-a\",\"fallbackBehavior\":{\"webFallbackMode\":0,\"webRespContentType\":0,\"webRespMessage\":\"Blocked\",\"webRespStatusCode\":429},\"id\":977,\"name\":\"Fallback\",\"namespace\":\"default\",\"resourceClassification\":1}"
     *
     * @var string
     */
    public $fallbackObject;

    /**
     * @description The timeout period for queuing when the value of ControlBehavior is set to 2. Unit: milliseconds.
     *
     * @example 500
     *
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @description The statistical dimension. The value 1 indicates the number of accepted requests.
     *
     * @example 1
     *
     * @var int
     */
    public $metricType;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the interface resource.
     *
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the rule.
     *
     * @example 2
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The throttling threshold.
     *
     * @example 10
     *
     * @var float
     */
    public $threshold;

    /**
     * @description A reserved parameter.
     *
     * @example {\"origin\":\"default\"}
     *
     * @var mixed[]
     */
    public $trafficTags;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'controlBehavior'   => 'ControlBehavior',
        'enable'            => 'Enable',
        'fallbackObject'    => 'FallbackObject',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'metricType'        => 'MetricType',
        'namespace'         => 'Namespace',
        'regionId'          => 'RegionId',
        'resource'          => 'Resource',
        'ruleId'            => 'RuleId',
        'threshold'         => 'Threshold',
        'trafficTags'       => 'TrafficTags',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->fallbackObject) {
            $res['FallbackObject'] = $this->fallbackObject;
        }
        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->trafficTags) {
            $res['TrafficTags'] = $this->trafficTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FallbackObject'])) {
            $model->fallbackObject = $map['FallbackObject'];
        }
        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['TrafficTags'])) {
            $model->trafficTags = $map['TrafficTags'];
        }

        return $model;
    }
}
