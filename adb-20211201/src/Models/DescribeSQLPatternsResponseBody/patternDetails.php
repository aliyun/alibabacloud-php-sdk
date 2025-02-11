<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponseBody;

use AlibabaCloud\Dara\Model;

class patternDetails extends Model
{
    /**
     * @var string
     */
    public $accessIp;
    /**
     * @var float
     */
    public $averageExecutionTime;
    /**
     * @var float
     */
    public $averageOperatorCost;
    /**
     * @var float
     */
    public $averagePeakMemory;
    /**
     * @var float
     */
    public $averageQueryTime;
    /**
     * @var float
     */
    public $averageScanCost;
    /**
     * @var float
     */
    public $averageScanSize;
    /**
     * @var bool
     */
    public $blockable;
    /**
     * @var int
     */
    public $failedCount;
    /**
     * @var int
     */
    public $maxExecutionTime;
    /**
     * @var float
     */
    public $maxOperatorCost;
    /**
     * @var int
     */
    public $maxPeakMemory;
    /**
     * @var int
     */
    public $maxQueryTime;
    /**
     * @var float
     */
    public $maxScanCost;
    /**
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
     * @var string
     */
    public $patternCreationTime;
    /**
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
     * @var string
     */
    public $tables;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
