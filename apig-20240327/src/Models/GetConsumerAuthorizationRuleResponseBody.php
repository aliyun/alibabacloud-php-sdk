<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerAuthorizationRuleResponseBody extends Model
{
    /**
     * @var HttpApiApiInfo
     */
    public $apiInfo;

    /**
     * @example car-ctgdn8em1hko5krqq03g
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @example cs-ctgdn2um1hkossul8gvg
     *
     * @var string
     */
    public $consumerId;

    /**
     * @example 1750852089975
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example ""
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @var EnvironmentInfo
     */
    public $environmentInfo;

    /**
     * @example LongTerm
     *
     * @var string
     */
    public $expireMode;

    /**
     * @example true
     *
     * @var string
     */
    public $expireStatus;

    /**
     * @example 1750852089975
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @description Id of the request
     *
     * @example 53102737-1E4E-5A8B-8E0A-4184B0959B84
     *
     * @var string
     */
    public $requestId;

    /**
     * @example API
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 1750852089975
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'apiInfo' => 'apiInfo',
        'consumerAuthorizationRuleId' => 'consumerAuthorizationRuleId',
        'consumerId' => 'consumerId',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'environmentInfo' => 'environmentInfo',
        'expireMode' => 'expireMode',
        'expireStatus' => 'expireStatus',
        'expireTimestamp' => 'expireTimestamp',
        'gatewayInfo' => 'gatewayInfo',
        'requestId' => 'requestId',
        'resourceType' => 'resourceType',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInfo) {
            $res['apiInfo'] = null !== $this->apiInfo ? $this->apiInfo->toMap() : null;
        }
        if (null !== $this->consumerAuthorizationRuleId) {
            $res['consumerAuthorizationRuleId'] = $this->consumerAuthorizationRuleId;
        }
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->expireMode) {
            $res['expireMode'] = $this->expireMode;
        }
        if (null !== $this->expireStatus) {
            $res['expireStatus'] = $this->expireStatus;
        }
        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerAuthorizationRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiInfo'])) {
            $model->apiInfo = HttpApiApiInfo::fromMap($map['apiInfo']);
        }
        if (isset($map['consumerAuthorizationRuleId'])) {
            $model->consumerAuthorizationRuleId = $map['consumerAuthorizationRuleId'];
        }
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }
        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = EnvironmentInfo::fromMap($map['environmentInfo']);
        }
        if (isset($map['expireMode'])) {
            $model->expireMode = $map['expireMode'];
        }
        if (isset($map['expireStatus'])) {
            $model->expireStatus = $map['expireStatus'];
        }
        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }
        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = GatewayInfo::fromMap($map['gatewayInfo']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
