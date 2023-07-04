<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the route table that is automatically created by the system after the VPC is created.
     *
     * @example vtb-bp145q7glnuzdv****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The ID of the vRouter that is automatically created by the system after the VPC is created.
     *
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description The ID of the created VPC.
     *
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTableId'    => 'RouteTableId',
        'VRouterId'       => 'VRouterId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
