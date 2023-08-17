<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSqlPatternRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the details of all AnalyticDB for MySQL clusters within a specified region, including cluster IDs.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The order by which to sort query results. Specify the parameter value in the JSON string format. Example: `[{"Field":"Pattern","Type":"Asc"}]`.
     *
     *   `Field` indicates the field that is used to sort the retrieved entries. Valid values:
     *
     *   `Pattern` : the SQL pattern.
     *   `AccessIP`: the IP address of the client.
     *   `User`: the username.
     *   `QueryCount`: the total number of queries.
     *   `AvgPeakMemory`: the average peak memory. Unit: KB.
     *   `MaxPeakMemory`: the maximum peak memory. Unit: KB.
     *   `AvgCpuTime`: the average CPU time. Unit: milliseconds.
     *   `MaxCpuTime`: the maximum CPU time. Unit: milliseconds.
     *   `AvgStageCount`: the average number of stages.
     *   `MaxStageCount`: the maximum number of stages.
     *   `AvgTaskCount`: the average number of tasks.
     *   `MaxTaskCount`: the maximum number of tasks.
     *   `AvgScanSize`: the average scan size. Unit: KB.
     *   `MaxScanSize`: the maximum scan size. Unit: KB.
     *
     *   `Type` indicates the sorting method. Valid values:
     *
     *   `Asc`: ascending order.
     *   `Desc`: descending order.
     *
     * > *   If this parameter is not specified, query results are sorted in ascending order of `Pattern`.
     * > *   If you need to sort query results by `AccessIP`, you must set the `Type` parameter to `accessip`. If you need to sort query results by `User`, you must leave the `Type` parameter empty or set it to `user`.
     * @example [{"Field":"Pattern","Type":"Asc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. The value must be a positive integer. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the regions and zones supported by AnalyticDB for MySQL, including region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The keyword contained in the SQL pattern.
     *
     * >  If this parameter is not specified, all SQL patterns within an AnalyticDB for MySQL cluster for a date specified by `StartTime` are returned.
     * @example SELECT
     *
     * @var string
     */
    public $sqlPattern;

    /**
     * @description The date to query. Specify the time in the *yyyy-MM-dd* format. The time must be in UTC.
     *
     * >  Only data for the last 30 days can be queried.
     * @example 2021-08-30
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The dimension by which to aggregate the SQL pattern. Valid values:
     *
     *   `user`: the user.
     *   `accessip`: the IP address of the client.
     *
     * >  If this parameter is not specified, the SQL pattern is aggregated by `user`.
     * @example user
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'sqlPattern'  => 'SqlPattern',
        'startTime'   => 'StartTime',
        'type'        => 'Type',
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
        if (null !== $this->sqlPattern) {
            $res['SqlPattern'] = $this->sqlPattern;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSqlPatternRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['SqlPattern'])) {
            $model->sqlPattern = $map['SqlPattern'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
