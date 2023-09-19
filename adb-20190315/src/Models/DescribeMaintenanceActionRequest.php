<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeMaintenanceActionRequest extends Model
{
    /**
     * @description Specifies whether to return the information about pending or historical O\&M events. Valid values:
     *
     *   **0**: returns the information about pending O\&M event.
     *   **1**: returns the information about historical O\&M event.
     *
     * If you do not specify this parameter, the information about pending O\&M event are returned.
     * @example 1
     *
     * @var int
     */
    public $isHistory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Pages start from page 1. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **30**, **50**, and **100**. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. Valid values:
     *
     *   The ID of the region where the O\&M event occurs. Example: `cn-hangzhou`. You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     *   You can also set Region to `all` to query the O\&M events in all regions. If you set `Region` to `all`, you must set `TaskType` to `all`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region where the O\&M event occurs.
     *
     * > You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
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
     * @description The type of the O\&M event. Valid values:
     *
     *   **rds_apsaradb_upgrade**: database software upgrades.
     *   **all**: all the O\&M events in all regions within the current account. If you set `Region` to `all`, you must set `TaskType` to `all`.
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'isHistory'            => 'IsHistory',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'region'               => 'Region',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskType'             => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isHistory) {
            $res['IsHistory'] = $this->isHistory;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMaintenanceActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsHistory'])) {
            $model->isHistory = $map['IsHistory'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
