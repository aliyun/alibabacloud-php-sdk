<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @description The description of the custom route. You can specify at most 50 descriptions.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the custom route. IPv4 CIDR blocks, IPv6 CIDR blocks, and prefix lists are supported. You can enter up to 50 destination CIDR blocks. Make sure that the following requirements are met:
     *
     *   The destination CIDR block cannot point to 100.64.0.0/10 or belong to 100.64.0.0/10.
     *   The destination CIDR block of each route in the route table is unique.
     *
     * This parameter is required.
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The IP version. Valid values: You can specify at most 50 IP versions. Valid values:
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
     * @description The name of the custom route that you want to add. You can specify at most 50 names.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the next hop for the custom route. You can specify at most 50 instance IDs.
     *
     * This parameter is required.
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The type of next hop. You can specify at most 50 next hop types. Valid values:
     *
     *   **Instance**: Elastic Compute Service (ECS) instance. This is the default value.
     *   **HaVip**: high-availability virtual IP address (HAVIP).
     *   **RouterInterface**: router interface.
     *   **NetworkInterface**: elastic network interface (ENI).
     *   **VpnGateway**: VPN gateway.
     *   **IPv6Gateway**: IPv6 gateway.
     *   **NatGateway**: NAT gateway.
     *   **Attachment**: transit router.
     *   **VpcPeer**: VPC peering connection.
     *   **Ipv4Gateway**: IPv4 gateway.
     *   **GatewayEndpoint**: gateway endpoint.
     *   **CenBasic**: CEN does not support transfer routers.
     *   **Ecr**: Express Connect Router (ECR).
     *
     * This parameter is required.
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The ID of the route table to which you want to add custom route s. You can specify at most 50 route table IDs.
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
