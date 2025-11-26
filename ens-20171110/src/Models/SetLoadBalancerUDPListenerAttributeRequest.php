<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class SetLoadBalancerUDPListenerAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipTransmit;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @var string
     */
    public $healthCheckExp;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckReq;

    /**
     * @var int
     */
    public $healthyThreshold;

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
    public $scheduler;

    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'description' => 'Description',
        'eipTransmit' => 'EipTransmit',
        'establishedTimeout' => 'EstablishedTimeout',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp' => 'HealthCheckExp',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckReq' => 'HealthCheckReq',
        'healthyThreshold' => 'HealthyThreshold',
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eipTransmit) {
            $res['EipTransmit'] = $this->eipTransmit;
        }

        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }

        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }

        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }

        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }

        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }

        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EipTransmit'])) {
            $model->eipTransmit = $map['EipTransmit'];
        }

        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }

        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }

        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }

        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }

        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }

        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
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
