<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Tea\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @description The ID of the elastic IP address (EIP).
     *
     * @example eip-bp1aedxso6u80u0qf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the elastic network interface (ENI).
     *
     * @example eni-bp12f1xhs5yal61a****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The IPv6 address of the NLB instance.
     *
     * @example 2001:db8:1:1:1:1:1:1
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @description The private IPv4 address of the NLB instance.
     *
     * @example 192.168.3.32
     *
     * @var string
     */
    public $privateIPv4Address;

    /**
     * @description The health status of the private IPv4 address of the NLB instance. Valid values:
     *
     *   **Healthy**
     *   **Unhealthy**
     *
     * > This parameter is returned only when the **Status** of the zone is **Active**.
     * @example Healthy
     *
     * @var string
     */
    public $privateIPv4HcStatus;

    /**
     * @description The health status of the IPv6 address of the NLB instance. Valid values:
     *
     *   **Healthy**
     *   **Unhealthy**
     *
     * > This parameter is returned only when the **Status** of the zone is **Active**.
     * @example Healthy
     *
     * @var string
     */
    public $privateIPv6HcStatus;

    /**
     * @description The public IPv4 address of the NLB instance.
     *
     * @example 120.XX.XX.69
     *
     * @var string
     */
    public $publicIPv4Address;
    protected $_name = [
        'allocationId'        => 'AllocationId',
        'eniId'               => 'EniId',
        'ipv6Address'         => 'Ipv6Address',
        'privateIPv4Address'  => 'PrivateIPv4Address',
        'privateIPv4HcStatus' => 'PrivateIPv4HcStatus',
        'privateIPv6HcStatus' => 'PrivateIPv6HcStatus',
        'publicIPv4Address'   => 'PublicIPv4Address',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->privateIPv4Address) {
            $res['PrivateIPv4Address'] = $this->privateIPv4Address;
        }
        if (null !== $this->privateIPv4HcStatus) {
            $res['PrivateIPv4HcStatus'] = $this->privateIPv4HcStatus;
        }
        if (null !== $this->privateIPv6HcStatus) {
            $res['PrivateIPv6HcStatus'] = $this->privateIPv6HcStatus;
        }
        if (null !== $this->publicIPv4Address) {
            $res['PublicIPv4Address'] = $this->publicIPv4Address;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['PrivateIPv4Address'])) {
            $model->privateIPv4Address = $map['PrivateIPv4Address'];
        }
        if (isset($map['PrivateIPv4HcStatus'])) {
            $model->privateIPv4HcStatus = $map['PrivateIPv4HcStatus'];
        }
        if (isset($map['PrivateIPv6HcStatus'])) {
            $model->privateIPv6HcStatus = $map['PrivateIPv6HcStatus'];
        }
        if (isset($map['PublicIPv4Address'])) {
            $model->publicIPv4Address = $map['PublicIPv4Address'];
        }

        return $model;
    }
}
