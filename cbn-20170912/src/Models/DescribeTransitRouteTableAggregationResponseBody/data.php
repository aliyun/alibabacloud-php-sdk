<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @example Static
     *
     * @var string
     */
    public $routeType;

    /**
     * @example VPC
     *
     * @var string
     */
    public $scope;

    /**
     * @example AllConfigured
     *
     * @var string
     */
    public $status;

    /**
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $trRouteTableId;

    /**
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
