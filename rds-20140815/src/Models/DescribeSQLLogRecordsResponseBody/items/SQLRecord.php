<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model
{
    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $threadID;

    /**
     * @var int
     */
    public $totalExecutionTimes;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'hostAddress'         => 'HostAddress',
        'SQLText'             => 'SQLText',
        'returnRowCounts'     => 'ReturnRowCounts',
        'DBName'              => 'DBName',
        'executeTime'         => 'ExecuteTime',
        'threadID'            => 'ThreadID',
        'totalExecutionTimes' => 'TotalExecutionTimes',
        'accountName'         => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
