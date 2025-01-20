<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayFlowRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
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
    public $id;
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
    public $threshold;
    protected $_name = [
        'behaviorType'        => 'BehaviorType',
        'bodyEncoding'        => 'BodyEncoding',
        'enable'              => 'Enable',
        'gatewayId'           => 'GatewayId',
        'gatewayUniqueId'     => 'GatewayUniqueId',
        'id'                  => 'Id',
        'responseContentBody' => 'ResponseContentBody',
        'responseRedirectUrl' => 'ResponseRedirectUrl',
        'responseStatusCode'  => 'ResponseStatusCode',
        'routeId'             => 'RouteId',
        'routeName'           => 'RouteName',
        'threshold'           => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
