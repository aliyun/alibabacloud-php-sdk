<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters\VRouter\routeTableIds;

class VRouter extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var routeTableIds
     */
    public $routeTableIds;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $VRouterName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'regionId' => 'RegionId',
        'routeTableIds' => 'RouteTableIds',
        'VRouterId' => 'VRouterId',
        'VRouterName' => 'VRouterName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->routeTableIds) {
            $this->routeTableIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = null !== $this->routeTableIds ? $this->routeTableIds->toArray($noStream) : $this->routeTableIds;
        }

        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }

        if (null !== $this->VRouterName) {
            $res['VRouterName'] = $this->VRouterName;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RouteTableIds'])) {
            $model->routeTableIds = routeTableIds::fromMap($map['RouteTableIds']);
        }

        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }

        if (isset($map['VRouterName'])) {
            $model->VRouterName = $map['VRouterName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
