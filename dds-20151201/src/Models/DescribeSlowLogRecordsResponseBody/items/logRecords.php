<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
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
     * @var int
     */
    public $docsExamined;

    /**
     * @var string
     */
    public $executionStartTime;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var int
     */
    public $keysExamined;

    /**
     * @var string
     */
    public $queryTimes;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'accountName'        => 'AccountName',
        'DBName'             => 'DBName',
        'docsExamined'       => 'DocsExamined',
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress'        => 'HostAddress',
        'keysExamined'       => 'KeysExamined',
        'queryTimes'         => 'QueryTimes',
        'returnRowCounts'    => 'ReturnRowCounts',
        'SQLText'            => 'SQLText',
        'tableName'          => 'TableName',
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
        if (null !== $this->docsExamined) {
            $res['DocsExamined'] = $this->docsExamined;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->keysExamined) {
            $res['KeysExamined'] = $this->keysExamined;
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logRecords
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
        if (isset($map['DocsExamined'])) {
            $model->docsExamined = $map['DocsExamined'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['KeysExamined'])) {
            $model->keysExamined = $map['KeysExamined'];
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
