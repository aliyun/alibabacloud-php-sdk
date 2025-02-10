<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\vSwitchIds;

class routeTable extends Model
{
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var routeEntrys
     */
    public $routeEntrys;
    /**
     * @var string
     */
    public $routeTableId;
    /**
     * @var string
     */
    public $routeTableType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $VRouterId;
    /**
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
        if (null !== $this->routeEntrys) {
            $this->routeEntrys->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->routeEntrys) {
            $res['RouteEntrys'] = null !== $this->routeEntrys ? $this->routeEntrys->toArray($noStream) : $this->routeEntrys;
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
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
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
