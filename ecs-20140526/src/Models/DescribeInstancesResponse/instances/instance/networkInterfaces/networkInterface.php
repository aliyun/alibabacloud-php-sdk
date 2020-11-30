<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\networkInterfaces;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\networkInterfaces\networkInterface\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\networkInterfaces\networkInterface\privateIpSets;
use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @var string
     */
    public $type;

    /**
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @var ipv6Sets
     */
    public $ipv6Sets;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'macAddress'         => 'MacAddress',
        'primaryIpAddress'   => 'PrimaryIpAddress',
        'type'               => 'Type',
        'privateIpSets'      => 'PrivateIpSets',
        'ipv6Sets'           => 'Ipv6Sets',
    ];

    public function validate()
    {
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('macAddress', $this->macAddress, true);
        Model::validateRequired('primaryIpAddress', $this->primaryIpAddress, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('privateIpSets', $this->privateIpSets, true);
        Model::validateRequired('ipv6Sets', $this->ipv6Sets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }
        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }

        return $model;
    }
}
