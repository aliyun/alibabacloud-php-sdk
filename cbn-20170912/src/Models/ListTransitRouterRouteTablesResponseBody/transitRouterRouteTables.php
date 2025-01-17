<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody\transitRouterRouteTables\routeTableOptions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody\transitRouterRouteTables\tags;

class transitRouterRouteTables extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var routeTableOptions
     */
    public $routeTableOptions;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $transitRouterId;
    /**
     * @var string
     */
    public $transitRouterRouteTableDescription;
    /**
     * @var string
     */
    public $transitRouterRouteTableId;
    /**
     * @var string
     */
    public $transitRouterRouteTableName;
    /**
     * @var string
     */
    public $transitRouterRouteTableStatus;
    /**
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
        if (null !== $this->routeTableOptions) {
            $this->routeTableOptions->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->routeTableOptions) {
            $res['RouteTableOptions'] = null !== $this->routeTableOptions ? $this->routeTableOptions->toArray($noStream) : $this->routeTableOptions;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
