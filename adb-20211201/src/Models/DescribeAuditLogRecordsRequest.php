<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogRecordsRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * > You can call the [DescribeDBClusters](~~454250~~) operation to query the IDs of all AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters within a region.
     * @example amv-t4nj8619bz2w3****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database on which the SQL statement was executed.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * >
     *
     *   The end time must be later than the start time.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 2022-08-12T17:08Z
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
     * @description The order in which to sort the retrieved entries by field. Specify this parameter in the JSON format. The value is an ordered array that uses the order of the input array and contains `Field` and `Type`. Example: `[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]`. Fields:
     *
     *   `Field`: the field that is used to sort the retrieved entries. Valid values:
     *
     *   **HostAddress**: the IP address of the client that is used to connect to the database.
     *   **UserName**: the username.
     *   **ExecutionStartTime**: the start time of the query execution.
     *   **QueryTime**: the amount of time consumed to execute the SQL statement.
     *   **PeakMemoryUsage**: the maximum memory usage when the SQL statement is executed.
     *   **ScanRows**: the number of rows to be scanned from a data source in the task.
     *   **ScanSize**: the amount of data to be scanned.
     *   **ScanTime**: the total amount of time consumed to scan data.
     *   **PlanningTime**: the amount of time consumed to generate execution plans.
     *   **WallTime**: the accumulated CPU Time values of all operators in the query on each node.
     *   **ProcessID**: the process ID.
     *
     *   `Type`: the sorting type of the retrieved entries. Valid values:
     *
     *   **Desc**: descending order.
     *   **Asc**: ascending order.
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
     * @description The page number. Pages start from page 1. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **10** (default)
     *   **30**
     *   **50**
     *   **100**
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A reserved parameter.
     *
     * @var string
     */
    public $proxyUser;

    /**
     * @description The keyword based on which audit logs are queried. You can set this parameter to a value of the STRING type.
     *
     * @example adb
     *
     * @var string
     */
    public $queryKeyword;

    /**
     * @description The region ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~454314~~) operation to query the most recent region list.
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
     *   **INSERT INTO SELECT**
     *   **ALTER**
     *   **DROP**
     *   **INSERT**
     *
     * > You can query only a single type of SQL statements at a time. If you leave this parameter empty, the **SELECT** SQL statements are queried.
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * > SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried.
     * @example 2022-08-12T04:17Z
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
     * @description The username that is used to execute the SQL statement.
     *
     * @example test
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
        'proxyUser'            => 'ProxyUser',
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
        if (null !== $this->proxyUser) {
            $res['ProxyUser'] = $this->proxyUser;
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
        if (isset($map['ProxyUser'])) {
            $model->proxyUser = $map['ProxyUser'];
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
