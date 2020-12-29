<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $defaultAddrPoolStatus;

    /**
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @var string
     */
    public $accessStatus;

    /**
     * @var string
     */
    public $defaultAddrPoolMonitorStatus;

    /**
     * @var string
     */
    public $defaultAddrPoolName;

    /**
     * @var string
     */
    public $defultAddrPoolId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $failoverAddrPoolStatus;

    /**
     * @var string
     */
    public $accessMode;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var string
     */
    public $failoverAddrPoolMonitorStatus;

    /**
     * @var string
     */
    public $failoverAddrPoolName;

    /**
     * @var lines[]
     */
    public $lines;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'instanceId'                    => 'InstanceId',
        'strategyId'                    => 'StrategyId',
        'defaultAddrPoolStatus'         => 'DefaultAddrPoolStatus',
        'failoverAddrPoolId'            => 'FailoverAddrPoolId',
        'accessStatus'                  => 'AccessStatus',
        'defaultAddrPoolMonitorStatus'  => 'DefaultAddrPoolMonitorStatus',
        'defaultAddrPoolName'           => 'DefaultAddrPoolName',
        'defultAddrPoolId'              => 'DefultAddrPoolId',
        'strategyName'                  => 'StrategyName',
        'failoverAddrPoolStatus'        => 'FailoverAddrPoolStatus',
        'accessMode'                    => 'AccessMode',
        'strategyMode'                  => 'StrategyMode',
        'failoverAddrPoolMonitorStatus' => 'FailoverAddrPoolMonitorStatus',
        'failoverAddrPoolName'          => 'FailoverAddrPoolName',
        'lines'                         => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->defaultAddrPoolStatus) {
            $res['DefaultAddrPoolStatus'] = $this->defaultAddrPoolStatus;
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
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
        if (null !== $this->defultAddrPoolId) {
            $res['DefultAddrPoolId'] = $this->defultAddrPoolId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->failoverAddrPoolStatus) {
            $res['FailoverAddrPoolStatus'] = $this->failoverAddrPoolStatus;
        }
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->failoverAddrPoolMonitorStatus) {
            $res['FailoverAddrPoolMonitorStatus'] = $this->failoverAddrPoolMonitorStatus;
        }
        if (null !== $this->failoverAddrPoolName) {
            $res['FailoverAddrPoolName'] = $this->failoverAddrPoolName;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['DefaultAddrPoolStatus'])) {
            $model->defaultAddrPoolStatus = $map['DefaultAddrPoolStatus'];
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
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
        if (isset($map['DefultAddrPoolId'])) {
            $model->defultAddrPoolId = $map['DefultAddrPoolId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['FailoverAddrPoolStatus'])) {
            $model->failoverAddrPoolStatus = $map['FailoverAddrPoolStatus'];
        }
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['FailoverAddrPoolMonitorStatus'])) {
            $model->failoverAddrPoolMonitorStatus = $map['FailoverAddrPoolMonitorStatus'];
        }
        if (isset($map['FailoverAddrPoolName'])) {
            $model->failoverAddrPoolName = $map['FailoverAddrPoolName'];
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

        return $model;
    }
}
