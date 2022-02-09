<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBNodeId;

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
    public $lockTimes;

    /**
     * @var int
     */
    public $parseRowCounts;

    /**
     * @var int
     */
    public $queryTimeMS;

    /**
     * @var int
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
    protected $_name = [
        'DBName'             => 'DBName',
        'DBNodeId'           => 'DBNodeId',
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress'        => 'HostAddress',
        'lockTimes'          => 'LockTimes',
        'parseRowCounts'     => 'ParseRowCounts',
        'queryTimeMS'        => 'QueryTimeMS',
        'queryTimes'         => 'QueryTimes',
        'returnRowCounts'    => 'ReturnRowCounts',
        'SQLText'            => 'SQLText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
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
     * @return SQLSlowRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
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
