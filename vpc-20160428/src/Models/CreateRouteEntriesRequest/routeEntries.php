<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of next hop. You can specify up to 50 next hop types. Valid values:
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
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The description of the custom route entry. You can specify up to 50 descriptions.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example IPv4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The ID of the request.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of custom route entries that were successfully added.
     *
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The number of custom route entries that failed to be added.
     *
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The name of the custom route entry that you want to add. You can specify up to 50 names.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
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
