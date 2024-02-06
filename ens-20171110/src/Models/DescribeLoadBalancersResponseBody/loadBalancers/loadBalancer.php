<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @description The IP address that the ELB instance uses to provide services.
     *
     * @example 10.10.10.10
     *
     * @var string
     */
    public $address;

    /**
     * @description The version of the IP address. Valid values: ipv4 and ipv6.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The time when the ELB instance was created. The time is displayed in UTC.
     *
     * @example 2021-05-06T11:13:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-wuhan-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5snthcyu1x10g7tywj7iu****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the ELB instance.
     *
     * @example example
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The status of the ELB instance. Valid values:
     *
     *   **Active** (default): The listener for the instance can forward the received traffic based on the rule.
     *   **InActive**: The listener for the instance does not forward the received traffic.
     *
     * @example InActive
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The ID of the network.
     *
     * @example n-5rz0rj1caexauilpsjx0w****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The billing method. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go. Only this billing method is supported.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5rllcjb3ol6duzjdnbm1om****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'address'            => 'Address',
        'addressIPVersion'   => 'AddressIPVersion',
        'createTime'         => 'CreateTime',
        'ensRegionId'        => 'EnsRegionId',
        'loadBalancerId'     => 'LoadBalancerId',
        'loadBalancerName'   => 'LoadBalancerName',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'networkId'          => 'NetworkId',
        'payType'            => 'PayType',
        'vSwitchId'          => 'VSwitchId',
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

    /**
     * @param array $map
     *
     * @return loadBalancer
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
