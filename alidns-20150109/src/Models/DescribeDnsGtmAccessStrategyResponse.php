<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse\defaultAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse\failoverAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse\lines;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategyResponse extends Model
{
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
    public $strategyName;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $defaultAddrPoolType;

    /**
     * @var string
     */
    public $defaultLbaStrategy;

    /**
     * @var int
     */
    public $defaultMinAvailableAddrNum;

    /**
     * @var int
     */
    public $defaultMaxReturnAddrNum;

    /**
     * @var string
     */
    public $defaultLatencyOptimization;

    /**
     * @var string
     */
    public $defaultAddrPoolGroupStatus;

    /**
     * @var string
     */
    public $failoverAddrPoolType;

    /**
     * @var string
     */
    public $failoverLbaStrategy;

    /**
     * @var int
     */
    public $failoverMinAvailableAddrNum;

    /**
     * @var int
     */
    public $failoverMaxReturnAddrNum;

    /**
     * @var string
     */
    public $failoverLatencyOptimization;

    /**
     * @var string
     */
    public $failoverAddrPoolGroupStatus;

    /**
     * @var string
     */
    public $accessMode;

    /**
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $defaultAvailableAddrNum;

    /**
     * @var int
     */
    public $failoverAvailableAddrNum;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var defaultAddrPools
     */
    public $defaultAddrPools;

    /**
     * @var failoverAddrPools
     */
    public $failoverAddrPools;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'strategyId'                  => 'StrategyId',
        'strategyName'                => 'StrategyName',
        'strategyMode'                => 'StrategyMode',
        'instanceId'                  => 'InstanceId',
        'defaultAddrPoolType'         => 'DefaultAddrPoolType',
        'defaultLbaStrategy'          => 'DefaultLbaStrategy',
        'defaultMinAvailableAddrNum'  => 'DefaultMinAvailableAddrNum',
        'defaultMaxReturnAddrNum'     => 'DefaultMaxReturnAddrNum',
        'defaultLatencyOptimization'  => 'DefaultLatencyOptimization',
        'defaultAddrPoolGroupStatus'  => 'DefaultAddrPoolGroupStatus',
        'failoverAddrPoolType'        => 'FailoverAddrPoolType',
        'failoverLbaStrategy'         => 'FailoverLbaStrategy',
        'failoverMinAvailableAddrNum' => 'FailoverMinAvailableAddrNum',
        'failoverMaxReturnAddrNum'    => 'FailoverMaxReturnAddrNum',
        'failoverLatencyOptimization' => 'FailoverLatencyOptimization',
        'failoverAddrPoolGroupStatus' => 'FailoverAddrPoolGroupStatus',
        'accessMode'                  => 'AccessMode',
        'effectiveAddrPoolGroupType'  => 'EffectiveAddrPoolGroupType',
        'createTime'                  => 'CreateTime',
        'createTimestamp'             => 'CreateTimestamp',
        'defaultAvailableAddrNum'     => 'DefaultAvailableAddrNum',
        'failoverAvailableAddrNum'    => 'FailoverAvailableAddrNum',
        'lines'                       => 'Lines',
        'defaultAddrPools'            => 'DefaultAddrPools',
        'failoverAddrPools'           => 'FailoverAddrPools',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('strategyMode', $this->strategyMode, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('defaultAddrPoolType', $this->defaultAddrPoolType, true);
        Model::validateRequired('defaultLbaStrategy', $this->defaultLbaStrategy, true);
        Model::validateRequired('defaultMinAvailableAddrNum', $this->defaultMinAvailableAddrNum, true);
        Model::validateRequired('defaultMaxReturnAddrNum', $this->defaultMaxReturnAddrNum, true);
        Model::validateRequired('defaultLatencyOptimization', $this->defaultLatencyOptimization, true);
        Model::validateRequired('defaultAddrPoolGroupStatus', $this->defaultAddrPoolGroupStatus, true);
        Model::validateRequired('failoverAddrPoolType', $this->failoverAddrPoolType, true);
        Model::validateRequired('failoverLbaStrategy', $this->failoverLbaStrategy, true);
        Model::validateRequired('failoverMinAvailableAddrNum', $this->failoverMinAvailableAddrNum, true);
        Model::validateRequired('failoverMaxReturnAddrNum', $this->failoverMaxReturnAddrNum, true);
        Model::validateRequired('failoverLatencyOptimization', $this->failoverLatencyOptimization, true);
        Model::validateRequired('failoverAddrPoolGroupStatus', $this->failoverAddrPoolGroupStatus, true);
        Model::validateRequired('accessMode', $this->accessMode, true);
        Model::validateRequired('effectiveAddrPoolGroupType', $this->effectiveAddrPoolGroupType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('defaultAvailableAddrNum', $this->defaultAvailableAddrNum, true);
        Model::validateRequired('failoverAvailableAddrNum', $this->failoverAvailableAddrNum, true);
        Model::validateRequired('lines', $this->lines, true);
        Model::validateRequired('defaultAddrPools', $this->defaultAddrPools, true);
        Model::validateRequired('failoverAddrPools', $this->failoverAddrPools, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->defaultAddrPoolType) {
            $res['DefaultAddrPoolType'] = $this->defaultAddrPoolType;
        }
        if (null !== $this->defaultLbaStrategy) {
            $res['DefaultLbaStrategy'] = $this->defaultLbaStrategy;
        }
        if (null !== $this->defaultMinAvailableAddrNum) {
            $res['DefaultMinAvailableAddrNum'] = $this->defaultMinAvailableAddrNum;
        }
        if (null !== $this->defaultMaxReturnAddrNum) {
            $res['DefaultMaxReturnAddrNum'] = $this->defaultMaxReturnAddrNum;
        }
        if (null !== $this->defaultLatencyOptimization) {
            $res['DefaultLatencyOptimization'] = $this->defaultLatencyOptimization;
        }
        if (null !== $this->defaultAddrPoolGroupStatus) {
            $res['DefaultAddrPoolGroupStatus'] = $this->defaultAddrPoolGroupStatus;
        }
        if (null !== $this->failoverAddrPoolType) {
            $res['FailoverAddrPoolType'] = $this->failoverAddrPoolType;
        }
        if (null !== $this->failoverLbaStrategy) {
            $res['FailoverLbaStrategy'] = $this->failoverLbaStrategy;
        }
        if (null !== $this->failoverMinAvailableAddrNum) {
            $res['FailoverMinAvailableAddrNum'] = $this->failoverMinAvailableAddrNum;
        }
        if (null !== $this->failoverMaxReturnAddrNum) {
            $res['FailoverMaxReturnAddrNum'] = $this->failoverMaxReturnAddrNum;
        }
        if (null !== $this->failoverLatencyOptimization) {
            $res['FailoverLatencyOptimization'] = $this->failoverLatencyOptimization;
        }
        if (null !== $this->failoverAddrPoolGroupStatus) {
            $res['FailoverAddrPoolGroupStatus'] = $this->failoverAddrPoolGroupStatus;
        }
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->effectiveAddrPoolGroupType) {
            $res['EffectiveAddrPoolGroupType'] = $this->effectiveAddrPoolGroupType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->defaultAvailableAddrNum) {
            $res['DefaultAvailableAddrNum'] = $this->defaultAvailableAddrNum;
        }
        if (null !== $this->failoverAvailableAddrNum) {
            $res['FailoverAvailableAddrNum'] = $this->failoverAvailableAddrNum;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->defaultAddrPools) {
            $res['DefaultAddrPools'] = null !== $this->defaultAddrPools ? $this->defaultAddrPools->toMap() : null;
        }
        if (null !== $this->failoverAddrPools) {
            $res['FailoverAddrPools'] = null !== $this->failoverAddrPools ? $this->failoverAddrPools->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAccessStrategyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DefaultAddrPoolType'])) {
            $model->defaultAddrPoolType = $map['DefaultAddrPoolType'];
        }
        if (isset($map['DefaultLbaStrategy'])) {
            $model->defaultLbaStrategy = $map['DefaultLbaStrategy'];
        }
        if (isset($map['DefaultMinAvailableAddrNum'])) {
            $model->defaultMinAvailableAddrNum = $map['DefaultMinAvailableAddrNum'];
        }
        if (isset($map['DefaultMaxReturnAddrNum'])) {
            $model->defaultMaxReturnAddrNum = $map['DefaultMaxReturnAddrNum'];
        }
        if (isset($map['DefaultLatencyOptimization'])) {
            $model->defaultLatencyOptimization = $map['DefaultLatencyOptimization'];
        }
        if (isset($map['DefaultAddrPoolGroupStatus'])) {
            $model->defaultAddrPoolGroupStatus = $map['DefaultAddrPoolGroupStatus'];
        }
        if (isset($map['FailoverAddrPoolType'])) {
            $model->failoverAddrPoolType = $map['FailoverAddrPoolType'];
        }
        if (isset($map['FailoverLbaStrategy'])) {
            $model->failoverLbaStrategy = $map['FailoverLbaStrategy'];
        }
        if (isset($map['FailoverMinAvailableAddrNum'])) {
            $model->failoverMinAvailableAddrNum = $map['FailoverMinAvailableAddrNum'];
        }
        if (isset($map['FailoverMaxReturnAddrNum'])) {
            $model->failoverMaxReturnAddrNum = $map['FailoverMaxReturnAddrNum'];
        }
        if (isset($map['FailoverLatencyOptimization'])) {
            $model->failoverLatencyOptimization = $map['FailoverLatencyOptimization'];
        }
        if (isset($map['FailoverAddrPoolGroupStatus'])) {
            $model->failoverAddrPoolGroupStatus = $map['FailoverAddrPoolGroupStatus'];
        }
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['EffectiveAddrPoolGroupType'])) {
            $model->effectiveAddrPoolGroupType = $map['EffectiveAddrPoolGroupType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DefaultAvailableAddrNum'])) {
            $model->defaultAvailableAddrNum = $map['DefaultAvailableAddrNum'];
        }
        if (isset($map['FailoverAvailableAddrNum'])) {
            $model->failoverAvailableAddrNum = $map['FailoverAvailableAddrNum'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['DefaultAddrPools'])) {
            $model->defaultAddrPools = defaultAddrPools::fromMap($map['DefaultAddrPools']);
        }
        if (isset($map['FailoverAddrPools'])) {
            $model->failoverAddrPools = failoverAddrPools::fromMap($map['FailoverAddrPools']);
        }

        return $model;
    }
}
