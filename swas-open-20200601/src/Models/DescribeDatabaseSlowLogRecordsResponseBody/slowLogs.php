<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class slowLogs extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time when the execution of the SQL statement started. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the Simple Application Server console is in the format of UTC+8.
     *
     * @example 2022-09-08T01:40:44Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description The name and IP address of the client that is connected to the database.
     *
     * @example xxx[xxx] @ [1xx.xxx.xxx.xx]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The lock duration of the SQL statement. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @description The number of rows parsed by the SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description The execution duration of the slow query. Unit: millisecond.
     *
     * @example 2001
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @description The execution duration of the slow query. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The details of the SQL statement.
     *
     * @example select sleep(2)
     *
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'DBName' => 'DBName',
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress' => 'HostAddress',
        'lockTimes' => 'LockTimes',
        'parseRowCounts' => 'ParseRowCounts',
        'queryTimeMS' => 'QueryTimeMS',
        'queryTimes' => 'QueryTimes',
        'returnRowCounts' => 'ReturnRowCounts',
        'SQLText' => 'SQLText',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
