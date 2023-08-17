<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeTableAccessCountRequest extends Model
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
     * @description The order by which to sort query results. Specify the parameter value in the JSON string format. Example: `[{"Field":"TableSchema","Type":"Asc"}]`.
     *
     *   `Field` indicates the field that is used to sort the retrieved entries. Valid values:
     *
     *   `TableSchema`: the name of the database to which the table belongs.
     *   `TableName`: the name of the table.
     *   `AccessCount`: the number of accesses to the table.
     *
     *   `Type` indicates the sorting method. Valid values:
     *
     *   `Asc`: ascending order.
     *   `Desc`: descending order.
     *
     * >  If this parameter is not specified, query results are sorted in ascending order of the database to which a specific table belongs.
     * @example [{"Field":"TableSchema","Type":"Asc"}]
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
     * @description The date to query. Specify the time in the *yyyy-MM-dd* format. The time must be in UTC.
     *
     * >  Only data for the last 30 days can be queried.
     * @example 2021-08-30
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the specific table.
     *
     * >  If this parameter is not specified, the number of accesses to all tables within the specified cluster for a specified date is returned.
     * @example CUSTOMER
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
        'tableName'   => 'TableName',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTableAccessCountRequest
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
