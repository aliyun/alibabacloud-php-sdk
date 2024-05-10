<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @description The description of the custom route entry. You can specify up to 50 descriptions.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the custom route entry. Both IPv4 and IPv6 CIDR blocks are supported. You can specify up to 50 destination CIDR blocks. Make sure that the destination CIDR block meets the following requirements:
     *
     *   The destination CIDR block is not 100.64.0.0/10 or a subset of 100.64.0.0/10.
     *   The destination CIDR block of the custom route entry is different from the destination CIDR blocks of other route entries in the same route table.
     *
     * This parameter is required.
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The IP version. You can specify up to 50 IP versions. Valid values:
     *
     *   **4**: IPv4
     *   **6**: IPv6
     *
     * @example IPv4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The name of the custom route entry that you want to add. You can specify up to 50 names.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The next hop ID of the custom route entry. You can specify up to 50 next hop IDs.
     *
     * This parameter is required.
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The type of next hop. You can specify up to 50 next hop types. Valid values:
     *
     *   **Instance** (default): an Elastic Compute Service (ECS) instance
     *   **HaVip**: a high-availability virtual IP address (HAVIP).
     *   **RouterInterface**: a router interface.
     *   **NetworkInterface**: an elastic network interface (ENI).
     *   **VpnGateway**: a VPN gateway.
     *   **IPv6Gateway**: an IPv6 gateway.
     *   **NatGateway**: a NAT gateway.
     *   **Attachment**: a transit router.
     *   **VpcPeer**: a VPC peering connection.
     *
     * This parameter is required.
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The ID of the route table to which you want to add a custom route entry. You can specify up to 50 route table IDs.
     *
     * This parameter is required.
     * @example vtb-bp145q7glnuzd****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'description'  => 'Description',
        'dstCidrBlock' => 'DstCidrBlock',
        'ipVersion'    => 'IpVersion',
        'name'         => 'Name',
        'nextHop'      => 'NextHop',
        'nextHopType'  => 'NextHopType',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
