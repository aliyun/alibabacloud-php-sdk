<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Tea\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @description The ID of the zone where the ALB instance was deployed.
     *
     * You can call the [DescribeZones](~~189196~~) operation to query the zones of the ALB instance.
     * @example 192.168.10.1
     *
     * @var string
     */
    public $address;

    /**
     * @example eip-uf6wm****1zj9
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example Common
     *
     * @var string
     */
    public $eipType;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The protocol version. Valid values:
     *
     *   **IPv4:** IPv4.
     *   **DualStack:** dual stack.
     *
     * @example 2408:XXXX:39d:eb00::/56
     *
     * @var string
     */
    public $ipv6Address;
    protected $_name = [
        'address'         => 'Address',
        'allocationId'    => 'AllocationId',
        'eipType'         => 'EipType',
        'intranetAddress' => 'IntranetAddress',
        'ipv6Address'     => 'Ipv6Address',
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
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
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
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        return $model;
    }
}
