<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\privateIpSets;

class networkInterface extends Model
{
    /**
     * @var ipv4PrefixSets
     */
    public $ipv4PrefixSets;
    /**
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;
    /**
     * @var ipv6Sets
     */
    public $ipv6Sets;
    /**
     * @var string
     */
    public $macAddress;
    /**
     * @var string
     */
    public $networkInterfaceId;
    /**
     * @var string
     */
    public $primaryIpAddress;
    /**
     * @var privateIpSets
     */
    public $privateIpSets;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ipv4PrefixSets'     => 'Ipv4PrefixSets',
        'ipv6PrefixSets'     => 'Ipv6PrefixSets',
        'ipv6Sets'           => 'Ipv6Sets',
        'macAddress'         => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'primaryIpAddress'   => 'PrimaryIpAddress',
        'privateIpSets'      => 'PrivateIpSets',
        'type'               => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->ipv4PrefixSets) {
            $this->ipv4PrefixSets->validate();
        }
        if (null !== $this->ipv6PrefixSets) {
            $this->ipv6PrefixSets->validate();
        }
        if (null !== $this->ipv6Sets) {
            $this->ipv6Sets->validate();
        }
        if (null !== $this->privateIpSets) {
            $this->privateIpSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4PrefixSets) {
            $res['Ipv4PrefixSets'] = null !== $this->ipv4PrefixSets ? $this->ipv4PrefixSets->toArray($noStream) : $this->ipv4PrefixSets;
        }

        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toArray($noStream) : $this->ipv6PrefixSets;
        }

        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toArray($noStream) : $this->ipv6Sets;
        }

        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }

        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toArray($noStream) : $this->privateIpSets;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Ipv4PrefixSets'])) {
            $model->ipv4PrefixSets = ipv4PrefixSets::fromMap($map['Ipv4PrefixSets']);
        }

        if (isset($map['Ipv6PrefixSets'])) {
            $model->ipv6PrefixSets = ipv6PrefixSets::fromMap($map['Ipv6PrefixSets']);
        }

        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }

        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }

        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
