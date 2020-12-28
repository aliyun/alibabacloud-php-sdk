<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\networkInterfaces\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\networkInterfaces\privateIpSets;
use AlibabaCloud\Tea\Model;

class networkInterfaces extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var ipv6Sets[]
     */
    public $ipv6Sets;

    /**
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @var privateIpSets[]
     */
    public $privateIpSets;
    protected $_name = [
        'type'               => 'Type',
        'macAddress'         => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'ipv6Sets'           => 'Ipv6Sets',
        'primaryIpAddress'   => 'PrimaryIpAddress',
        'privateIpSets'      => 'PrivateIpSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = [];
            if (null !== $this->ipv6Sets && \is_array($this->ipv6Sets)) {
                $n = 0;
                foreach ($this->ipv6Sets as $item) {
                    $res['Ipv6Sets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = [];
            if (null !== $this->privateIpSets && \is_array($this->privateIpSets)) {
                $n = 0;
                foreach ($this->privateIpSets as $item) {
                    $res['PrivateIpSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['Ipv6Sets'])) {
            if (!empty($map['Ipv6Sets'])) {
                $model->ipv6Sets = [];
                $n               = 0;
                foreach ($map['Ipv6Sets'] as $item) {
                    $model->ipv6Sets[$n++] = null !== $item ? ipv6Sets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['PrivateIpSets'])) {
            if (!empty($map['PrivateIpSets'])) {
                $model->privateIpSets = [];
                $n                    = 0;
                foreach ($map['PrivateIpSets'] as $item) {
                    $model->privateIpSets[$n++] = null !== $item ? privateIpSets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
