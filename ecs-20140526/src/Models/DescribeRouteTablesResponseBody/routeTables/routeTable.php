<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;
use AlibabaCloud\Tea\Model;

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
    public $VRouterId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'resourceGroupId' => 'ResourceGroupId',
        'routeEntrys'     => 'RouteEntrys',
        'routeTableId'    => 'RouteTableId',
        'routeTableType'  => 'RouteTableType',
        'VRouterId'       => 'VRouterId',
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
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
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
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }

        return $model;
    }
}
