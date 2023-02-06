<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\privateIpSets;
use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description The sets of IPv4 prefix.
     *
     * @var ipv4PrefixSets
     */
    public $ipv4PrefixSets;

    /**
     * @description The sets of IPv6 prefix.
     *
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;

    /**
     * @description The IPv6 addresses assigned to the ENI. This parameter has a value only when the `AdditionalAttributes.N` request parameter is set to `NETWORK_PRIMARY_ENI_IP`.
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description The media access control (MAC) address of the ENI.
     *
     * @example 00:16:3e:32:b4:**
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-2zeh9atclduxvf1z****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The primary private IP address of the ENI.
     *
     * @example 172.17.**.***
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description Details about the private IP address.
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Primary
     *   Secondary
     *
     * @example Primary
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4PrefixSets) {
            $res['Ipv4PrefixSets'] = null !== $this->ipv4PrefixSets ? $this->ipv4PrefixSets->toMap() : null;
        }
        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toMap() : null;
        }
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
     * @return networkInterface
     */
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
