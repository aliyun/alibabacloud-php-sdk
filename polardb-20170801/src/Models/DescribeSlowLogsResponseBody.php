<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSlowLogsResponseBody extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end date of the query.
     *
     * @example 2021-05-30Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the database engine.
     *
     * @example polardb_mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description Details about slow query logs.
     *
     * @var items
     */
    public $items;

    /**
     * @description The number of the returned page.
     *
     * @example 3
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of SQL statements that are returned on the current page.
     *
     * @example 6
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 2553A660-E4EB-4AF4-A402-8AFF70A49143
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start date of the query.
     *
     * @example 2021-05-01Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The total number of returned entries.
     *
     * @example 5
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'endTime'          => 'EndTime',
        'engine'           => 'Engine',
        'items'            => 'Items',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'requestId'        => 'RequestId',
        'startTime'        => 'StartTime',
        'totalRecordCount' => 'TotalRecordCount',
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogsResponseBody
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
