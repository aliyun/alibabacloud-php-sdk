<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model
{
    /**
     * @description The username of the account that is recorded in the SQL audit log entry.
     *
     * @example accounttest
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time at which the SQL statement was executed. The time follows the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2011-06-11T15:00:23Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP address of the client that is connected to the instance.
     *
     * @example 192.168.0.121
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The number of SQL audit log entries that are returned.
     *
     * @example 30
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The SQL statement that is executed in the query.
     *
     * @example update test.zxb set id=0 limit 1
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The ID of the thread.
     *
     * @example 1025865428
     *
     * @var string
     */
    public $threadID;

    /**
     * @description The execution duration of the SQL statement. Unit: microseconds.
     *
     * @example 600
     *
     * @var int
     */
    public $totalExecutionTimes;
    protected $_name = [
        'accountName'         => 'AccountName',
        'DBName'              => 'DBName',
        'executeTime'         => 'ExecuteTime',
        'hostAddress'         => 'HostAddress',
        'returnRowCounts'     => 'ReturnRowCounts',
        'SQLText'             => 'SQLText',
        'threadID'            => 'ThreadID',
        'totalExecutionTimes' => 'TotalExecutionTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }

        return $model;
    }
}
