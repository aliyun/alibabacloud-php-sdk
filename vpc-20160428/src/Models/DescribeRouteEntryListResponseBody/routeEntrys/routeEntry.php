<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntry extends Model
{
    /**
     * @description The description of the route.
     *
     * @example RouteEntryDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.2.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The time when the route was modified. The time follows the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2022-05-09T03:00:07Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The IP version. Valid values: Valid values:
     *
     *   **ipv4**
     *   **ipv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The information about the next hops.
     *
     * @var nextHops
     */
    public $nextHops;

    /**
     * @description The route origin. Valid values:
     * **RoutePropagation**: The route is created by a dynamic propagation source.
     * **SystemCreate**: The route is created by the system.
     * **CustomCreate**: The route is created by a user.
     *
     * @example RoutePropagation
     *
     * @var string
     */
    public $origin;

    /**
     * @description The ID of the route.
     *
     * @example rte-bp1mnnr2al0naomnp****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The name of the route.
     *
     * @example aaa
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-bp15w5q90d2rk3bww****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description Indicates whether the route is hosted. If the parameter is empty, the route is not hosted.
     *
     * If **TR** is returned, the route is hosted by a transit router.
     * @example TR
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The route status. Valid values:
     *
     *   **Pending**
     *   **Available**
     *   **Modifying**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The route type. Valid values:
     *
     *   **Custom**: custom routes.
     *   **System**: system routes.
     *   **BGP**: BGP routes.
     *   **CEN**: CEN routes.
     *   **ECR**: ECR routes.
     *
     * @example Custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'gmtModified'          => 'GmtModified',
        'ipVersion'            => 'IpVersion',
        'nextHops'             => 'NextHops',
        'origin'               => 'Origin',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
        'routeTableId'         => 'RouteTableId',
        'serviceType'          => 'ServiceType',
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->nextHops) {
            $res['NextHops'] = null !== $this->nextHops ? $this->nextHops->toMap() : null;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
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
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['NextHops'])) {
            $model->nextHops = nextHops::fromMap($map['NextHops']);
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
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
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
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
