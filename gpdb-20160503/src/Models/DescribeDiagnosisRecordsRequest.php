<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisRecordsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The end of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC. The end time must be later than the start time.
     *
     * @example 2022-05-07T07:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The keyword of the SQL statement.
     *
     * @example SELECT
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The order of fields in the console. You do not need to specify this parameter.
     *
     * @example null
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
     * @description The number of entries to return on each page. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The filter condition on queries. Specify the value in the JSON format. Valid values:
     *
     *   `{"Type":"maxCost", "Value":"100"}`: filters the top 100 queries that are the most time-consuming.
     *
     *   `{"Type":"status","Value":"finished"}`: filters completed queries.
     *
     *   `{"Type":"status","Value":"running"}`: filters running queries.
     *
     *   `{"Type":"cost","Min":"30","Max":"50"}`: filters the queries that consume 30 milliseconds or more and less than 50 milliseconds. You can customize a filter condition by setting **Min** and **Max**.
     *
     *   If only **Min** is specified, the queries that consume a period of time that is greater than or equal to the Min value are filtered.
     *   If only **Max** is specified, the queries that consume a period of time that is less than the Max value are filtered.
     *   If both **Min** and **Max** are specified, the queries that consume a period of time that is greater than or equal to the **Min** value and less than the **Max** value are filtered.
     *
     * @example { "Type":"maxCost", "Value":"100" }
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @description The beginning of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2022-05-07T06:59Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the database account.
     *
     * @example adbpguser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'database'       => 'Database',
        'endTime'        => 'EndTime',
        'keyword'        => 'Keyword',
        'order'          => 'Order',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'queryCondition' => 'QueryCondition',
        'startTime'      => 'StartTime',
        'user'           => 'User',
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
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
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
     * @return DescribeDiagnosisRecordsRequest
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
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
