<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class PublishRouteEntriesRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-rj9gt5nll27onu****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the region where the network instance is deployed.
     *
     * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     * @example us-west-1
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The ID of the route table configured on the network instance.
     *
     * @example vtb-bp174d1gje7****
     *
     * @var string
     */
    public $childInstanceRouteTableId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The destination CIDR block of the route that you want to advertise.
     *
     * @example 172.16.1.0/24
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
     * @return PublishRouteEntriesRequest
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
