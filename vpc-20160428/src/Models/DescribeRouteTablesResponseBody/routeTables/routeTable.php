<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\vSwitchIds;
use AlibabaCloud\Tea\Model;

class routeTable extends Model
{
    /**
     * @description The time when the route table was created.
     *
     * The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format in UTC.
     * @example 2017-08-22T10:40:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the resource group to which the route table belongs.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the route.
     *
     * @var routeEntrys
     */
    public $routeEntrys;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The type of the route table. Valid values:
     *
     *   **Custom**
     *   **System**
     *
     * @example System
     *
     * @var string
     */
    public $routeTableType;

    /**
     * @description The status of the route table. Valid values:
     *
     *   **Pending**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The vRouter ID.
     *
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description The vSwitch ID.
     *
     * @var vSwitchIds
     */
    public $vSwitchIds;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'resourceGroupId' => 'ResourceGroupId',
        'routeEntrys'     => 'RouteEntrys',
        'routeTableId'    => 'RouteTableId',
        'routeTableType'  => 'RouteTableType',
        'status'          => 'Status',
        'VRouterId'       => 'VRouterId',
        'vSwitchIds'      => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeEntrys) {
            $res['RouteEntrys'] = null !== $this->routeEntrys ? $this->routeEntrys->toMap() : null;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteEntrys'])) {
            $model->routeEntrys = routeEntrys::fromMap($map['RouteEntrys']);
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        return $model;
    }
}
