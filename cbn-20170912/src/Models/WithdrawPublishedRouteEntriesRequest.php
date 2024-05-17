<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class WithdrawPublishedRouteEntriesRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * This parameter is required.
     * @example cen-sxjfjkjfkjfiein****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the attached network instance.
     *
     * This parameter is required.
     * @example vpc-rj9gt5nll27onu7****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the region where the attached network instance is created.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The ID of the route table of the attached network instance.
     *
     * This parameter is required.
     * @example vtb-bp174d1gje79u1g4t****
     *
     * @var string
     */
    public $childInstanceRouteTableId;

    /**
     * @description The type of the attached network instance.
     *
     * Set the value to **VPC**, which indicates a virtual private cloud (VPC).
     *
     * This parameter is required.
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The destination CIDR block of the route that you want to withdraw.
     *
     * This parameter is required.
     * @example 172.XX.XX.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cenId'                     => 'CenId',
        'childInstanceId'           => 'ChildInstanceId',
        'childInstanceRegionId'     => 'ChildInstanceRegionId',
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'childInstanceType'         => 'ChildInstanceType',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceRouteTableId) {
            $res['ChildInstanceRouteTableId'] = $this->childInstanceRouteTableId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WithdrawPublishedRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceRouteTableId'])) {
            $model->childInstanceRouteTableId = $map['ChildInstanceRouteTableId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
