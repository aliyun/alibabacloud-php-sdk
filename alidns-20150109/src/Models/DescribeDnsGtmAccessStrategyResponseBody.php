<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\defaultAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\failoverAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategyResponseBody extends Model
{
    /**
     * @description The primary/secondary switchover policy for address pool groups. Valid values:
     *
     *   AUTO: performs automatic switchover between the primary and secondary address pool groups upon failures.
     *   DEFAULT: uses the primary address pool group.
     *   FAILOVER: uses the secondary address pool group.
     *
     * @example auto
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The time when the access policy was created.
     *
     * @example 2018-08-09T00:10Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates when the access policy was created.
     *
     * @example 1533773400000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The status of the primary address pool group. Valid values:
     *
     *   AVAILABLE: available
     *   NOT_AVAILABLE: unavailable
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $defaultAddrPoolGroupStatus;

    /**
     * @description The type of the primary address pool. Valid values:
     *
     *   IPV4
     *   IPV6
     *   DOMAIN
     *
     * @example ipv4
     *
     * @var string
     */
    public $defaultAddrPoolType;

    /**
     * @description The address pools in the primary address pool group.
     *
     * @var defaultAddrPools
     */
    public $defaultAddrPools;

    /**
     * @description The number of available addresses in the primary address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultAvailableAddrNum;

    /**
     * @description Indicates whether scheduling optimization for latency resolution was enabled for the primary address pool group. Valid values:
     *
     *   OPEN: enabled
     *   CLOSE: disabled
     *
     * @example open
     *
     * @var string
     */
    public $defaultLatencyOptimization;

    /**
     * @description The load balancing policy of the primary address pool group. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $defaultLbaStrategy;

    /**
     * @description The maximum number of addresses returned from the primary address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultMaxReturnAddrNum;

    /**
     * @description The minimum number of available addresses in the primary address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultMinAvailableAddrNum;

    /**
     * @description The type of the active address pool group. Valid values:
     *
     *   DEFAULT: the primary address pool group
     *   FAILOVER: the secondary address pool group
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @description The status of the secondary address pool group. Valid values:
     *
     *   AVAILABLE: available
     *   NOT_AVAILABLE: unavailable
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $failoverAddrPoolGroupStatus;

    /**
     * @description The type of the secondary address pool. Valid values:
     *
     *   IPV4
     *   IPV6
     *   DOMAIN
     *
     * @example ipv4
     *
     * @var string
     */
    public $failoverAddrPoolType;

    /**
     * @description The address pools in the secondary address pool group.
     *
     * @var failoverAddrPools
     */
    public $failoverAddrPools;

    /**
     * @description The number of available addresses in the secondary address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverAvailableAddrNum;

    /**
     * @description Indicates whether scheduling optimization for latency resolution was enabled for the secondary address pool group. Valid values:
     *
     *   OPEN: enabled
     *   CLOSE: disabled
     *
     * @example open
     *
     * @var string
     */
    public $failoverLatencyOptimization;

    /**
     * @description The load balancing policy of the secondary address pool group. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $failoverLbaStrategy;

    /**
     * @description The maximum number of addresses returned from the secondary address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverMaxReturnAddrNum;

    /**
     * @description The minimum number of available addresses in the secondary address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverMinAvailableAddrNum;

    /**
     * @description The ID of the associated instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The source regions.
     *
     * @var lines
     */
    public $lines;

    /**
     * @description The ID of the request.
     *
     * @example BA1608CA-834C-4E63-8682-8AF0B11ED72D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the access policy.
     *
     * @example strategyId1
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The type of the access policy. Valid values:
     *
     *   GEO: geographical location-based
     *   LATENCY: latency-based
     *
     * @example geo
     *
     * @var string
     */
    public $strategyMode;

    /**
     * @description The name of the access policy.
     *
     * @example strategyName1
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'accessMode'                  => 'AccessMode',
        'createTime'                  => 'CreateTime',
        'createTimestamp'             => 'CreateTimestamp',
        'defaultAddrPoolGroupStatus'  => 'DefaultAddrPoolGroupStatus',
        'defaultAddrPoolType'         => 'DefaultAddrPoolType',
        'defaultAddrPools'            => 'DefaultAddrPools',
        'defaultAvailableAddrNum'     => 'DefaultAvailableAddrNum',
        'defaultLatencyOptimization'  => 'DefaultLatencyOptimization',
        'defaultLbaStrategy'          => 'DefaultLbaStrategy',
        'defaultMaxReturnAddrNum'     => 'DefaultMaxReturnAddrNum',
        'defaultMinAvailableAddrNum'  => 'DefaultMinAvailableAddrNum',
        'effectiveAddrPoolGroupType'  => 'EffectiveAddrPoolGroupType',
        'failoverAddrPoolGroupStatus' => 'FailoverAddrPoolGroupStatus',
        'failoverAddrPoolType'        => 'FailoverAddrPoolType',
        'failoverAddrPools'           => 'FailoverAddrPools',
        'failoverAvailableAddrNum'    => 'FailoverAvailableAddrNum',
        'failoverLatencyOptimization' => 'FailoverLatencyOptimization',
        'failoverLbaStrategy'         => 'FailoverLbaStrategy',
        'failoverMaxReturnAddrNum'    => 'FailoverMaxReturnAddrNum',
        'failoverMinAvailableAddrNum' => 'FailoverMinAvailableAddrNum',
        'instanceId'                  => 'InstanceId',
        'lines'                       => 'Lines',
        'requestId'                   => 'RequestId',
        'strategyId'                  => 'StrategyId',
        'strategyMode'                => 'StrategyMode',
        'strategyName'                => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->defaultAddrPoolGroupStatus) {
            $res['DefaultAddrPoolGroupStatus'] = $this->defaultAddrPoolGroupStatus;
        }
        if (null !== $this->defaultAddrPoolType) {
            $res['DefaultAddrPoolType'] = $this->defaultAddrPoolType;
        }
        if (null !== $this->defaultAddrPools) {
            $res['DefaultAddrPools'] = null !== $this->defaultAddrPools ? $this->defaultAddrPools->toMap() : null;
        }
        if (null !== $this->defaultAvailableAddrNum) {
            $res['DefaultAvailableAddrNum'] = $this->defaultAvailableAddrNum;
        }
        if (null !== $this->defaultLatencyOptimization) {
            $res['DefaultLatencyOptimization'] = $this->defaultLatencyOptimization;
        }
        if (null !== $this->defaultLbaStrategy) {
            $res['DefaultLbaStrategy'] = $this->defaultLbaStrategy;
        }
        if (null !== $this->defaultMaxReturnAddrNum) {
            $res['DefaultMaxReturnAddrNum'] = $this->defaultMaxReturnAddrNum;
        }
        if (null !== $this->defaultMinAvailableAddrNum) {
            $res['DefaultMinAvailableAddrNum'] = $this->defaultMinAvailableAddrNum;
        }
        if (null !== $this->effectiveAddrPoolGroupType) {
            $res['EffectiveAddrPoolGroupType'] = $this->effectiveAddrPoolGroupType;
        }
        if (null !== $this->failoverAddrPoolGroupStatus) {
            $res['FailoverAddrPoolGroupStatus'] = $this->failoverAddrPoolGroupStatus;
        }
        if (null !== $this->failoverAddrPoolType) {
            $res['FailoverAddrPoolType'] = $this->failoverAddrPoolType;
        }
        if (null !== $this->failoverAddrPools) {
            $res['FailoverAddrPools'] = null !== $this->failoverAddrPools ? $this->failoverAddrPools->toMap() : null;
        }
        if (null !== $this->failoverAvailableAddrNum) {
            $res['FailoverAvailableAddrNum'] = $this->failoverAvailableAddrNum;
        }
        if (null !== $this->failoverLatencyOptimization) {
            $res['FailoverLatencyOptimization'] = $this->failoverLatencyOptimization;
        }
        if (null !== $this->failoverLbaStrategy) {
            $res['FailoverLbaStrategy'] = $this->failoverLbaStrategy;
        }
        if (null !== $this->failoverMaxReturnAddrNum) {
            $res['FailoverMaxReturnAddrNum'] = $this->failoverMaxReturnAddrNum;
        }
        if (null !== $this->failoverMinAvailableAddrNum) {
            $res['FailoverMinAvailableAddrNum'] = $this->failoverMinAvailableAddrNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAccessStrategyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DefaultAddrPoolGroupStatus'])) {
            $model->defaultAddrPoolGroupStatus = $map['DefaultAddrPoolGroupStatus'];
        }
        if (isset($map['DefaultAddrPoolType'])) {
            $model->defaultAddrPoolType = $map['DefaultAddrPoolType'];
        }
        if (isset($map['DefaultAddrPools'])) {
            $model->defaultAddrPools = defaultAddrPools::fromMap($map['DefaultAddrPools']);
        }
        if (isset($map['DefaultAvailableAddrNum'])) {
            $model->defaultAvailableAddrNum = $map['DefaultAvailableAddrNum'];
        }
        if (isset($map['DefaultLatencyOptimization'])) {
            $model->defaultLatencyOptimization = $map['DefaultLatencyOptimization'];
        }
        if (isset($map['DefaultLbaStrategy'])) {
            $model->defaultLbaStrategy = $map['DefaultLbaStrategy'];
        }
        if (isset($map['DefaultMaxReturnAddrNum'])) {
            $model->defaultMaxReturnAddrNum = $map['DefaultMaxReturnAddrNum'];
        }
        if (isset($map['DefaultMinAvailableAddrNum'])) {
            $model->defaultMinAvailableAddrNum = $map['DefaultMinAvailableAddrNum'];
        }
        if (isset($map['EffectiveAddrPoolGroupType'])) {
            $model->effectiveAddrPoolGroupType = $map['EffectiveAddrPoolGroupType'];
        }
        if (isset($map['FailoverAddrPoolGroupStatus'])) {
            $model->failoverAddrPoolGroupStatus = $map['FailoverAddrPoolGroupStatus'];
        }
        if (isset($map['FailoverAddrPoolType'])) {
            $model->failoverAddrPoolType = $map['FailoverAddrPoolType'];
        }
        if (isset($map['FailoverAddrPools'])) {
            $model->failoverAddrPools = failoverAddrPools::fromMap($map['FailoverAddrPools']);
        }
        if (isset($map['FailoverAvailableAddrNum'])) {
            $model->failoverAvailableAddrNum = $map['FailoverAvailableAddrNum'];
        }
        if (isset($map['FailoverLatencyOptimization'])) {
            $model->failoverLatencyOptimization = $map['FailoverLatencyOptimization'];
        }
        if (isset($map['FailoverLbaStrategy'])) {
            $model->failoverLbaStrategy = $map['FailoverLbaStrategy'];
        }
        if (isset($map['FailoverMaxReturnAddrNum'])) {
            $model->failoverMaxReturnAddrNum = $map['FailoverMaxReturnAddrNum'];
        }
        if (isset($map['FailoverMinAvailableAddrNum'])) {
            $model->failoverMinAvailableAddrNum = $map['FailoverMinAvailableAddrNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
