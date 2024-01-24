<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsSlowSqlsRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds***************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The start time of the SQL query. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1568267711000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The SQL execution time. Unit: ms.
     *
     * @example 1000
     *
     * @var int
     */
    public $exeTime;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The end time of the SQL query. Specify the time in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1568269711000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'exeTime'        => 'ExeTime',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->exeTime) {
            $res['ExeTime'] = $this->exeTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsSlowSqlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExeTime'])) {
            $model->exeTime = $map['ExeTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
