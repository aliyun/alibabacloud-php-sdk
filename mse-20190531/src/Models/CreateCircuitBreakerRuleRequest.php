<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateCircuitBreakerRuleRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@c3df23522bXXXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description Specifies whether to enable the rule.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The minimum number of requests that can be passed in each step after circuit breaking recovers. Default value: 1.
     *
     * @example 5
     *
     * @var int
     */
    public $halfOpenBaseAmountPerStep;

    /**
     * @description The number of circuit breaking recovery steps. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $halfOpenRecoveryStepNum;

    /**
     * @description The maximum response time (RT). Unit: milliseconds. If the RT of a request is greater than the value of this parameter, a slow call is counted. If you set Strategy to 0, you must specify this parameter.
     *
     * @example 200
     *
     * @var int
     */
    public $maxAllowedRtMs;

    /**
     * @description The minimum number of requests to trigger circuit breaking. If the number of requests in the current time window is less than the value of this parameter, circuit breaking is not triggered even if the circuit breaking rule is met. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $minRequestAmount;

    /**
     * @description The microservice namespace to which the application belongs.
     *
     * This parameter is required.
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the interface to which the rule applies. The interface name must be the same as the name on the interface details page in the console.
     *
     * This parameter is required.
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   0: custom interface
     *   1: web
     *   2: RPC
     *   3: route
     *   4: SQL
     *
     * @example 0
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The period in which circuit breaking is implemented. Unit: milliseconds. If circuit breaking is implemented on the requests for the route, the calls to all the requests for the route fail in the configured circuit breaking period. The value must be an integral multiple of 1,000. Default value: 10000. This value indicates 10 seconds.
     *
     * @example 10000
     *
     * @var int
     */
    public $retryTimeoutMs;

    /**
     * @description The length of the time window. Unit: milliseconds. The valid range is from 1 second to 120 minutes. The default value is 20000. This value indicates 20 seconds.
     *
     * @example 20000
     *
     * @var int
     */
    public $statIntervalMs;

    /**
     * @description The threshold type.
     *
     * Valid values:
     *
     *   0
     *
     * <!-- -->
     *
     *   1
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @description A percentage threshold for triggering circuit breaking. Valid values: 0-1. These values represent 0% to 100%.
     *
     * This parameter is required.
     * @example 0.8
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage'            => 'AcceptLanguage',
        'appId'                     => 'AppId',
        'appName'                   => 'AppName',
        'enable'                    => 'Enable',
        'halfOpenBaseAmountPerStep' => 'HalfOpenBaseAmountPerStep',
        'halfOpenRecoveryStepNum'   => 'HalfOpenRecoveryStepNum',
        'maxAllowedRtMs'            => 'MaxAllowedRtMs',
        'minRequestAmount'          => 'MinRequestAmount',
        'namespace'                 => 'Namespace',
        'regionId'                  => 'RegionId',
        'resource'                  => 'Resource',
        'resourceType'              => 'ResourceType',
        'retryTimeoutMs'            => 'RetryTimeoutMs',
        'statIntervalMs'            => 'StatIntervalMs',
        'strategy'                  => 'Strategy',
        'threshold'                 => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->halfOpenBaseAmountPerStep) {
            $res['HalfOpenBaseAmountPerStep'] = $this->halfOpenBaseAmountPerStep;
        }
        if (null !== $this->halfOpenRecoveryStepNum) {
            $res['HalfOpenRecoveryStepNum'] = $this->halfOpenRecoveryStepNum;
        }
        if (null !== $this->maxAllowedRtMs) {
            $res['MaxAllowedRtMs'] = $this->maxAllowedRtMs;
        }
        if (null !== $this->minRequestAmount) {
            $res['MinRequestAmount'] = $this->minRequestAmount;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->retryTimeoutMs) {
            $res['RetryTimeoutMs'] = $this->retryTimeoutMs;
        }
        if (null !== $this->statIntervalMs) {
            $res['StatIntervalMs'] = $this->statIntervalMs;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCircuitBreakerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['HalfOpenBaseAmountPerStep'])) {
            $model->halfOpenBaseAmountPerStep = $map['HalfOpenBaseAmountPerStep'];
        }
        if (isset($map['HalfOpenRecoveryStepNum'])) {
            $model->halfOpenRecoveryStepNum = $map['HalfOpenRecoveryStepNum'];
        }
        if (isset($map['MaxAllowedRtMs'])) {
            $model->maxAllowedRtMs = $map['MaxAllowedRtMs'];
        }
        if (isset($map['MinRequestAmount'])) {
            $model->minRequestAmount = $map['MinRequestAmount'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RetryTimeoutMs'])) {
            $model->retryTimeoutMs = $map['RetryTimeoutMs'];
        }
        if (isset($map['StatIntervalMs'])) {
            $model->statIntervalMs = $map['StatIntervalMs'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
