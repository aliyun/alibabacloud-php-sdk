<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntry extends Model
{
    /**
     * @description The description of the route. The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example RouteEntryDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the route. The destination CIDR block supports IPv4 and IPv6. Make sure that the destination CIDR block meets the following requirements:
     *
     *   The destination CIDR block is not 100.64.0.0/10 or a subset of 100.64.0.0/10.
     *   The destination CIDR block of each route in the route table is unique.
     *
     * @example 192.168.0.1/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the instance associated with the next hop.
     *
     * @example ri-2zeo3xzyf38r4urzd****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the next hop. Valid values:
     *
     *   **Instance** (default): an Elastic Compute Service (ECS) instance
     *   **HaVip**: a high-availability virtual IP address (HAVIP).
     *   **VpnGateway**: a VPN gateway
     *   **NatGateway**: a NAT gateway
     *   **NetworkInterface**: a secondary elastic network interface (ENI)
     *   **RouterInterface**: a router interface
     *   **IPv6Gateway**: an IPv6 gateway
     *   **Attachment**: a transit router
     *
     * @example local
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The information about the next hop.
     *
     * @var nextHops
     */
    public $nextHops;

    /**
     * @description The ID of the route.
     *
     * @example rte-bp1mnnr2al0naomnpxxx
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The route name.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     * @example test
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The route table ID.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The route status. Valid values:
     *
     *   **Pending**
     *   **Available**
     *   **Modifying**
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The route type. Valid values:
     *
     *   **Custom**
     *   **System**
     *   **BGP**
     *   **CEN**
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'instanceId'           => 'InstanceId',
        'nextHopType'          => 'NextHopType',
        'nextHops'             => 'NextHops',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
        'routeTableId'         => 'RouteTableId',
        'status'               => 'Status',
        'type'                 => 'Type',
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
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextHops) {
            $res['NextHops'] = null !== $this->nextHops ? $this->nextHops->toMap() : null;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextHops'])) {
            $model->nextHops = nextHops::fromMap($map['NextHops']);
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
