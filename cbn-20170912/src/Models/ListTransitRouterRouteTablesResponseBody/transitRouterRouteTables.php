<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody\transitRouterRouteTables\routeTableOptions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody\transitRouterRouteTables\tags;
use AlibabaCloud\Tea\Model;

class transitRouterRouteTables extends Model
{
    /**
     * @description The time when the route table was created.
     *
     * The time follows the ISO8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC.
     * @example 2021-03-15T09:39Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The region ID of the Enterprise Edition transit router.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The features of the route table.
     *
     * @var routeTableOptions
     */
    public $routeTableOptions;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The transit router ID.
     *
     * @example tr-8vb8bie2koduo5awz****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The description of the route table.
     *
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterRouteTableDescription;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @description The name of the route table.
     *
     * @example testname
     *
     * @var string
     */
    public $transitRouterRouteTableName;

    /**
     * @description The status of the route table. Valid values:
     *
     *   **Creating**
     *   **Deleting**
     *   **Active**
     *
     * @example Active
     *
     * @var string
     */
    public $transitRouterRouteTableStatus;

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
    public $transitRouterRouteTableType;
    protected $_name = [
        'createTime'                         => 'CreateTime',
        'regionId'                           => 'RegionId',
        'routeTableOptions'                  => 'RouteTableOptions',
        'tags'                               => 'Tags',
        'transitRouterId'                    => 'TransitRouterId',
        'transitRouterRouteTableDescription' => 'TransitRouterRouteTableDescription',
        'transitRouterRouteTableId'          => 'TransitRouterRouteTableId',
        'transitRouterRouteTableName'        => 'TransitRouterRouteTableName',
        'transitRouterRouteTableStatus'      => 'TransitRouterRouteTableStatus',
        'transitRouterRouteTableType'        => 'TransitRouterRouteTableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeTableOptions) {
            $res['RouteTableOptions'] = null !== $this->routeTableOptions ? $this->routeTableOptions->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterRouteTableDescription) {
            $res['TransitRouterRouteTableDescription'] = $this->transitRouterRouteTableDescription;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }
        if (null !== $this->transitRouterRouteTableName) {
            $res['TransitRouterRouteTableName'] = $this->transitRouterRouteTableName;
        }
        if (null !== $this->transitRouterRouteTableStatus) {
            $res['TransitRouterRouteTableStatus'] = $this->transitRouterRouteTableStatus;
        }
        if (null !== $this->transitRouterRouteTableType) {
            $res['TransitRouterRouteTableType'] = $this->transitRouterRouteTableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterRouteTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteTableOptions'])) {
            $model->routeTableOptions = routeTableOptions::fromMap($map['RouteTableOptions']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterRouteTableDescription'])) {
            $model->transitRouterRouteTableDescription = $map['TransitRouterRouteTableDescription'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }
        if (isset($map['TransitRouterRouteTableName'])) {
            $model->transitRouterRouteTableName = $map['TransitRouterRouteTableName'];
        }
        if (isset($map['TransitRouterRouteTableStatus'])) {
            $model->transitRouterRouteTableStatus = $map['TransitRouterRouteTableStatus'];
        }
        if (isset($map['TransitRouterRouteTableType'])) {
            $model->transitRouterRouteTableType = $map['TransitRouterRouteTableType'];
        }

        return $model;
    }
}
