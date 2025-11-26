<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'clientToken' => 'ClientToken',
        'ensRegionId' => 'EnsRegionId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'loadBalancerType' => 'LoadBalancerType',
        'networkId' => 'NetworkId',
        'payType' => 'PayType',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }

        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }

        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
