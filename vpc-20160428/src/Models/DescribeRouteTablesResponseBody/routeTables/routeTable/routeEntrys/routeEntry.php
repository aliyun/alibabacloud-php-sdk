<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntry extends Model
{
    /**
     * @description The description of the router entry.
     *
     * @example RouteEntryDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the route entry.
     *
     * @example 192.168.0.1/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the next hop.
     *
     * @example ri-2zeo3xzyf38r4urzd****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the route.
     *
     *   **local**: a vSwitch route
     *   **service**: a cloud service route
     *   **classicLink**: a route added by the system after ClassicLink is enabled
     *
     * @example local
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The list of next hops of equal-cost multi-path routing (ECMP) routes.
     *
     * @var nextHops
     */
    public $nextHops;

    /**
     * @example rte-bp1mnnr2al0naomnpxxx
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The name of the route entry.
     *
     * @example test
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The ID of the route table to which the route entry belongs.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The state of the route entry.
     *
     *   **Pending**: The route entry is being configured.
     *   **Available**: The route entry is available.
     *   **Modifying**: The route entry is being modified.
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the route entry.
     *
     *   **System** : a system route entry
     *   **Custom**: a custom route entry
     *   **BGP**: a BGP route entry
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
