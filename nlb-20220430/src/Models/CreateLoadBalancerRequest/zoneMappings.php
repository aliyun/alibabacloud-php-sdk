<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of the elastic IP address (EIP) that is associated with the Internet-facing NLB instance. You can specify one EIP for each zone. You must add at least two zones. You can add a maximum of 10 zones.
     *
     * @example eip-bp1aedxso6u80u0qf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @var string[]
     */
    public $ipv4LocalAddresses;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string[]
     */
    public $ipv6LocalAddresses;

    /**
     * @description The private IP address. You must add at least two zones. You can add a maximum of 10 zones.
     *
     * @example 192.168.10.1
     *
     * @var string
     */
    public $privateIPv4Address;

    /**
     * @description The vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone of an NLB instance. You must add at least two zones. You can add a maximum of 10 zones.
     *
     * This parameter is required.
     * @example vsw-sersdf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone of the NLB instance. You must add at least two zones. You can add a maximum of 10 zones.
     *
     * This parameter is required.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationId'       => 'AllocationId',
        'ipv4LocalAddresses' => 'Ipv4LocalAddresses',
        'ipv6Address'        => 'Ipv6Address',
        'ipv6LocalAddresses' => 'Ipv6LocalAddresses',
        'privateIPv4Address' => 'PrivateIPv4Address',
        'vSwitchId'          => 'VSwitchId',
        'zoneId'             => 'ZoneId',
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
        if (null !== $this->ipv4LocalAddresses) {
            $res['Ipv4LocalAddresses'] = $this->ipv4LocalAddresses;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6LocalAddresses) {
            $res['Ipv6LocalAddresses'] = $this->ipv6LocalAddresses;
        }
        if (null !== $this->privateIPv4Address) {
            $res['PrivateIPv4Address'] = $this->privateIPv4Address;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Ipv4LocalAddresses'])) {
            if (!empty($map['Ipv4LocalAddresses'])) {
                $model->ipv4LocalAddresses = $map['Ipv4LocalAddresses'];
            }
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Ipv6LocalAddresses'])) {
            if (!empty($map['Ipv6LocalAddresses'])) {
                $model->ipv6LocalAddresses = $map['Ipv6LocalAddresses'];
            }
        }
        if (isset($map['PrivateIPv4Address'])) {
            $model->privateIPv4Address = $map['PrivateIPv4Address'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
