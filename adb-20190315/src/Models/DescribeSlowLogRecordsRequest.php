<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowLogRecordsRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the cluster IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a specific region.
     * @example am-bp1rqvm70uh2****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * >  The end time must be later than the start time. The specified time range must be less than seven days.
     * @example 2021-05-27T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The order in which to sort the retrieved entries by field. Specify this parameter in the JSON format. The value is an ordered array that uses the order of the input array and contains `Field` and `Type`. Example: `[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]`.
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
     *   **ProcessID**: the ID of the process.
     *
     *   `Type`: the sorting type of the retrieved entries. Valid values:
     *
     *   **Desc**: descending order
     *   **Asc**: ascending order
     *
     * @example [{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the process.
     *
     * @example 2021052716044317201616624903453******
     *
     * @var string
     */
    public $processID;

    /**
     * @description The range conditions used to filter specified fields, including `Max` and `Min`. Specify this parameter in the JSON format. Example: `[{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]`.
     *
     * `Field`: the field to be filtered. Valid values:
     *
     *   **ScanSize**: the amount of data to be scanned. Unit: KB.
     *   **QueryTime**: the amount of time consumed to execute the statement. Unit: milliseconds.
     *   **PeakMemoryUsage**: the maximum memory usage when the SQL statement is executed. Unit: KB.
     *
     * >  `Min` indicates the minimum value of the query range (left operand). `Max` indicates the maximum value of the query range (right operand). Max and Min are both of the String type.
     * @example [{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]
     *
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * @example 2021-05-20T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the query. Valid values:
     *
     *   **Successed**: successful
     *   **Failed**: failed
     *
     * @example Successed
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'DBName'               => 'DBName',
        'endTime'              => 'EndTime',
        'order'                => 'Order',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'processID'            => 'ProcessID',
        'range'                => 'Range',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'state'                => 'State',
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
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
