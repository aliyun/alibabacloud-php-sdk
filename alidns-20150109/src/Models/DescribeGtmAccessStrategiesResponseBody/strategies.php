<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponseBody\strategies\lines;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @var string
     */
    public $accessMode;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $defaultAddrPoolMonitorStatus;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var lines[]
     */
    public $lines;

    /**
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $failoverAddrPoolStatus;

    /**
     * @var string
     */
    public $accessStatus;

    /**
     * @var string
     */
    public $failoverAddrPoolMonitorStatus;

    /**
     * @var string
     */
    public $defaultAddrPoolName;

    /**
     * @var string
     */
    public $failoverAddrPoolName;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'accessMode'                    => 'AccessMode',
        'strategyName'                  => 'StrategyName',
        'defaultAddrPoolMonitorStatus'  => 'DefaultAddrPoolMonitorStatus',
        'strategyMode'                  => 'StrategyMode',
        'createTime'                    => 'CreateTime',
        'defaultAddrPoolStatus'         => 'DefaultAddrPoolStatus',
        'instanceId'                    => 'InstanceId',
        'lines'                         => 'Lines',
        'failoverAddrPoolId'            => 'FailoverAddrPoolId',
        'defaultAddrPoolId'             => 'DefaultAddrPoolId',
        'strategyId'                    => 'StrategyId',
        'failoverAddrPoolStatus'        => 'FailoverAddrPoolStatus',
        'accessStatus'                  => 'AccessStatus',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'defaultAddrPoolName'           => 'DefaultAddrPoolName',
        'failoverAddrPoolName'          => 'FailoverAddrPoolName',
        'createTimestamp'               => 'CreateTimestamp',
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
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->defaultAddrPoolMonitorStatus) {
            $res['DefaultAddrPoolMonitorStatus'] = $this->defaultAddrPoolMonitorStatus;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultAddrPoolStatus) {
            $res['DefaultAddrPoolStatus'] = $this->defaultAddrPoolStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lines) {
            $res['Lines'] = [];
            if (null !== $this->lines && \is_array($this->lines)) {
                $n = 0;
                foreach ($this->lines as $item) {
                    $res['Lines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        }
        if (null !== $this->defaultAddrPoolId) {
            $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->failoverAddrPoolStatus) {
            $res['FailoverAddrPoolStatus'] = $this->failoverAddrPoolStatus;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->failoverAddrPoolMonitorStatus) {
            $res['FailoverAddrPoolMonitorStatus'] = $this->failoverAddrPoolMonitorStatus;
        }
        if (null !== $this->defaultAddrPoolName) {
            $res['DefaultAddrPoolName'] = $this->defaultAddrPoolName;
        }
        if (null !== $this->failoverAddrPoolName) {
            $res['FailoverAddrPoolName'] = $this->failoverAddrPoolName;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['DefaultAddrPoolMonitorStatus'])) {
            $model->defaultAddrPoolMonitorStatus = $map['DefaultAddrPoolMonitorStatus'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultAddrPoolStatus'])) {
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = [];
                $n            = 0;
                foreach ($map['Lines'] as $item) {
                    $model->lines[$n++] = null !== $item ? lines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if (isset($map['DefaultAddrPoolId'])) {
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['FailoverAddrPoolStatus'])) {
            $model->failoverAddrPoolStatus = $map['FailoverAddrPoolStatus'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['FailoverAddrPoolMonitorStatus'])) {
            $model->failoverAddrPoolMonitorStatus = $map['FailoverAddrPoolMonitorStatus'];
        }
        if (isset($map['DefaultAddrPoolName'])) {
            $model->defaultAddrPoolName = $map['DefaultAddrPoolName'];
        }
        if (isset($map['FailoverAddrPoolName'])) {
            $model->failoverAddrPoolName = $map['FailoverAddrPoolName'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
