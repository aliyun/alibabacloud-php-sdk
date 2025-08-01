<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayCircuitBreakerRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $behaviorType;

    /**
     * @example 0
     *
     * @var int
     */
    public $bodyEncoding;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $enable;

    /**
     * @example 14407
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description This parameter is required.
     *
     * @example gw-c9bc5afd61014165bd58f621b491*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxAllowedMs;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $minRequestAmount;

    /**
     * @description This parameter is required.
     *
     * @example 12
     *
     * @var int
     */
    public $recoveryTimeoutSec;

    /**
     * @example text
     *
     * @var string
     */
    public $responseContentBody;

    /**
     * @example www.******.com
     *
     * @var string
     */
    public $responseRedirectUrl;

    /**
     * @example 429
     *
     * @var int
     */
    public $responseStatusCode;

    /**
     * @description This parameter is required.
     *
     * @example 645
     *
     * @var int
     */
    public $routeId;

    /**
     * @description This parameter is required.
     *
     * @example routeName
     *
     * @var string
     */
    public $routeName;

    /**
     * @description This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $statDurationSec;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $triggerRatio;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'behaviorType' => 'BehaviorType',
        'bodyEncoding' => 'BodyEncoding',
        'enable' => 'Enable',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'maxAllowedMs' => 'MaxAllowedMs',
        'minRequestAmount' => 'MinRequestAmount',
        'recoveryTimeoutSec' => 'RecoveryTimeoutSec',
        'responseContentBody' => 'ResponseContentBody',
        'responseRedirectUrl' => 'ResponseRedirectUrl',
        'responseStatusCode' => 'ResponseStatusCode',
        'routeId' => 'RouteId',
        'routeName' => 'RouteName',
        'statDurationSec' => 'StatDurationSec',
        'strategy' => 'Strategy',
        'triggerRatio' => 'TriggerRatio',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->behaviorType) {
            $res['BehaviorType'] = $this->behaviorType;
        }
        if (null !== $this->bodyEncoding) {
            $res['BodyEncoding'] = $this->bodyEncoding;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->maxAllowedMs) {
            $res['MaxAllowedMs'] = $this->maxAllowedMs;
        }
        if (null !== $this->minRequestAmount) {
            $res['MinRequestAmount'] = $this->minRequestAmount;
        }
        if (null !== $this->recoveryTimeoutSec) {
            $res['RecoveryTimeoutSec'] = $this->recoveryTimeoutSec;
        }
        if (null !== $this->responseContentBody) {
            $res['ResponseContentBody'] = $this->responseContentBody;
        }
        if (null !== $this->responseRedirectUrl) {
            $res['ResponseRedirectUrl'] = $this->responseRedirectUrl;
        }
        if (null !== $this->responseStatusCode) {
            $res['ResponseStatusCode'] = $this->responseStatusCode;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->statDurationSec) {
            $res['StatDurationSec'] = $this->statDurationSec;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->triggerRatio) {
            $res['TriggerRatio'] = $this->triggerRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayCircuitBreakerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['BehaviorType'])) {
            $model->behaviorType = $map['BehaviorType'];
        }
        if (isset($map['BodyEncoding'])) {
            $model->bodyEncoding = $map['BodyEncoding'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['MaxAllowedMs'])) {
            $model->maxAllowedMs = $map['MaxAllowedMs'];
        }
        if (isset($map['MinRequestAmount'])) {
            $model->minRequestAmount = $map['MinRequestAmount'];
        }
        if (isset($map['RecoveryTimeoutSec'])) {
            $model->recoveryTimeoutSec = $map['RecoveryTimeoutSec'];
        }
        if (isset($map['ResponseContentBody'])) {
            $model->responseContentBody = $map['ResponseContentBody'];
        }
        if (isset($map['ResponseRedirectUrl'])) {
            $model->responseRedirectUrl = $map['ResponseRedirectUrl'];
        }
        if (isset($map['ResponseStatusCode'])) {
            $model->responseStatusCode = $map['ResponseStatusCode'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['StatDurationSec'])) {
            $model->statDurationSec = $map['StatDurationSec'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TriggerRatio'])) {
            $model->triggerRatio = $map['TriggerRatio'];
        }

        return $model;
    }
}
