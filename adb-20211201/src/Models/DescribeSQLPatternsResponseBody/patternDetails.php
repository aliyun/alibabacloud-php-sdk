<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetails extends Model
{
    /**
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $accessIp;

    /**
     * @example 234.78
     *
     * @var float
     */
    public $averageExecutionTime;

    /**
     * @example 234.22
     *
     * @var float
     */
    public $averagePeakMemory;

    /**
     * @example 4
     *
     * @var float
     */
    public $averageQueryTime;

    /**
     * @example 234149.23
     *
     * @var float
     */
    public $averageScanSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $blockable;

    /**
     * @example 18
     *
     * @var int
     */
    public $failedCount;

    /**
     * @example 2142
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @example 234149
     *
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @example 2341
     *
     * @var int
     */
    public $maxQueryTime;

    /**
     * @example 32212254
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @example 2022-09-06 05:06:00
     *
     * @var string
     */
    public $patternCreationTime;

    /**
     * @example 5575924945138******
     *
     * @var string
     */
    public $patternId;

    /**
     * @example 345
     *
     * @var int
     */
    public $queryCount;

    /**
     * @example SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)
     *
     * @var string
     */
    public $SQLPattern;

    /**
     * @example tpch.orders
     *
     * @var string
     */
    public $tables;

    /**
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'             => 'AccessIp',
        'averageExecutionTime' => 'AverageExecutionTime',
        'averagePeakMemory'    => 'AveragePeakMemory',
        'averageQueryTime'     => 'AverageQueryTime',
        'averageScanSize'      => 'AverageScanSize',
        'blockable'            => 'Blockable',
        'failedCount'          => 'FailedCount',
        'maxExecutionTime'     => 'MaxExecutionTime',
        'maxPeakMemory'        => 'MaxPeakMemory',
        'maxQueryTime'         => 'MaxQueryTime',
        'maxScanSize'          => 'MaxScanSize',
        'patternCreationTime'  => 'PatternCreationTime',
        'patternId'            => 'PatternId',
        'queryCount'           => 'QueryCount',
        'SQLPattern'           => 'SQLPattern',
        'tables'               => 'Tables',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->averageExecutionTime) {
            $res['AverageExecutionTime'] = $this->averageExecutionTime;
        }
        if (null !== $this->averagePeakMemory) {
            $res['AveragePeakMemory'] = $this->averagePeakMemory;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->averageScanSize) {
            $res['AverageScanSize'] = $this->averageScanSize;
        }
        if (null !== $this->blockable) {
            $res['Blockable'] = $this->blockable;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->patternCreationTime) {
            $res['PatternCreationTime'] = $this->patternCreationTime;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patternDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['AverageExecutionTime'])) {
            $model->averageExecutionTime = $map['AverageExecutionTime'];
        }
        if (isset($map['AveragePeakMemory'])) {
            $model->averagePeakMemory = $map['AveragePeakMemory'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['AverageScanSize'])) {
            $model->averageScanSize = $map['AverageScanSize'];
        }
        if (isset($map['Blockable'])) {
            $model->blockable = $map['Blockable'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['PatternCreationTime'])) {
            $model->patternCreationTime = $map['PatternCreationTime'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
