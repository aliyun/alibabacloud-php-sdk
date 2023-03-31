<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model
{
    /**
     * @description The account of the database.
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the database.
     *
     * @example test123
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time when the statement was executed. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-11T03:30:27Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP addresses of the client.
     *
     * @example 11.xxx.xxx.xxx
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The number of SQL audit log entries that are returned.
     *
     * @example 2
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The statement that was executed.
     *
     * @example { \"atype\" : \"createCollection\", \"param\" : { \"ns\" : \"123.test1\" }, \"result\": \"OK\" }
     *
     * @var string
     */
    public $syntax;

    /**
     * @description The name of the collection.
     *
     * @example C1
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the thread.
     *
     * @example 140682188297984
     *
     * @var string
     */
    public $threadID;

    /**
     * @description The execution time of the statement. Unit: microseconds.
     *
     * @example 700
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
        'syntax'              => 'Syntax',
        'tableName'           => 'TableName',
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
        if (null !== $this->syntax) {
            $res['Syntax'] = $this->syntax;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Syntax'])) {
            $model->syntax = $map['Syntax'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
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
