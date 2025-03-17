<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessListRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The query ID.
     *
     * @example 1
     *
     * @var string
     */
    public $initialQueryId;

    /**
     * @description The user who executes the query statement.
     *
     * @example testuser
     *
     * @var string
     */
    public $initialUser;

    /**
     * @description The keyword of the query statement.
     *
     * @example SELECT
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The execution duration of slow SQL queries. Minimum value: 1000. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var string
     */
    public $queryDurationMs;

    /**
     * @description Specifies the columns by which the query results are sorted in descending order.
     *
     *   0: The query results are sorted by the query_duration_ms column.
     *   1: The query results are sorted by the query_duration_ms and query_start_time columns.
     *   2: The query results are sorted by the query_duration_ms, query_start_time, and user columns.
     *
     * @example id
     *
     * @var int
     */
    public $queryOrder;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'initialQueryId' => 'InitialQueryId',
        'initialUser' => 'InitialUser',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryDurationMs' => 'QueryDurationMs',
        'queryOrder' => 'QueryOrder',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->initialQueryId) {
            $res['InitialQueryId'] = $this->initialQueryId;
        }
        if (null !== $this->initialUser) {
            $res['InitialUser'] = $this->initialUser;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }
        if (null !== $this->queryOrder) {
            $res['QueryOrder'] = $this->queryOrder;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['InitialQueryId'])) {
            $model->initialQueryId = $map['InitialQueryId'];
        }
        if (isset($map['InitialUser'])) {
            $model->initialUser = $map['InitialUser'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }
        if (isset($map['QueryOrder'])) {
            $model->queryOrder = $map['QueryOrder'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
