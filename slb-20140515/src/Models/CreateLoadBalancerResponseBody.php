<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerResponseBody extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'vpcId'            => 'VpcId',
        'addressIPVersion' => 'AddressIPVersion',
        'vSwitchId'        => 'VSwitchId',
        'requestId'        => 'RequestId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerId'   => 'LoadBalancerId',
        'resourceGroupId'  => 'ResourceGroupId',
        'address'          => 'Address',
        'networkType'      => 'NetworkType',
        'orderId'          => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
