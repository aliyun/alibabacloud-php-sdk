<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowLogRecordsRequest extends Model
{
    /**
     * @description Cluster ID.
     * This parameter is required.
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Database name.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @description End time of the query, which must be later than the start time, and the time interval between the start and end times must not exceed 24 hours. The format is `YYYY-MM-DDThh:mmZ` (UTC time).
     *
     * This parameter is required.
     * @example 2022-11-16T04:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Node ID
     *
     * @example pi-**********
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Page number, with a range greater than 0 and not exceeding the maximum value of Integer.
     *
     * The default value is **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of records per page, with the following options:
     * **30**
     * **50**
     * **100**
     *
     * The default value is **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Region ID.
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
     * @description Unique identifier of the SQL statement in the slow log statistics, which can be used to obtain the detailed slow logs for that SQL statement.
     *
     * @example U2FsdGVk****
     *
     * @var string
     */
    public $SQLHASH;

    /**
     * @description Start time of the query. The format is `YYYY-MM-DDThh:mmZ` (UTC time).
     *
     * > * Supports viewing slow log information up to 30 days.
     * > * The input is UTC time (i.e., 0 timezone). If your service is currently in a different timezone, please perform a time conversion. For example, if the current timezone of your service is Beijing Time (UTC+8) at 12:00, and you need to query the slow logs between 08:00-12:00 Beijing Time, you should input 00:00-04:00.
     *
     * This parameter is required.
     * @example 2022-11-15T16:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'DBName'               => 'DBName',
        'endTime'              => 'EndTime',
        'nodeId'               => 'NodeId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'SQLHASH'              => 'SQLHASH',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
