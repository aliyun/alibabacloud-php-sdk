<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters\VRouter\routeTableIds;
use AlibabaCloud\Tea\Model;

class VRouter extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $VRouterName;

    /**
     * @var routeTableIds
     */
    public $routeTableIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'vpcId'         => 'VpcId',
        'creationTime'  => 'CreationTime',
        'VRouterId'     => 'VRouterId',
        'description'   => 'Description',
        'VRouterName'   => 'VRouterName',
        'routeTableIds' => 'RouteTableIds',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->VRouterName) {
            $res['VRouterName'] = $this->VRouterName;
        }
        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = null !== $this->routeTableIds ? $this->routeTableIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VRouter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VRouterName'])) {
            $model->VRouterName = $map['VRouterName'];
        }
        if (isset($map['RouteTableIds'])) {
            $model->routeTableIds = routeTableIds::fromMap($map['RouteTableIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
