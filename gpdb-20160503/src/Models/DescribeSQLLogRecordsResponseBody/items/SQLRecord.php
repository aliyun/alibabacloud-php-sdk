<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model
{
    /**
     * @example testacc
     *
     * @var string
     */
    public $accountName;

    /**
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2018-07-09T08:50:20Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example 122
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @example update test.zxb set id=0 limit 1
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example 723
     *
     * @var string
     */
    public $threadID;

    /**
     * @example 130
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
