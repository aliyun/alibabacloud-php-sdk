<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class slowLogs extends Model
{
    /**
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2022-09-08T01:40:44Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @example xxx[xxx] @ [1xx.xxx.xxx.xx]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @example 1
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @example 2001
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @example 2
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @example select sleep(2)
     *
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'DBName'             => 'DBName',
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
