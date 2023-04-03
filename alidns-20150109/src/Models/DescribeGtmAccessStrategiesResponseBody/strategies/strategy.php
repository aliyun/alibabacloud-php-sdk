<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponseBody\strategies;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponseBody\strategies\strategy\lines;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @description The access policy. Valid values:
     *
     *   **AUTO**: Automatic switch
     *   **DEFAULT**: Default address pool
     *   **FAILOVER**: Failover address pool
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The access status. Valid values:
     *
     *   **DEFAULT**: The default address pool is currently accessed.
     *   **FAILOVER**: The failover address pool is currently accessed.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $accessStatus;

    /**
     * @description The time when the access policy was created.
     *
     * @example 2018-08-09T00:10Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1533773400000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The ID of the default address pool.
     *
     * @example hra0i1
     *
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @description Indicates whether health check was enabled for the default address pool. Valid values:
     *
     *   **OPEN**: Enabled
     *   **CLOSE**: Disabled
     *   **UNCONFIGURED**: Not configured
     *
     * @example OPEN
     *
     * @var string
     */
    public $defaultAddrPoolMonitorStatus;

    /**
     * @description The name of the default address pool.
     *
     * @var string
     */
    public $defaultAddrPoolName;

    /**
     * @description The availability status of the default address pool. Valid values:
     *
     *   **AVAILABLE**: Available
     *   **NOT_AVAILABLE**: Unavailable
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @description The ID of the failover address pool.
     *
     * @example hra0i2
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description Indicates whether health check was enabled for the failover address pool.
     *
     * @example OPEN
     *
     * @var string
     */
    public $failoverAddrPoolMonitorStatus;

    /**
     * @description The name of the failover address pool.
     *
     * @var string
     */
    public $failoverAddrPoolName;

    /**
     * @description The availability status of the failover address pool.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $failoverAddrPoolStatus;

    /**
     * @description The ID of the GTM instance whose access policies you want to query.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The returned lines of access regions.
     *
     * @var lines
     */
    public $lines;

    /**
     * @description The ID of the access policy.
     *
     * @example hra0hs
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The mode of the access policy. **SELF_DEFINED** indicates that the access policy is user-defined.
     *
     * @example SELF_DEFINED
     *
     * @var string
     */
    public $strategyMode;

    /**
     * @description The name of the access policy.
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'accessMode'                    => 'AccessMode',
        'accessStatus'                  => 'AccessStatus',
        'createTime'                    => 'CreateTime',
        'createTimestamp'               => 'CreateTimestamp',
        'defaultAddrPoolId'             => 'DefaultAddrPoolId',
        'defaultAddrPoolMonitorStatus'  => 'DefaultAddrPoolMonitorStatus',
        'defaultAddrPoolName'           => 'DefaultAddrPoolName',
        'defaultAddrPoolStatus'         => 'DefaultAddrPoolStatus',
        'failoverAddrPoolId'            => 'FailoverAddrPoolId',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'failoverAddrPoolName'          => 'FailoverAddrPoolName',
        'failoverAddrPoolStatus'        => 'FailoverAddrPoolStatus',
        'instanceId'                    => 'InstanceId',
        'lines'                         => 'Lines',
        'strategyId'                    => 'StrategyId',
        'strategyMode'                  => 'StrategyMode',
        'strategyName'                  => 'StrategyName',
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
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->defaultAddrPoolId) {
            $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        }
        if (null !== $this->defaultAddrPoolMonitorStatus) {
            $res['DefaultAddrPoolMonitorStatus'] = $this->defaultAddrPoolMonitorStatus;
        }
        if (null !== $this->defaultAddrPoolName) {
            $res['DefaultAddrPoolName'] = $this->defaultAddrPoolName;
        }
        if (null !== $this->defaultAddrPoolStatus) {
            $res['DefaultAddrPoolStatus'] = $this->defaultAddrPoolStatus;
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        }
        if (null !== $this->failoverAddrPoolMonitorStatus) {
            $res['FailoverAddrPoolMonitorStatus'] = $this->failoverAddrPoolMonitorStatus;
        }
        if (null !== $this->failoverAddrPoolName) {
            $res['FailoverAddrPoolName'] = $this->failoverAddrPoolName;
        }
        if (null !== $this->failoverAddrPoolStatus) {
            $res['FailoverAddrPoolStatus'] = $this->failoverAddrPoolStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
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
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DefaultAddrPoolId'])) {
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if (isset($map['DefaultAddrPoolMonitorStatus'])) {
            $model->defaultAddrPoolMonitorStatus = $map['DefaultAddrPoolMonitorStatus'];
        }
        if (isset($map['DefaultAddrPoolName'])) {
            $model->defaultAddrPoolName = $map['DefaultAddrPoolName'];
        }
        if (isset($map['DefaultAddrPoolStatus'])) {
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if (isset($map['FailoverAddrPoolMonitorStatus'])) {
            $model->failoverAddrPoolMonitorStatus = $map['FailoverAddrPoolMonitorStatus'];
        }
        if (isset($map['FailoverAddrPoolName'])) {
            $model->failoverAddrPoolName = $map['FailoverAddrPoolName'];
        }
        if (isset($map['FailoverAddrPoolStatus'])) {
            $model->failoverAddrPoolStatus = $map['FailoverAddrPoolStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
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
