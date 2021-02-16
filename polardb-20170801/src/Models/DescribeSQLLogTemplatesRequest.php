<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var int
     */
    public $pageNumbers;

    /**
     * @var float
     */
    public $minAvgConsume;

    /**
     * @var float
     */
    public $maxAvgConsume;

    /**
     * @var float
     */
    public $minAvgScanRows;

    /**
     * @var float
     */
    public $maxAvgScanRows;

    /**
     * @var string
     */
    public $pagingId;

    /**
     * @var string
     */
    public $sortKey;

    /**
     * @var string
     */
    public $sortMethod;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $childDBInstanceIDs;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'DBInstanceId'         => 'DBInstanceId',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'maxRecordsPerPage'    => 'MaxRecordsPerPage',
        'pageNumbers'          => 'PageNumbers',
        'minAvgConsume'        => 'MinAvgConsume',
        'maxAvgConsume'        => 'MaxAvgConsume',
        'minAvgScanRows'       => 'MinAvgScanRows',
        'maxAvgScanRows'       => 'MaxAvgScanRows',
        'pagingId'             => 'PagingId',
        'sortKey'              => 'SortKey',
        'sortMethod'           => 'SortMethod',
        'sqlType'              => 'SqlType',
        'jobId'                => 'JobId',
        'childDBInstanceIDs'   => 'ChildDBInstanceIDs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->minAvgConsume) {
            $res['MinAvgConsume'] = $this->minAvgConsume;
        }
        if (null !== $this->maxAvgConsume) {
            $res['MaxAvgConsume'] = $this->maxAvgConsume;
        }
        if (null !== $this->minAvgScanRows) {
            $res['MinAvgScanRows'] = $this->minAvgScanRows;
        }
        if (null !== $this->maxAvgScanRows) {
            $res['MaxAvgScanRows'] = $this->maxAvgScanRows;
        }
        if (null !== $this->pagingId) {
            $res['PagingId'] = $this->pagingId;
        }
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortMethod) {
            $res['SortMethod'] = $this->sortMethod;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->childDBInstanceIDs) {
            $res['ChildDBInstanceIDs'] = $this->childDBInstanceIDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['MinAvgConsume'])) {
            $model->minAvgConsume = $map['MinAvgConsume'];
        }
        if (isset($map['MaxAvgConsume'])) {
            $model->maxAvgConsume = $map['MaxAvgConsume'];
        }
        if (isset($map['MinAvgScanRows'])) {
            $model->minAvgScanRows = $map['MinAvgScanRows'];
        }
        if (isset($map['MaxAvgScanRows'])) {
            $model->maxAvgScanRows = $map['MaxAvgScanRows'];
        }
        if (isset($map['PagingId'])) {
            $model->pagingId = $map['PagingId'];
        }
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortMethod'])) {
            $model->sortMethod = $map['SortMethod'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ChildDBInstanceIDs'])) {
            $model->childDBInstanceIDs = $map['ChildDBInstanceIDs'];
        }

        return $model;
    }
}
