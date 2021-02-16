<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogRecordsRequest extends Model
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
     * @var string
     */
    public $queryKeyword;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $sortKey;

    /**
     * @var string
     */
    public $sortMethod;

    /**
     * @var int
     */
    public $minConsume;

    /**
     * @var int
     */
    public $maxConsume;

    /**
     * @var int
     */
    public $minScanRows;

    /**
     * @var int
     */
    public $maxScanRows;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $threadID;

    /**
     * @var string
     */
    public $pagingID;

    /**
     * @var string
     */
    public $logicalOperator;

    /**
     * @var string
     */
    public $childDBInstanceIDs;

    /**
     * @var string
     */
    public $jobId;
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
        'queryKeyword'         => 'QueryKeyword',
        'hostAddress'          => 'HostAddress',
        'DBName'               => 'DBName',
        'tableName'            => 'TableName',
        'sortKey'              => 'SortKey',
        'sortMethod'           => 'SortMethod',
        'minConsume'           => 'MinConsume',
        'maxConsume'           => 'MaxConsume',
        'minScanRows'          => 'MinScanRows',
        'maxScanRows'          => 'MaxScanRows',
        'state'                => 'State',
        'sqlType'              => 'SqlType',
        'accountName'          => 'AccountName',
        'threadID'             => 'ThreadID',
        'pagingID'             => 'PagingID',
        'logicalOperator'      => 'LogicalOperator',
        'childDBInstanceIDs'   => 'ChildDBInstanceIDs',
        'jobId'                => 'JobId',
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
        if (null !== $this->queryKeyword) {
            $res['QueryKeyword'] = $this->queryKeyword;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortMethod) {
            $res['SortMethod'] = $this->sortMethod;
        }
        if (null !== $this->minConsume) {
            $res['MinConsume'] = $this->minConsume;
        }
        if (null !== $this->maxConsume) {
            $res['MaxConsume'] = $this->maxConsume;
        }
        if (null !== $this->minScanRows) {
            $res['MinScanRows'] = $this->minScanRows;
        }
        if (null !== $this->maxScanRows) {
            $res['MaxScanRows'] = $this->maxScanRows;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->pagingID) {
            $res['PagingID'] = $this->pagingID;
        }
        if (null !== $this->logicalOperator) {
            $res['LogicalOperator'] = $this->logicalOperator;
        }
        if (null !== $this->childDBInstanceIDs) {
            $res['ChildDBInstanceIDs'] = $this->childDBInstanceIDs;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogRecordsRequest
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
        if (isset($map['QueryKeyword'])) {
            $model->queryKeyword = $map['QueryKeyword'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortMethod'])) {
            $model->sortMethod = $map['SortMethod'];
        }
        if (isset($map['MinConsume'])) {
            $model->minConsume = $map['MinConsume'];
        }
        if (isset($map['MaxConsume'])) {
            $model->maxConsume = $map['MaxConsume'];
        }
        if (isset($map['MinScanRows'])) {
            $model->minScanRows = $map['MinScanRows'];
        }
        if (isset($map['MaxScanRows'])) {
            $model->maxScanRows = $map['MaxScanRows'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['PagingID'])) {
            $model->pagingID = $map['PagingID'];
        }
        if (isset($map['LogicalOperator'])) {
            $model->logicalOperator = $map['LogicalOperator'];
        }
        if (isset($map['ChildDBInstanceIDs'])) {
            $model->childDBInstanceIDs = $map['ChildDBInstanceIDs'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
