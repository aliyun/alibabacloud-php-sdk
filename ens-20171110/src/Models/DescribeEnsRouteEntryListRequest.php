<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRouteEntryListRequest extends Model
{
    /**
     * @description 路由条目的目标网段
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description 下一跳实例ID。
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description 下一跳类型
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description 列表的页码，默认值为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时每页的行数，最大值为100，默认值为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 要查询的路由条目的ID。
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description 路由条目的名称。
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description 路由条目的类型
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description 要查询的路由表的ID。
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
