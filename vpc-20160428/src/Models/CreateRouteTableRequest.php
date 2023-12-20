<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTableRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateRouteTableRequest extends Model
{
    /**
     * @description The type of the route table. Valid values:
     *
     *   **VSwitch** (default): vSwitch route table
     *   **Gateway**: gateway route table
     *
     * @example VSwitch
     *
     * @var string
     */
    public $associateType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** in each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-0016e04
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the route table.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the virtual private cloud (VPC) to which the custom route table belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The name of the route table.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example myRouteTable
     *
     * @var string
     */
    public $routeTableName;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the VPC to which the custom route table belongs.
     *
     * You must upgrade or release the ECS instance before you can create a custom route table for the VPC.
     *
     *   For more information about how to upgrade an ECS instance, see [Upgrade subscription instances](~~25438~~) and [Change specifications of pay-as-you-go instances](~~60051~~).
     *   For more information about how to release an ECS instance, see [Release an ECS instance](~~25442~~).
     *
     * >  If a custom route table is created for a VPC that contains an ECS instance from one of the preceding instance families, you must upgrade or release the ECS instance. Otherwise, the custom route table cannot work as expected.
     * @example vpc-bp1qpo0kug3a20qqe****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associateType'        => 'AssociateType',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeTableName'       => 'RouteTableName',
        'tag'                  => 'Tag',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateType) {
            $res['AssociateType'] = $this->associateType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
