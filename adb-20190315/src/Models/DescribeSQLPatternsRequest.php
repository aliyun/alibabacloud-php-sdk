<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLPatternsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the information about all AnalyticDB for MySQL clusters in a region, including cluster IDs.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * > The end time must be later than the start time.
     * @example 2021-09-30T00:15:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The keyword that is used for the query.
     *
     * @example SELECT
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
     * @description The order by which to sort query results. Specify the parameter value in the JSON format. Example: `[{"Field":"AverageQueryTime","Type":"Asc"}]`.
     *
     *   `Field` specifies the field by which to sort the query results. Valid values:
     *
     *   `PatternCreationTime`: the earliest commit time of the SQL pattern within the time range to query.
     *   `AverageQueryTime`: the average total amount of time consumed by the SQL pattern within the time range to query.
     *   `MaxQueryTime`: the maximum total amount of time consumed by the SQL pattern within the time range to query.
     *   `AverageExecutionTime`: the average execution duration of the SQL pattern within the time range to query.
     *   `MaxExecutionTime`: the maximum execution duration of the SQL pattern within the time range to query.
     *   `AveragePeakMemory`: the average peak memory usage of the SQL pattern within the time range to query.
     *   `MaxPeakMemory`: the maximum peak memory usage of the SQL pattern within the time range to query.
     *   `AverageScanSize`: the average amount of data scanned based on the SQL pattern within the time range to query.
     *   `MaxScanSize`: the maximum amount of data scanned based on the SQL pattern within the time range to query.
     *   `QueryCount`: the number of queries performed in association with the SQL pattern within the time range to query.
     *   `FailedCount`: the number of failed queries performed in association with the SQL pattern within the time range to query.
     *
     *   `Type` specifies the sorting order. Valid values (case-insensitive):
     *
     *   `Asc`: ascending order.
     *   `Desc`: descending order.
     *
     * @example [{"Field":"AverageQueryTime","Type":"Asc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Pages start from page 1.
     *
     * > If you do not specify this parameter, the value **1** is used.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * > If you do not specify this parameter, the value **30** is used.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

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
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * >
     *
     *   Only data within the last 14 days can be queried. For example, if the current time is 2021-11-22T12:00:00Z, you can query SQL patterns at a point in time as early as 2021-11-09T12:00:00Z.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 2021-09-30T00:10:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'keyword'     => 'Keyword',
        'lang'        => 'Lang',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLPatternsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
