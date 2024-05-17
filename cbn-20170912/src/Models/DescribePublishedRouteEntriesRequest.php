<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribePublishedRouteEntriesRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * This parameter is required.
     * @example cen-7qthudw0ll6jm****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the network instance.
     *
     * This parameter is required.
     * @example vpc-bp18sth14qii3pnv****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the region where the network instance is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The ID of the route table of the network instance.
     *
     * @example vtb-bp174d1gje79u1g4****
     *
     * @var string
     */
    public $childInstanceRouteTableId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *   **CCN**: Cloud Connect Network (CCN) instance
     *
     * This parameter is required.
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The destination CIDR block of the route that you want to query.
     *
     * @example 172.16.0.0/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **10**. Valid values: **1** to **50**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribePublishedRouteEntriesRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
