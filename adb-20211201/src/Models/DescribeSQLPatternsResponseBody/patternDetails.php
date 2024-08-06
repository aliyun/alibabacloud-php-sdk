<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetails extends Model
{
    /**
     * @description The IP address of the SQL client that commits the SQL pattern.
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $accessIp;

    /**
     * @description The average execution duration of the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 234.78
     *
     * @var float
     */
    public $averageExecutionTime;

    /**
     * @var float
     */
    public $averageOperatorCost;

    /**
     * @description The average peak memory usage of the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234.22
     *
     * @var float
     */
    public $averagePeakMemory;

    /**
     * @description The average total amount of time consumed by the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 4
     *
     * @var float
     */
    public $averageQueryTime;

    /**
     * @var float
     */
    public $averageScanCost;

    /**
     * @description The average amount of data scanned based on the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234149.23
     *
     * @var float
     */
    public $averageScanSize;

    /**
     * @description Indicates whether the execution of the SQL pattern can be intercepted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  Only SELECT and INSERT statements can be intercepted.
     * @example true
     *
     * @var bool
     */
    public $blockable;

    /**
     * @description The number of failed queries executed in association with the SQL pattern within the query time range.
     *
     * @example 18
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The maximum execution duration of the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 2142
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @var float
     */
    public $maxOperatorCost;

    /**
     * @description The maximum peak memory usage of the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234149
     *
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @description The maximum total amount of time consumed by the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 2341
     *
     * @var int
     */
    public $maxQueryTime;

    /**
     * @var float
     */
    public $maxScanCost;

    /**
     * @description The maximum amount of data scanned based on the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 32212254
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @var float
     */
    public $operatorCostPercentage;

    /**
     * @var float
     */
    public $operatorCostSum;

    /**
     * @description The earliest commit time of the SQL pattern within the query time range.
     *
     * @example 2022-09-06 05:06:00
     *
     * @var string
     */
    public $patternCreationTime;

    /**
     * @description The ID of the SQL pattern.
     *
     * @example 5575924945138******
     *
     * @var string
     */
    public $patternId;

    /**
     * @var float
     */
    public $peakMemoryPercentage;

    /**
     * @var float
     */
    public $peakMemorySum;

    /**
     * @description The number of queries executed in association with the SQL pattern within the query time range.
     *
     * @example 345
     *
     * @var int
     */
    public $queryCount;

    /**
     * @var float
     */
    public $queryTimePercentage;

    /**
     * @var float
     */
    public $queryTimeSum;

    /**
     * @description The statement of the SQL pattern.
     *
     * @example SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)
     *
     * @var string
     */
    public $SQLPattern;

    /**
     * @var float
     */
    public $scanCostPercentage;

    /**
     * @var float
     */
    public $scanCostSum;

    /**
     * @var float
     */
    public $scanSizePercentage;

    /**
     * @var float
     */
    public $scanSizeSum;

    /**
     * @description The tables scanned based on the SQL pattern.
     *
     * @example tpch.orders
     *
     * @var string
     */
    public $tables;

    /**
     * @description The name of the database account that is used to commit the SQL pattern.
     *
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'               => 'AccessIp',
        'averageExecutionTime'   => 'AverageExecutionTime',
        'averageOperatorCost'    => 'AverageOperatorCost',
        'averagePeakMemory'      => 'AveragePeakMemory',
        'averageQueryTime'       => 'AverageQueryTime',
        'averageScanCost'        => 'AverageScanCost',
        'averageScanSize'        => 'AverageScanSize',
        'blockable'              => 'Blockable',
        'failedCount'            => 'FailedCount',
        'maxExecutionTime'       => 'MaxExecutionTime',
        'maxOperatorCost'        => 'MaxOperatorCost',
        'maxPeakMemory'          => 'MaxPeakMemory',
        'maxQueryTime'           => 'MaxQueryTime',
        'maxScanCost'            => 'MaxScanCost',
        'maxScanSize'            => 'MaxScanSize',
        'operatorCostPercentage' => 'OperatorCostPercentage',
        'operatorCostSum'        => 'OperatorCostSum',
        'patternCreationTime'    => 'PatternCreationTime',
        'patternId'              => 'PatternId',
        'peakMemoryPercentage'   => 'PeakMemoryPercentage',
        'peakMemorySum'          => 'PeakMemorySum',
        'queryCount'             => 'QueryCount',
        'queryTimePercentage'    => 'QueryTimePercentage',
        'queryTimeSum'           => 'QueryTimeSum',
        'SQLPattern'             => 'SQLPattern',
        'scanCostPercentage'     => 'ScanCostPercentage',
        'scanCostSum'            => 'ScanCostSum',
        'scanSizePercentage'     => 'ScanSizePercentage',
        'scanSizeSum'            => 'ScanSizeSum',
        'tables'                 => 'Tables',
        'user'                   => 'User',
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
        if (null !== $this->averageOperatorCost) {
            $res['AverageOperatorCost'] = $this->averageOperatorCost;
        }
        if (null !== $this->averagePeakMemory) {
            $res['AveragePeakMemory'] = $this->averagePeakMemory;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->averageScanCost) {
            $res['AverageScanCost'] = $this->averageScanCost;
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
        if (null !== $this->maxOperatorCost) {
            $res['MaxOperatorCost'] = $this->maxOperatorCost;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }
        if (null !== $this->maxScanCost) {
            $res['MaxScanCost'] = $this->maxScanCost;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->operatorCostPercentage) {
            $res['OperatorCostPercentage'] = $this->operatorCostPercentage;
        }
        if (null !== $this->operatorCostSum) {
            $res['OperatorCostSum'] = $this->operatorCostSum;
        }
        if (null !== $this->patternCreationTime) {
            $res['PatternCreationTime'] = $this->patternCreationTime;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->peakMemoryPercentage) {
            $res['PeakMemoryPercentage'] = $this->peakMemoryPercentage;
        }
        if (null !== $this->peakMemorySum) {
            $res['PeakMemorySum'] = $this->peakMemorySum;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->queryTimePercentage) {
            $res['QueryTimePercentage'] = $this->queryTimePercentage;
        }
        if (null !== $this->queryTimeSum) {
            $res['QueryTimeSum'] = $this->queryTimeSum;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->scanCostPercentage) {
            $res['ScanCostPercentage'] = $this->scanCostPercentage;
        }
        if (null !== $this->scanCostSum) {
            $res['ScanCostSum'] = $this->scanCostSum;
        }
        if (null !== $this->scanSizePercentage) {
            $res['ScanSizePercentage'] = $this->scanSizePercentage;
        }
        if (null !== $this->scanSizeSum) {
            $res['ScanSizeSum'] = $this->scanSizeSum;
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
        if (isset($map['AverageOperatorCost'])) {
            $model->averageOperatorCost = $map['AverageOperatorCost'];
        }
        if (isset($map['AveragePeakMemory'])) {
            $model->averagePeakMemory = $map['AveragePeakMemory'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['AverageScanCost'])) {
            $model->averageScanCost = $map['AverageScanCost'];
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
        if (isset($map['MaxOperatorCost'])) {
            $model->maxOperatorCost = $map['MaxOperatorCost'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }
        if (isset($map['MaxScanCost'])) {
            $model->maxScanCost = $map['MaxScanCost'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['OperatorCostPercentage'])) {
            $model->operatorCostPercentage = $map['OperatorCostPercentage'];
        }
        if (isset($map['OperatorCostSum'])) {
            $model->operatorCostSum = $map['OperatorCostSum'];
        }
        if (isset($map['PatternCreationTime'])) {
            $model->patternCreationTime = $map['PatternCreationTime'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['PeakMemoryPercentage'])) {
            $model->peakMemoryPercentage = $map['PeakMemoryPercentage'];
        }
        if (isset($map['PeakMemorySum'])) {
            $model->peakMemorySum = $map['PeakMemorySum'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['QueryTimePercentage'])) {
            $model->queryTimePercentage = $map['QueryTimePercentage'];
        }
        if (isset($map['QueryTimeSum'])) {
            $model->queryTimeSum = $map['QueryTimeSum'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['ScanCostPercentage'])) {
            $model->scanCostPercentage = $map['ScanCostPercentage'];
        }
        if (isset($map['ScanCostSum'])) {
            $model->scanCostSum = $map['ScanCostSum'];
        }
        if (isset($map['ScanSizePercentage'])) {
            $model->scanSizePercentage = $map['ScanSizePercentage'];
        }
        if (isset($map['ScanSizeSum'])) {
            $model->scanSizeSum = $map['ScanSizeSum'];
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
