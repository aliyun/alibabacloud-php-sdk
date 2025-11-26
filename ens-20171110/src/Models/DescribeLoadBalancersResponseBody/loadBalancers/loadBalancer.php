<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Dara\Model;

class loadBalancer extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerStatus;

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
        'address' => 'Address',
        'addressIPVersion' => 'AddressIPVersion',
        'addressType' => 'AddressType',
        'createTime' => 'CreateTime',
        'ensRegionId' => 'EnsRegionId',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerStatus' => 'LoadBalancerStatus',
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }

        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }

        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
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
