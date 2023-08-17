<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisRecordsRequest extends Model
{
    /**
     * @description The source IP address.
     *
     * > You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource group, database name, username, and source IP address of the SQL statements to be queried.
     * @example 59.82.xx.xx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the information about all AnalyticDB for MySQL clusters within a region, including cluster IDs.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The database on which the SQL statements are executed.
     *
     * > You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource group, database name, username, and source IP address of the SQL statements to be queried.
     * @example adb_demo
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >
     *
     *   The end time must be later than the start time.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 1633017540000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The keyword for the query.
     *
     * @example select
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language of file titles and error messages. Valid values:
     *
     *   **zh** (default): simplified Chinese.
     *   **en**: English.
     *   **ja**: Japanese.
     *   **zh-tw**: traditional Chinese.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The maximum peak memory of the SQL statements. Unit: bytes.
     *
     * @example 89000000
     *
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @description The maximum scan size of the SQL statements. Unit: bytes.
     *
     * @example 104428198
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @description The minimum peak memory of the SQL statements. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $minPeakMemory;

    /**
     * @description The minimum scan size of the SQL statements. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $minScanSize;

    /**
     * @description The order in which to sort the retrieved SQL statements by field. Specify this value in the JSON format. The value is an ordered array that uses the order of the input array and contains the `Field` and `Type` fields. Example: `[{"Field":"StartTime", "Type": "desc" }]`. Fields:
     *
     *   `Field` specifies the field that is used to sort the retrieved SQL statements. Valid values:
     *
     *   `StartTime`: the start time of the execution.
     *   `Status`: the execution state.
     *   `UserName`: the username.
     *   `Cost`: the execution duration.
     *   `PeakMemory`: the peak memory.
     *   `ScanSize`: the amount of data to be scanned.
     *   `Database`: the name of the database.
     *   `ClientIp`: the source IP address.
     *   `ResourceGroup`: the name of the resource group.
     *   `QueueTime`: the amount of time that is consumed for queuing.
     *   `OutputRows`: the number of output rows.
     *   `OutputDataSize`: the amount of output data.
     *   `ResourceCostRank`: the execution duration rank of operators that are used in the SQL statements. This field takes effect only when `QueryCondition` is set to `{"Type":"status","Value":"running"}`.
     *
     *   `Type` specifies the sorting order. Valid values (case-insensitive):
     *
     *   `Desc`: descending order.
     *   `Asc`: ascending order.
     *
     * @example [{"Field":"StartTime", "Type": "desc" }]
     *
     * @var string
     */
    public $order;

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
     * @description The ID of the SQL pattern.[](~~321868~~)
     *
     * @example 5575924945138******
     *
     * @var string
     */
    public $patternId;

    /**
     * @description The query condition for SQL statements, which can contain the `Type`, `Value`, and `Min` or `Max` fields. Specify the condition in the JSON format. `Type` specifies the query dimension. Valid values for Type: `maxCost`, `status`, and `cost`. `Value`, `Min`, or `Max` specifies the query range for the dimension. Valid values:
     *
     *   `{"Type":"maxCost","Value":"100"}`: queries the top 100 most time-consuming SQL statements. Set `Value` to 100.
     *   `{"Type":"status","Value":"finished"}`: queries executed SQL statements. You can set `Value` to `running` to query SQL statements that are being executed. You can also set Value to `failed` to query SQL statements that failed to be executed.
     *   `{"Type":"cost","Min":"10","Max":"200"}`: queries SQL statements whose execution durations are in the range of 10 to 200 milliseconds. You can also customize the maximum and minimum execution durations.
     *
     * @example {"Type":"status","Value":"finished"}
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @description The region ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group to which the SQL statements belong.
     *
     * > You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource group, database name, username, and source IP address of the SQL statements to be queried.
     * @example user_default
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The beginning of the time range to query. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * > Only data within the last 14 days can be queried.
     * @example 1632931200000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The username that is used to execute the SQL statements.
     *
     * > You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource group, database name, username, and source IP address of the SQL statements to be queried.
     * @example test_user
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientIp'       => 'ClientIp',
        'DBClusterId'    => 'DBClusterId',
        'database'       => 'Database',
        'endTime'        => 'EndTime',
        'keyword'        => 'Keyword',
        'lang'           => 'Lang',
        'maxPeakMemory'  => 'MaxPeakMemory',
        'maxScanSize'    => 'MaxScanSize',
        'minPeakMemory'  => 'MinPeakMemory',
        'minScanSize'    => 'MinScanSize',
        'order'          => 'Order',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'patternId'      => 'PatternId',
        'queryCondition' => 'QueryCondition',
        'regionId'       => 'RegionId',
        'resourceGroup'  => 'ResourceGroup',
        'startTime'      => 'StartTime',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->minPeakMemory) {
            $res['MinPeakMemory'] = $this->minPeakMemory;
        }
        if (null !== $this->minScanSize) {
            $res['MinScanSize'] = $this->minScanSize;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['MinPeakMemory'])) {
            $model->minPeakMemory = $map['MinPeakMemory'];
        }
        if (isset($map['MinScanSize'])) {
            $model->minScanSize = $map['MinScanSize'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
