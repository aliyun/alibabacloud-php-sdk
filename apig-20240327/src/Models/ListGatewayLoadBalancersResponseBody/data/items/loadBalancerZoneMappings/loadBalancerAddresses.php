<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\loadBalancerZoneMappings;

use AlibabaCloud\Dara\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $eniId;

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
     * @var string
     */
    public $privateIPv4Address;

    /**
     * @var string
     */
    public $privateIPv4HcStatus;

    /**
     * @var string
     */
    public $privateIPv6HcStatus;

    /**
     * @var string
     */
    public $publicIPv4Address;
    protected $_name = [
        'allocationId' => 'allocationId',
        'eniId' => 'eniId',
        'ipv4LocalAddresses' => 'ipv4LocalAddresses',
        'ipv6Address' => 'ipv6Address',
        'ipv6LocalAddresses' => 'ipv6LocalAddresses',
        'privateIPv4Address' => 'privateIPv4Address',
        'privateIPv4HcStatus' => 'privateIPv4HcStatus',
        'privateIPv6HcStatus' => 'privateIPv6HcStatus',
        'publicIPv4Address' => 'publicIPv4Address',
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
        if (null !== $this->allocationId) {
            $res['allocationId'] = $this->allocationId;
        }

        if (null !== $this->eniId) {
            $res['eniId'] = $this->eniId;
        }

        if (null !== $this->ipv4LocalAddresses) {
            if (\is_array($this->ipv4LocalAddresses)) {
                $res['ipv4LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv4LocalAddresses as $item1) {
                    $res['ipv4LocalAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv6Address) {
            $res['ipv6Address'] = $this->ipv6Address;
        }

        if (null !== $this->ipv6LocalAddresses) {
            if (\is_array($this->ipv6LocalAddresses)) {
                $res['ipv6LocalAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipv6LocalAddresses as $item1) {
                    $res['ipv6LocalAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateIPv4Address) {
            $res['privateIPv4Address'] = $this->privateIPv4Address;
        }

        if (null !== $this->privateIPv4HcStatus) {
            $res['privateIPv4HcStatus'] = $this->privateIPv4HcStatus;
        }

        if (null !== $this->privateIPv6HcStatus) {
            $res['privateIPv6HcStatus'] = $this->privateIPv6HcStatus;
        }

        if (null !== $this->publicIPv4Address) {
            $res['publicIPv4Address'] = $this->publicIPv4Address;
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
        if (isset($map['allocationId'])) {
            $model->allocationId = $map['allocationId'];
        }

        if (isset($map['eniId'])) {
            $model->eniId = $map['eniId'];
        }

        if (isset($map['ipv4LocalAddresses'])) {
            if (!empty($map['ipv4LocalAddresses'])) {
                $model->ipv4LocalAddresses = [];
                $n1 = 0;
                foreach ($map['ipv4LocalAddresses'] as $item1) {
                    $model->ipv4LocalAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ipv6Address'])) {
            $model->ipv6Address = $map['ipv6Address'];
        }

        if (isset($map['ipv6LocalAddresses'])) {
            if (!empty($map['ipv6LocalAddresses'])) {
                $model->ipv6LocalAddresses = [];
                $n1 = 0;
                foreach ($map['ipv6LocalAddresses'] as $item1) {
                    $model->ipv6LocalAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['privateIPv4Address'])) {
            $model->privateIPv4Address = $map['privateIPv4Address'];
        }

        if (isset($map['privateIPv4HcStatus'])) {
            $model->privateIPv4HcStatus = $map['privateIPv4HcStatus'];
        }

        if (isset($map['privateIPv6HcStatus'])) {
            $model->privateIPv6HcStatus = $map['privateIPv6HcStatus'];
        }

        if (isset($map['publicIPv4Address'])) {
            $model->publicIPv4Address = $map['publicIPv4Address'];
        }

        return $model;
    }
}
