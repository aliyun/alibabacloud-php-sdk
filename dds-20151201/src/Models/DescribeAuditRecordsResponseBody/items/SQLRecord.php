<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody\items;

use AlibabaCloud\Dara\Model;

class SQLRecord extends Model
{
    /**
     * @var string
     */
    public $accountName;

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
    public $hostAddress;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $syntax;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $threadID;

    /**
     * @var int
     */
    public $totalExecutionTimes;
    protected $_name = [
        'accountName' => 'AccountName',
        'DBName' => 'DBName',
        'executeTime' => 'ExecuteTime',
        'hostAddress' => 'HostAddress',
        'returnRowCounts' => 'ReturnRowCounts',
        'syntax' => 'Syntax',
        'tableName' => 'TableName',
        'threadID' => 'ThreadID',
        'totalExecutionTimes' => 'TotalExecutionTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
