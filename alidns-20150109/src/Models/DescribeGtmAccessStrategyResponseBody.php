<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyResponseBody extends Model
{
    /**
     * @description The access policy.
     *
     * @example AUTO
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The access status. Valid values:
     *
     *   **DEFAULT**: Indicates normal when the default address pool is accessed.
     *   **FAILOVER**: Indicates an exception when a failover address pool is accessed.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $accessStatus;

    /**
     * @description Indicates whether health check is enabled for the default address pool.
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
     * @description The availability status of the default address pool.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @description The ID of the default address pool.
     *
     * @example hra0i1
     *
     * @var string
     */
    public $defultAddrPoolId;

    /**
     * @description The ID of the failover address pool.
     *
     * @example hra0i2
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description Indicates whether health check is enabled for the failover address pool.
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
     * @description The ID of the GTM instance whose access policy details you want to query.
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
     * @description The ID of the request.
     *
     * @example BA1608CA-834C-4E63-8682-8AF0B11ED72D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the access policy queried.
     *
     * @example hra0hs
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The mode of traffic scheduling.
     *
     * @example SELF_DEFINED
     *
     * @var string
     */
    public $strategyMode;

    /**
     * @description The name of the access policy queried.
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'accessStatus' => 'AccessStatus',
        'defaultAddrPoolMonitorStatus' => 'DefaultAddrPoolMonitorStatus',
        'defaultAddrPoolName' => 'DefaultAddrPoolName',
        'defaultAddrPoolStatus' => 'DefaultAddrPoolStatus',
        'defultAddrPoolId' => 'DefultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'failoverAddrPoolName' => 'FailoverAddrPoolName',
        'failoverAddrPoolStatus' => 'FailoverAddrPoolStatus',
        'instanceId' => 'InstanceId',
        'lines' => 'Lines',
        'requestId' => 'RequestId',
        'strategyId' => 'StrategyId',
        'strategyMode' => 'StrategyMode',
        'strategyName' => 'StrategyName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
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
        if (null !== $this->defultAddrPoolId) {
            $res['DefultAddrPoolId'] = $this->defultAddrPoolId;
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
     * @return DescribeGtmAccessStrategyResponseBody
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
        if (isset($map['DefaultAddrPoolMonitorStatus'])) {
            $model->defaultAddrPoolMonitorStatus = $map['DefaultAddrPoolMonitorStatus'];
        }
        if (isset($map['DefaultAddrPoolName'])) {
            $model->defaultAddrPoolName = $map['DefaultAddrPoolName'];
        }
        if (isset($map['DefaultAddrPoolStatus'])) {
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if (isset($map['DefultAddrPoolId'])) {
            $model->defultAddrPoolId = $map['DefultAddrPoolId'];
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
