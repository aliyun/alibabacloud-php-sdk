<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Tea\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @description An IPv4 address.
     *
     * This parameter takes effect when **AddressIPVersion** is set to **IPv4** or **DualStack**. The network type is determined by the value of **AddressType**.
     * @example 192.168.10.1
     *
     * @var string
     */
    public $address;

    /**
     * @description The elastic IP address (EIP).
     *
     * @example eip-uf6wm****1zj9
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The type of EIP. Valid values:
     *
     *   **Common**: an EIP.
     *   **Anycast**: an Anycast EIP.
     *
     * >  For more information about the regions in which ALB supports Anycast EIPs, see [Limits](https://help.aliyun.com/document_detail/460727.html).
     * @example Common
     *
     * @var string
     */
    public $eipType;

    /**
     * @description The private IPv4 address.
     *
     * @example 10.0.1.181
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetAddressHcStatus;

    /**
     * @description An IPv6 address.
     *
     * This parameter takes effect only when **AddressIPVersion** is set to **DualStack**. The network type is determined by the value of **Ipv6AddressType**.
     * @example 2408:XXXX:39d:eb00::/56
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $ipv6AddressHcStatus;
    protected $_name = [
        'address'                 => 'Address',
        'allocationId'            => 'AllocationId',
        'eipType'                 => 'EipType',
        'intranetAddress'         => 'IntranetAddress',
        'intranetAddressHcStatus' => 'IntranetAddressHcStatus',
        'ipv6Address'             => 'Ipv6Address',
        'ipv6AddressHcStatus'     => 'Ipv6AddressHcStatus',
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
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->eipType) {
            $res['EipType'] = $this->eipType;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->intranetAddressHcStatus) {
            $res['IntranetAddressHcStatus'] = $this->intranetAddressHcStatus;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressHcStatus) {
            $res['Ipv6AddressHcStatus'] = $this->ipv6AddressHcStatus;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['EipType'])) {
            $model->eipType = $map['EipType'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IntranetAddressHcStatus'])) {
            $model->intranetAddressHcStatus = $map['IntranetAddressHcStatus'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Ipv6AddressHcStatus'])) {
            $model->ipv6AddressHcStatus = $map['Ipv6AddressHcStatus'];
        }

        return $model;
    }
}
