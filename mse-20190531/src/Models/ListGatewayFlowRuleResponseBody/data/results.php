<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayFlowRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class results extends Model
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
     * @var int[]
     */
    public $idList;

    /**
     * @var int
     */
    public $limitMode;

    /**
     * @var string
     */
    public $responseAdditionalHeaders;

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
    public $statDurationMs;

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'behaviorType' => 'BehaviorType',
        'bodyEncoding' => 'BodyEncoding',
        'enable' => 'Enable',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
        'idList' => 'IdList',
        'limitMode' => 'LimitMode',
        'responseAdditionalHeaders' => 'ResponseAdditionalHeaders',
        'responseContentBody' => 'ResponseContentBody',
        'responseRedirectUrl' => 'ResponseRedirectUrl',
        'responseStatusCode' => 'ResponseStatusCode',
        'routeId' => 'RouteId',
        'routeName' => 'RouteName',
        'statDurationMs' => 'StatDurationMs',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
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

        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1 = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->limitMode) {
            $res['LimitMode'] = $this->limitMode;
        }

        if (null !== $this->responseAdditionalHeaders) {
            $res['ResponseAdditionalHeaders'] = $this->responseAdditionalHeaders;
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

        if (null !== $this->statDurationMs) {
            $res['StatDurationMs'] = $this->statDurationMs;
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

        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1 = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LimitMode'])) {
            $model->limitMode = $map['LimitMode'];
        }

        if (isset($map['ResponseAdditionalHeaders'])) {
            $model->responseAdditionalHeaders = $map['ResponseAdditionalHeaders'];
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

        if (isset($map['StatDurationMs'])) {
            $model->statDurationMs = $map['StatDurationMs'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
