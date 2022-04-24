<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @var int
     */
    public $maxLockTime;

    /**
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @var int
     */
    public $parseTotalRowCounts;

    /**
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @var string
     */
    public $SQLHASH;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $totalExecutionCounts;

    /**
     * @var int
     */
    public $totalExecutionTimes;

    /**
     * @var int
     */
    public $totalLockTimes;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'DBName'               => 'DBName',
        'DBNodeId'             => 'DBNodeId',
        'maxExecutionTime'     => 'MaxExecutionTime',
        'maxLockTime'          => 'MaxLockTime',
        'parseMaxRowCount'     => 'ParseMaxRowCount',
        'parseTotalRowCounts'  => 'ParseTotalRowCounts',
        'returnMaxRowCount'    => 'ReturnMaxRowCount',
        'returnTotalRowCounts' => 'ReturnTotalRowCounts',
        'SQLHASH'              => 'SQLHASH',
        'SQLText'              => 'SQLText',
        'totalExecutionCounts' => 'TotalExecutionCounts',
        'totalExecutionTimes'  => 'TotalExecutionTimes',
        'totalLockTimes'       => 'TotalLockTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->totalExecutionCounts) {
            $res['TotalExecutionCounts'] = $this->totalExecutionCounts;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['TotalExecutionCounts'])) {
            $model->totalExecutionCounts = $map['TotalExecutionCounts'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }

        return $model;
    }
}
