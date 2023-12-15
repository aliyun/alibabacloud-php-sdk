<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogRecordsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database. You can enter only one database name. If you specify this parameter, this operation returns the logs that are generated only for the specified database. If you do not specify this parameter, this operation returns the logs that are generated for all databases on the instance.
     *
     * @example Database
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. The time span between the start time and the end time must be less than 15 days. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2011-06-11T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to generate an SQL audit log file or return SQL audit log entries. Valid values:
     *
     *   **File**: If you set this parameter to File, this operation generates an SQL audit log file and returns only common response parameters. After you call this operation, you must call the [DescribeSQLLogFiles](~~26295~~) operation to obtain the download URL of the SQL audit log file.
     *   **Stream** (default): If you set this parameter to Stream, this operation returns SQL audit log entries.
     *
     * > If you set this parameter to **File**, only ApsaraDB RDS for MySQL instances that use local disks and ApsaraDB RDS for SQL Server instances are supported, and a maximum of 1 million log entries are returned.
     * @example Stream
     *
     * @var string
     */
    public $form;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any non-zero positive integer.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30** to **100**. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keyword that is used for the query.
     *
     *   When you call this operation and set the **Form** parameter to **File** to generate an audit file, you cannot filter log entries by keyword.
     *   You can specify up to 10 keywords. The keywords are evaluated by using the **AND** operator. Separate multiple keywords with spaces.
     *   If a field name in the specified SQL statement is enclosed in backquotes (\`) and you want to use the field name as a keyword, you must enter the backquotes (\`) as part of the field name. For example, if the field name is \`id\`, enter \`id\` instead of id.
     *
     * >  After you enter a keyword, the system matches the keyword based on the **Database**, **User**, and **QueryKeywords** parameters. The parameters are evaluated by using the **OR** operator.
     * @example table_name
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
     * @description The unique ID of the SQL statement.
     *
     * @example 25623548
     *
     * @var int
     */
    public $SQLId;

    /**
     * @description The beginning of the time range to query. You can query data in the last 15 days before the current date. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2011-06-01T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The username of the account. You can enter only one username. If you specify this parameter, this operation returns the logs that are generated only for the specified account. If you do not specify this parameter, this operation returns the logs that are generated for all accounts on the instance.
     *
     * @example user
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'database'             => 'Database',
        'endTime'              => 'EndTime',
        'form'                 => 'Form',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'queryKeywords'        => 'QueryKeywords',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'SQLId'                => 'SQLId',
        'startTime'            => 'StartTime',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
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
     * @return DescribeSQLLogRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
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
