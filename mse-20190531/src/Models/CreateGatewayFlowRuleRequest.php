<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayFlowRuleRequest extends Model
{
    /**
     * @description The language in which you want to display the results. Valid values: zh and en. zh indicates Chinese, which is the default value. en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The type of the web fallback behavior.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $behaviorType;

    /**
     * @description The encoding format.
     *
     * 1: JSON
     * @example 0
     *
     * @var int
     */
    public $bodyEncoding;

    /**
     * @description Specifies whether to enable the throttling rule.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $enable;

    /**
     * @description The ID of the gateway.
     *
     * @example 14407
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     * @example gw-e2d226bba4b2445c9e29fa7f8216****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The HTTP text to be returned.
     *
     * @example text
     *
     * @var string
     */
    public $responseContentBody;

    /**
     * @description The address to be redirected to.
     *
     * @example www.******.com
     *
     * @var string
     */
    public $responseRedirectUrl;

    /**
     * @description The HTTP status code.
     *
     * @example 429
     *
     * @var int
     */
    public $responseStatusCode;

    /**
     * @description The ID of the route.
     *
     * This parameter is required.
     * @example 52853
     *
     * @var int
     */
    public $routeId;

    /**
     * @description The name of the routing rule.
     *
     * This parameter is required.
     * @example routeName
     *
     * @var string
     */
    public $routeName;

    /**
     * @description The overall queries per second (QPS) threshold.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'behaviorType'        => 'BehaviorType',
        'bodyEncoding'        => 'BodyEncoding',
        'enable'              => 'Enable',
        'gatewayId'           => 'GatewayId',
        'gatewayUniqueId'     => 'GatewayUniqueId',
        'responseContentBody' => 'ResponseContentBody',
        'responseRedirectUrl' => 'ResponseRedirectUrl',
        'responseStatusCode'  => 'ResponseStatusCode',
        'routeId'             => 'RouteId',
        'routeName'           => 'RouteName',
        'threshold'           => 'Threshold',
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
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayFlowRuleRequest
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
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
