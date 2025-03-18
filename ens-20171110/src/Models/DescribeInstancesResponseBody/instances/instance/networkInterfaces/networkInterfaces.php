<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterfaces\ipv6Sets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterfaces\privateIpSets;
use AlibabaCloud\Tea\Model;

class networkInterfaces extends Model
{
    /**
     * @description The IPv6 addresses of the ENI. This parameter has a value only when `AdditionalAttributes.N` is set to `NETWORK_PRIMARY_ENI_IP`.
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description The MAC address of the ENI.
     *
     * @example 00:16:3e:4f:5f:ca
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-0wlonoy6jo8532gfzuama****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The primary IP address of the ENI.
     *
     * @example ***************
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The private IP addresses of the ENI.
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk.
     *   data: data disk.
     *
     * @example Secondary
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
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
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
