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
     * @var string
     */
    public $accessMode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $defaultAddrPoolGroupStatus;

    /**
     * @var string
     */
    public $defaultAddrPoolType;

    /**
     * @var defaultAddrPools
     */
    public $defaultAddrPools;

    /**
     * @var int
     */
    public $defaultAvailableAddrNum;

    /**
     * @var string
     */
    public $defaultLatencyOptimization;

    /**
     * @var string
     */
    public $defaultLbaStrategy;

    /**
     * @var int
     */
    public $defaultMaxReturnAddrNum;

    /**
     * @var int
     */
    public $defaultMinAvailableAddrNum;

    /**
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @var string
     */
    public $failoverAddrPoolGroupStatus;

    /**
     * @var string
     */
    public $failoverAddrPoolType;

    /**
     * @var failoverAddrPools
     */
    public $failoverAddrPools;

    /**
     * @var int
     */
    public $failoverAvailableAddrNum;

    /**
     * @var string
     */
    public $failoverLatencyOptimization;

    /**
     * @var string
     */
    public $failoverLbaStrategy;

    /**
     * @var int
     */
    public $failoverMaxReturnAddrNum;

    /**
     * @var int
     */
    public $failoverMinAvailableAddrNum;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyMode;

    /**
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
