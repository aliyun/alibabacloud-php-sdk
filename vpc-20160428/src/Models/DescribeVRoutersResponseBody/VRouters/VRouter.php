<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponseBody\VRouters;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponseBody\VRouters\VRouter\routeTableIds;
use AlibabaCloud\Tea\Model;

class VRouter extends Model
{
    /**
     * @description The time when the vRouter was created.
     *
     * @example 2018-03-22T07:46:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the vRouter.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The region to which the vRouter belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the route table in the vRouter.
     *
     * @var routeTableIds
     */
    public $routeTableIds;

    /**
     * @description The ID of the vRouter.
     *
     * @example vrt-rj98khsezfqpjrxmv****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description The name of the vRouter.
     *
     * @example doctest
     *
     * @var string
     */
    public $VRouterName;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the vRouter belongs.
     *
     * @example vpc-rj905wotv6y030t1****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'description'   => 'Description',
        'regionId'      => 'RegionId',
        'routeTableIds' => 'RouteTableIds',
        'VRouterId'     => 'VRouterId',
        'VRouterName'   => 'VRouterName',
        'vpcId'         => 'VpcId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = null !== $this->routeTableIds ? $this->routeTableIds->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return VRouter
     */
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
