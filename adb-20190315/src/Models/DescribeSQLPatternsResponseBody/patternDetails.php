<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetails extends Model
{
    /**
     * @var string
     */
    public $SQLPattern;

    /**
     * @var string
     */
    public $patternId;

    /**
     * @var string
     */
    public $tables;

    /**
     * @var string
     */
    public $patternCreationDate;

    /**
     * @var string
     */
    public $totalQueryTime;

    /**
     * @var string
     */
    public $averageQueryTime;

    /**
     * @var string
     */
    public $queryTimePercentage;

    /**
     * @var string
     */
    public $averageMemory;

    /**
     * @var string
     */
    public $totalScanSize;

    /**
     * @var string
     */
    public $scanSizePercentage;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var bool
     */
    public $blockable;
    protected $_name = [
        'SQLPattern'          => 'SQLPattern',
        'patternId'           => 'PatternId',
        'tables'              => 'Tables',
        'patternCreationDate' => 'PatternCreationDate',
        'totalQueryTime'      => 'TotalQueryTime',
        'averageQueryTime'    => 'AverageQueryTime',
        'queryTimePercentage' => 'QueryTimePercentage',
        'averageMemory'       => 'AverageMemory',
        'totalScanSize'       => 'TotalScanSize',
        'scanSizePercentage'  => 'ScanSizePercentage',
        'queryCount'          => 'QueryCount',
        'errorCount'          => 'ErrorCount',
        'blockable'           => 'Blockable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->patternCreationDate) {
            $res['PatternCreationDate'] = $this->patternCreationDate;
        }
        if (null !== $this->totalQueryTime) {
            $res['TotalQueryTime'] = $this->totalQueryTime;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->queryTimePercentage) {
            $res['QueryTimePercentage'] = $this->queryTimePercentage;
        }
        if (null !== $this->averageMemory) {
            $res['AverageMemory'] = $this->averageMemory;
        }
        if (null !== $this->totalScanSize) {
            $res['TotalScanSize'] = $this->totalScanSize;
        }
        if (null !== $this->scanSizePercentage) {
            $res['ScanSizePercentage'] = $this->scanSizePercentage;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->blockable) {
            $res['Blockable'] = $this->blockable;
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
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['PatternCreationDate'])) {
            $model->patternCreationDate = $map['PatternCreationDate'];
        }
        if (isset($map['TotalQueryTime'])) {
            $model->totalQueryTime = $map['TotalQueryTime'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['QueryTimePercentage'])) {
            $model->queryTimePercentage = $map['QueryTimePercentage'];
        }
        if (isset($map['AverageMemory'])) {
            $model->averageMemory = $map['AverageMemory'];
        }
        if (isset($map['TotalScanSize'])) {
            $model->totalScanSize = $map['TotalScanSize'];
        }
        if (isset($map['ScanSizePercentage'])) {
            $model->scanSizePercentage = $map['ScanSizePercentage'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['Blockable'])) {
            $model->blockable = $map['Blockable'];
        }

        return $model;
    }
}
