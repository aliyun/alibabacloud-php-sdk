<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerResponseBody extends Model
{
    /**
     * @description The IP address that is allocated to the CLB instance.
     *
     * @example 42.XX.XX.6
     *
     * @var string
     */
    public $address;

    /**
     * @description The IP version that is used by the CLB instance.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The CLB instance ID.
     *
     * @example lb-hddhfjg****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The CLB instance name.
     *
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The network type of the CLB instance. Valid values:
     *
     *   **vpc**
     *   **classic**
     *
     * @example classic
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The order ID of the subscription CLB instance.
     *
     * @example 20212961978****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the CLB instance belongs.
     *
     * @example rg-atstuj3rto****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the vSwitch to which the CLB instance belongs.
     *
     * @example vsw-255ecr****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the CLB instance belongs.
     *
     * @example vpc-25dvzy9****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address'          => 'Address',
        'addressIPVersion' => 'AddressIPVersion',
        'loadBalancerId'   => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'networkType'      => 'NetworkType',
        'orderId'          => 'OrderId',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
