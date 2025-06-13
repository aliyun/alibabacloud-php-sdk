<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Dara\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $eipType;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetAddressHcStatus;

    /**
     * @var string[]
     */
    public $ipv4LocalAddresses;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $ipv6AddressHcStatus;

    /**
     * @var string[]
     */
    public $ipv6LocalAddresses;
    protected $_name = [
        'address' => 'Address',
        'allocationId' => 'AllocationId',
        'eipType' => 'EipType',
        'intranetAddress' => 'IntranetAddress',
        'intranetAddressHcStatus' => 'IntranetAddressHcStatus',
        'ipv4LocalAddresses' => 'Ipv4LocalAddresses',
        'ipv6Address' => 'Ipv6Address',
        'ipv6AddressHcStatus' => 'Ipv6AddressHcStatus',
        'ipv6LocalAddresses' => 'Ipv6LocalAddresses',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4LocalAddresses)) {
            Model::validateArray($this->ipv4LocalAddresses);
        }
        if (\is_array($this->ipv6LocalAddresses)) {
            Model::validateArray($this->ipv6LocalAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ipv4LocalAddresses) {
            if (\is_array($this->ipv4LocalAddresses)) {
                $res['Ipv4LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv4LocalAddresses as $item1) {
                    $res['Ipv4LocalAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }

        if (null !== $this->ipv6AddressHcStatus) {
            $res['Ipv6AddressHcStatus'] = $this->ipv6AddressHcStatus;
        }

        if (null !== $this->ipv6LocalAddresses) {
            if (\is_array($this->ipv6LocalAddresses)) {
                $res['Ipv6LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv6LocalAddresses as $item1) {
                    $res['Ipv6LocalAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Ipv4LocalAddresses'])) {
            if (!empty($map['Ipv4LocalAddresses'])) {
                $model->ipv4LocalAddresses = [];
                $n1 = 0;
                foreach ($map['Ipv4LocalAddresses'] as $item1) {
                    $model->ipv4LocalAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        if (isset($map['Ipv6AddressHcStatus'])) {
            $model->ipv6AddressHcStatus = $map['Ipv6AddressHcStatus'];
        }

        if (isset($map['Ipv6LocalAddresses'])) {
            if (!empty($map['Ipv6LocalAddresses'])) {
                $model->ipv6LocalAddresses = [];
                $n1 = 0;
                foreach ($map['Ipv6LocalAddresses'] as $item1) {
                    $model->ipv6LocalAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
