<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeGlobalAccelerationInstancesRequest extends Model
{
    /**
     * @description The bandwidth type of the GA instance. Valid values:
     *
     *   **Sharing**
     *   **Exclusive** (default)
     *
     * @example Exclusive
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-234sljmxaz****
     *
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @description Specifies whether to return information about pending orders. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $includeReservationData;

    /**
     * @description The public IP address of the GA instance.
     *
     * @example 12.xx.xx.78
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the GA instance.
     *
     * @example GA-1
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the GA instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
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
     * @description The ID of the backend service instance.
     *
     * @example i-sxjblddejj9x****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The region of the backend service. Valid values:
     *
     *   **china-mainland**
     *   **north-america**
     *   **asia-pacific**
     *   **europe**
     *
     * @example china-mainland
     *
     * @var string
     */
    public $serviceLocation;

    /**
     * @description The status of the GA instance. Valid values:
     *
     *   **Available**
     *   **Inuse**
     *   **Associating**
     *   **Unassociating**
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthType'                => 'BandwidthType',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'includeReservationData'       => 'IncludeReservationData',
        'ipAddress'                    => 'IpAddress',
        'name'                         => 'Name',
        'ownerAccount'                 => 'OwnerAccount',
        'ownerId'                      => 'OwnerId',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
        'regionId'                     => 'RegionId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'serverId'                     => 'ServerId',
        'serviceLocation'              => 'ServiceLocation',
        'status'                       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->includeReservationData) {
            $res['IncludeReservationData'] = $this->includeReservationData;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalAccelerationInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['IncludeReservationData'])) {
            $model->includeReservationData = $map['IncludeReservationData'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
