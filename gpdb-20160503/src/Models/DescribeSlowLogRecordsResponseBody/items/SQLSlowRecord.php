<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
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
    public $queryTimes;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var int
     */
    public $parseRowCounts;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $lockTimes;
    protected $_name = [
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress'        => 'HostAddress',
        'queryTimes'         => 'QueryTimes',
        'SQLText'            => 'SQLText',
        'returnRowCounts'    => 'ReturnRowCounts',
        'parseRowCounts'     => 'ParseRowCounts',
        'DBName'             => 'DBName',
        'lockTimes'          => 'LockTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }

        return $model;
    }
}
