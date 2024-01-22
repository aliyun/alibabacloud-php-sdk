<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
{
    /**
     * @description The username of the database account that performs the operation.
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the database.
     *
     * @example mongodbtest
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The number of documents that are scanned during the operation.
     *
     * @example 1000000
     *
     * @var int
     */
    public $docsExamined;

    /**
     * @description The start time of the operation. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-25T 01:41:28Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description The host IP address that is used to connect to the database.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The number of rows involved in index scans.
     *
     * @example 0
     *
     * @var int
     */
    public $keysExamined;

    /**
     * @description The execution time of the statement. Unit: milliseconds.
     *
     * @example 600
     *
     * @var string
     */
    public $queryTimes;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The SQL statement that is executed during the slow operation.
     *
     * @example {\"op\":\"query\",\"ns\":\"mongodbtest.customer\",\"query\":{\"find\":\"customer\",\"filter\":{\"name\":\"jack\"}}}
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The name of the collection.
     *
     * @example C1
     *
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
