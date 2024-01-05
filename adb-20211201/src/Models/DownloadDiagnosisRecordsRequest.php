<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DownloadDiagnosisRecordsRequest extends Model
{
    /**
     * @description The source IP address.
     *
     * >  You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource groups, database names, usernames, and source IP addresses of the SQL statements that meet a query condition.
     * @example 106.11.XX.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters within a region.
     * @example amv-bp1q8bu9a****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database on which the SQL statements are executed.
     *
     * >  You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource groups, database names, usernames, and source IP addresses of the SQL statements that meet a query condition.
     * @example adb_demo
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >
     *
     *   The end time must be later than the start time.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 1662450730000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The query keyword of the SQL statements.
     *
     * @example select
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language. Valid values:
     *
     *   **zh**: simplified Chinese.
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
     * @example 88000000
     *
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @description The maximum scan size of the SQL statements. Unit: bytes.
     *
     * @example 64424509440
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @description The minimum peak memory of the SQL statements. Unit: bytes.
     *
     * @example 88000000
     *
     * @var int
     */
    public $minPeakMemory;

    /**
     * @description The minimum scan size of the SQL statements. Unit: bytes.
     *
     * @example 1073741824
     *
     * @var int
     */
    public $minScanSize;

    /**
     * @description The query condition for SQL statements, which can contain the `Type`, `Value`, `Min`, and `Max` fields. Specify the condition in the JSON format. `Type` specifies the query dimension. Valid values for Type: `maxCost`, `status`, and `cost`. `Value`, `Min`, or `Max` specifies the query range for the dimension. Valid values:
     *
     *   `{"Type":"maxCost","Value":"100"}`: queries the top 100 most time-consuming SQL statements. Set `Value` to 100.
     *   `{"Type":"status","Value":"finished"}`: queries the executed SQL statements. You can set `Value` to `running` to query the SQL statements that are being executed. You can also set Value to `failed` to query the SQL statements that failed to be executed.
     *   `{"Type":"cost","Min":"10","Max":"200"}`: queries the SQL statements whose execution duration is in the range of 10 to 200 milliseconds. You can also specify custom values for the Min and Max fields.
     *
     * @example {"Type":"status","Value":"finished"}
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group to which the SQL statements belong.
     *
     * >  You can call the [DescribeDiagnosisDimensions](~~308210~~) operation to query the resource groups, database names, usernames, and source IP addresses of the SQL statements that meet a query condition.
     * @example user_default
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The beginning of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  You can query data only within the last 14 days.
     * @example 1662364330000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The username that is used to execute the SQL statements.
     *
     * >  You can call the [DescribeDiagnosisDimensions](~~~~) operation to query the resource groups, database names, usernames, and source IP addresses of the SQL statements that meet a query condition.
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
     * @return DownloadDiagnosisRecordsRequest
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
