<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\ConsumerInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\EnvironmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponseBody\data\items\resourceInfo;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The API details.
     *
     * @var HttpApiApiInfo
     */
    public $apiInfo;

    /**
     * @description The rule ID.
     *
     * @example car-csgeka5lhtggrjcprok0
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;

    /**
     * @description The consumer ID.
     *
     * @example cs-csheiftlhtgmp0j0hp4g
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The consumer information.
     *
     * @var ConsumerInfo
     */
    public $consumerInfo;

    /**
     * @description The creation timestamp. Unit: milliseconds.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The deployment status of the API in the current environment.
     *
     * @example {}
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @description The environment information.
     *
     * @var EnvironmentInfo
     */
    public $environmentInfo;

    /**
     * @description The expiry mode. Valid values: LongTerm and ShortTerm.
     *
     * @example ShortTerm
     *
     * @var string
     */
    public $expireMode;

    /**
     * @description The rule status.
     *
     * @example InEffect
     *
     * @var string
     */
    public $expireStatus;

    /**
     * @description The time when the rule expires.
     *
     * @example 172086834548
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The instance information.
     *
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @description The resource IDs.
     *
     * @example 2351944
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource information.
     *
     * @var resourceInfo
     */
    public $resourceInfo;

    /**
     * @description The resource type.
     *
     * @example HttpApiRoute
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The update timestamp. Unit: milliseconds.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'apiInfo' => 'apiInfo',
        'consumerAuthorizationRuleId' => 'consumerAuthorizationRuleId',
        'consumerId' => 'consumerId',
        'consumerInfo' => 'consumerInfo',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'environmentInfo' => 'environmentInfo',
        'expireMode' => 'expireMode',
        'expireStatus' => 'expireStatus',
        'expireTimestamp' => 'expireTimestamp',
        'gatewayInfo' => 'gatewayInfo',
        'resourceId' => 'resourceId',
        'resourceInfo' => 'resourceInfo',
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
        if (null !== $this->consumerInfo) {
            $res['consumerInfo'] = null !== $this->consumerInfo ? $this->consumerInfo->toMap() : null;
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
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceInfo) {
            $res['resourceInfo'] = null !== $this->resourceInfo ? $this->resourceInfo->toMap() : null;
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
     * @return items
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
        if (isset($map['consumerInfo'])) {
            $model->consumerInfo = ConsumerInfo::fromMap($map['consumerInfo']);
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
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceInfo'])) {
            $model->resourceInfo = resourceInfo::fromMap($map['resourceInfo']);
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
