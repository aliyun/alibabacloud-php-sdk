<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogRecordsRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example am-t4nj8619bz2w3****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database on which you want to execute the SQL statement.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * > - The maximum time range that can be specified is 24 hours.
     * @example 2022-01-23T22:18Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The IP address and port number of the client that is used to execute the SQL statement.
     *
     * @example 100.104.XX.XX:43908
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The order in which specified fields are sorted. Specify this parameter as an ordered JSON array that consists of the Field and Type fields.
     *
     *   Field specifies the field that is used to sort the retrieved entries. Valid values:
     *
     *   HostAddress: the IP address of the client that is used to connect to the database.
     *   Succeed: specifies whether the SQL statement is successfully executed.
     *   TotalTime: the total amount of time that is consumed to execute the SQL statement.
     *   DBName: the name of the database on which the SQL statement is executed.
     *   SQLType: the type of the SQL statement.
     *   User: the username that is used to execute the SQL statement.
     *   ExecuteTime: the time to start executing the SQL statement.
     *
     *   Type specifies the sorting order. Valid values:
     *
     *   Desc: descending order.
     *   Asc: ascending order.
     *
     * @example [{"Field":"ExecuteTime","Type":"Desc"},{"Field":"HostAddress","Type":"Asc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @description The sorting order of the retrieved entries. Valid values:
     *
     *   **asc**: sorts the retrieved entries by time in ascending order.
     *   **desc**: sorts the retrieved entries by time in descending order.
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
     * @description The number of the page to return. The value is an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   **10**
     *   **30**
     *   **50**
     *   **100**
     *
     * > If you do not specify this parameter, the value 10 is used.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keywords that are included in the SQL statement to query.
     *
     * @example adb
     *
     * @var string
     */
    public $queryKeyword;

    /**
     * @description The region ID of the cluster.
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
     * @description The type of the SQL statement. Valid values:
     *
     *   **DELETE**
     *   **SELECT**
     *   **UPDATE**
     *   **INSERT_INTO_SELECT**
     *   **ALTER**
     *   **DROP**
     *   **CREATE**
     *
     * > You can query only a single type of SQL statements at a time. If you leave this parameter empty, the **SELECT** statements are queried.
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * > SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried.
     * @example 2022-01-23T02:18Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Specifies whether the execution of the SQL statement succeeds. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $succeed;

    /**
     * @description The name of the user who executed the SQL statement.
     *
     * @example test_user
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'DBName'               => 'DBName',
        'endTime'              => 'EndTime',
        'hostAddress'          => 'HostAddress',
        'order'                => 'Order',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'queryKeyword'         => 'QueryKeyword',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sqlType'              => 'SqlType',
        'startTime'            => 'StartTime',
        'succeed'              => 'Succeed',
        'user'                 => 'User',
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
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->queryKeyword) {
            $res['QueryKeyword'] = $this->queryKeyword;
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
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditLogRecordsRequest
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
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['QueryKeyword'])) {
            $model->queryKeyword = $map['QueryKeyword'];
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
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
