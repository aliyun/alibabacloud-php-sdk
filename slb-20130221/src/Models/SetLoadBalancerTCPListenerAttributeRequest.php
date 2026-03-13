<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models;

use AlibabaCloud\Dara\Model;

class SetLoadBalancerTCPListenerAttributeRequest extends Model
{
    /**
     * @var int
     */
    public $connectPort;

    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'connectPort' => 'ConnectPort',
        'connectTimeout' => 'ConnectTimeout',
        'healthCheck' => 'HealthCheck',
        'healthyThreshold' => 'HealthyThreshold',
        'hostId' => 'HostId',
        'interval' => 'Interval',
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'persistenceTimeout' => 'PersistenceTimeout',
        'scheduler' => 'Scheduler',
        'unhealthyThreshold' => 'UnhealthyThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectPort) {
            $res['ConnectPort'] = $this->connectPort;
        }

        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectPort'])) {
            $model->connectPort = $map['ConnectPort'];
        }

        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
