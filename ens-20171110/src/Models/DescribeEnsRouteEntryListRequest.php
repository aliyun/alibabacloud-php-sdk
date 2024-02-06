<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRouteEntryListRequest extends Model
{
    /**
     * @description The destination Classless Inter-Domain Routing (CIDR) block of the route entry.
     *
     * @example 11.0.0.0/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the next hop.
     *
     * @example i-2zecshuv3axtr2gc4noa
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of next hop of the custom route entry. Valid values:
     *
     *   Instance: an ENS instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The page number of the returned page. Valid values: integers that are greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the route that you want to query.
     *
     * @example rte-8vbdw66evgv44u2u7v3hx
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The name of the route.
     *
     * @example test0
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The route type. Valid values:
     *
     *   Custom: custom route
     *   System: system route
     *
     * @example Custom
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The ID of the route table that you want to query.
     *
     * @example vtb-hp3wdhynneo7fsclox8hs
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
        'routeEntryType'       => 'RouteEntryType',
        'routeTableId'         => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRouteEntryListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
