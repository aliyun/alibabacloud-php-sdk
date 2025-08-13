<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayCircuitBreakerRuleRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $behaviorType;

    /**
     * @var int
     */
    public $bodyEncoding;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $maxAllowedMs;

    /**
     * @var int
     */
    public $minRequestAmount;

    /**
     * @var int
     */
    public $recoveryTimeoutSec;

    /**
     * @var string
     */
    public $responseContentBody;

    /**
     * @var string
     */
    public $responseRedirectUrl;

    /**
     * @var int
     */
    public $responseStatusCode;

    /**
     * @var int
     */
    public $routeId;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var int
     */
    public $statDurationSec;

    /**
     * @var int
     */
    public $strategy;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
