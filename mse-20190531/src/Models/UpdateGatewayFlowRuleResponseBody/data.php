<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayFlowRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
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
     * @example gw-e2d226bba4b2445c9e29fa7f8216****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 549
     *
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $idList;

    /**
     * @example 0
     *
     * @var int
     */
    public $limitMode;

    /**
     * @example key=value
     *
     * @var string
     */
    public $responseAdditionalHeaders;

    /**
     * @example Text
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
     * @example 48811
     *
     * @var int
     */
    public $routeId;

    /**
     * @example routeA
     *
     * @var string
     */
    public $routeName;

    /**
     * @example 10
     *
     * @var int
     */
    public $statDurationMs;

    /**
     * @example 10
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'behaviorType'              => 'BehaviorType',
        'bodyEncoding'              => 'BodyEncoding',
        'enable'                    => 'Enable',
        'gatewayId'                 => 'GatewayId',
        'gatewayUniqueId'           => 'GatewayUniqueId',
        'id'                        => 'Id',
        'idList'                    => 'IdList',
        'limitMode'                 => 'LimitMode',
        'responseAdditionalHeaders' => 'ResponseAdditionalHeaders',
        'responseContentBody'       => 'ResponseContentBody',
        'responseRedirectUrl'       => 'ResponseRedirectUrl',
        'responseStatusCode'        => 'ResponseStatusCode',
        'routeId'                   => 'RouteId',
        'routeName'                 => 'RouteName',
        'statDurationMs'            => 'StatDurationMs',
        'threshold'                 => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['IdList'] = $this->idList;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->idList = $map['IdList'];
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
