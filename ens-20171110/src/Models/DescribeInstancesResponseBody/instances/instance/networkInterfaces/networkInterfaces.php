<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterfaces\ipv6Sets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterfaces\privateIpSets;

class networkInterfaces extends Model
{
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
        'ipv6Sets' => 'Ipv6Sets',
        'macAddress' => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'primaryIpAddress' => 'PrimaryIpAddress',
        'privateIpSets' => 'PrivateIpSets',
        'type' => 'Type',
    ];

    public function validate()
    {
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
