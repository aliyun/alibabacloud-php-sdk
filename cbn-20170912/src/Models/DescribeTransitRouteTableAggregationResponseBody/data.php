<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $routeType;
    /**
     * @var string
     */
    public $scope;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $trRouteTableId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
