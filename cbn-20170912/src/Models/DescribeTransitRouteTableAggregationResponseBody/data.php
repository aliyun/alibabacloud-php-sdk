<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the aggregate route.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the aggregate route.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the aggregate route.
     *
     * The valid value is **Static**, which indicates a static route. By default, aggregate routes advertised to a VPC are considered custom routes.
     * @example Static
     *
     * @var string
     */
    public $routeType;

    /**
     * @description The scope of networks that you want to advertise the aggregate route.
     *
     * The valid value is **VPC**, which indicates that the aggregate route is advertised to all virtual private clouds (VPCs) that are in associated forwarding correlation with the Enterprise Edition transit router and have route synchronization enabled.
     * @example VPC
     *
     * @var string
     */
    public $scope;

    /**
     * @description The status of the advertisement of the aggregate route. Valid values:
     *
     *   **AllConfigured**: The aggregate route is advertised to all VPCs.
     *   **Configuring**: The aggregate route is being advertised.
     *   **ConfigFailed**: The aggregate route failed to be advertised.
     *   **PartialConfigured**: Failed to advertise the aggregate route to some VPCs.
     *   **Deleting**: The aggregate route is being deleted.
     *
     * @example AllConfigured
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $trRouteTableId;

    /**
     * @description The destination CIDR block of the aggregate route.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $transitRouteTableAggregationCidr;
    protected $_name = [
        'description'                      => 'Description',
        'name'                             => 'Name',
        'routeType'                        => 'RouteType',
        'scope'                            => 'Scope',
        'status'                           => 'Status',
        'trRouteTableId'                   => 'TrRouteTableId',
        'transitRouteTableAggregationCidr' => 'TransitRouteTableAggregationCidr',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trRouteTableId) {
            $res['TrRouteTableId'] = $this->trRouteTableId;
        }
        if (null !== $this->transitRouteTableAggregationCidr) {
            $res['TransitRouteTableAggregationCidr'] = $this->transitRouteTableAggregationCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrRouteTableId'])) {
            $model->trRouteTableId = $map['TrRouteTableId'];
        }
        if (isset($map['TransitRouteTableAggregationCidr'])) {
            $model->transitRouteTableAggregationCidr = $map['TransitRouteTableAggregationCidr'];
        }

        return $model;
    }
}
