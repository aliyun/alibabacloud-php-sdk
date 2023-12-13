<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditRecordsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * > If you set this parameter to the ID of a sharded cluster instance, you must also specify the **NodeId** parameter.
     * @example dds-bp12c5b040dc****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database to be queried. By default, all databases are queried.
     *
     * @example database****
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > The end time must be within 24 hours from the start time. Otherwise, the query fails.
     * @example 2019-03-13T13:11:14Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The form of the audit log that the operation returns. Default value: File. Valid values:
     *
     *   **File** triggers the generation of audit logs. If this parameter is set to File, only common parameters are returned.
     *   **Stream**: returns data streams.
     *
     * @example Stream
     *
     * @var string
     */
    public $form;

    /**
     * @description The ID of the mongos node or shard node whose parameter modification records you want to query in the instance. If the instance is a sharded cluster instance, you must specify this parameter.
     *
     * > This parameter is valid only when you specify the **DBInstanceId** parameter to the ID of a sharded cluster instance.
     * @example d-bp128a003436****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The order of time in which the log entries to return are sorted. Valid values:
     *
     *   **asc**: The log entries are sorted by time in ascending order.
     *   **desc**: The log entries are sorted by time in descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Pages start from page 1. Valid values: any non-zero positive integer. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return per page. Default value: 30. Valid values: **30**, **50**, and **100**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keywords that are used for queries. Separate multiple keywords with spaces. The maximum number of keywords is 10.
     *
     * @example slow
     *
     * @var string
     */
    public $queryKeywords;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2019-03-13T12:11:14Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The account of the database. If you do not specify this parameter, this operation returns records of all accounts.
     *
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'database'             => 'Database',
        'endTime'              => 'EndTime',
        'form'                 => 'Form',
        'nodeId'               => 'NodeId',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'queryKeywords'        => 'QueryKeywords',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
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
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
