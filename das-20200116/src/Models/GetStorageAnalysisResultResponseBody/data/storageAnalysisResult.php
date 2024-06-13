<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult\needOptimizeItemList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult\tableStats;
use AlibabaCloud\Tea\Model;

class storageAnalysisResult extends Model
{
    /**
     * @description The reason why the analysis on the database and table fails.
     *
     *   **DB_OR_TABLE_NOT_EXIST**: The specified database or table does not exist.
     *   **DB_NOT_EXIST**: The specified database does not exist.
     *
     * @example DB_NOT_EXIST
     *
     * @var string
     */
    public $analysisErrorType;

    /**
     * @description Indicates whether the analysis on the database and table is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $analysisSuccess;

    /**
     * @description The estimated average daily growth of the used storage space in the previous seven days. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $dailyIncrement;

    /**
     * @description The estimated number of days for which the remaining storage space is available.
     *
     * @example 99
     *
     * @var int
     */
    public $estimateAvailableDays;

    /**
     * @description The items to be optimized, which are generated based on DAS default rules. You can ignore these items based on your business requirements, and create custom rules to generate items to be optimized based on other basic data that is returned.
     *
     * @var needOptimizeItemList[]
     */
    public $needOptimizeItemList;

    /**
     * @description The information about the table.
     *
     * @var tableStats[]
     */
    public $tableStats;

    /**
     * @description The size of remaining storage.
     *
     * >  Unit: bytes.
     * @example 146403229696
     *
     * @var int
     */
    public $totalFreeStorageSize;

    /**
     * @description The total size of instance storage.
     *
     * >  Unit: bytes.
     * @example 214748364800
     *
     * @var int
     */
    public $totalStorageSize;

    /**
     * @description The size of used storage.
     *
     * >  Unit: bytes.
     * @example 68345135104
     *
     * @var int
     */
    public $totalUsedStorageSize;
    protected $_name = [
        'analysisErrorType'     => 'AnalysisErrorType',
        'analysisSuccess'       => 'AnalysisSuccess',
        'dailyIncrement'        => 'DailyIncrement',
        'estimateAvailableDays' => 'EstimateAvailableDays',
        'needOptimizeItemList'  => 'NeedOptimizeItemList',
        'tableStats'            => 'TableStats',
        'totalFreeStorageSize'  => 'TotalFreeStorageSize',
        'totalStorageSize'      => 'TotalStorageSize',
        'totalUsedStorageSize'  => 'TotalUsedStorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisErrorType) {
            $res['AnalysisErrorType'] = $this->analysisErrorType;
        }
        if (null !== $this->analysisSuccess) {
            $res['AnalysisSuccess'] = $this->analysisSuccess;
        }
        if (null !== $this->dailyIncrement) {
            $res['DailyIncrement'] = $this->dailyIncrement;
        }
        if (null !== $this->estimateAvailableDays) {
            $res['EstimateAvailableDays'] = $this->estimateAvailableDays;
        }
        if (null !== $this->needOptimizeItemList) {
            $res['NeedOptimizeItemList'] = [];
            if (null !== $this->needOptimizeItemList && \is_array($this->needOptimizeItemList)) {
                $n = 0;
                foreach ($this->needOptimizeItemList as $item) {
                    $res['NeedOptimizeItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableStats) {
            $res['TableStats'] = [];
            if (null !== $this->tableStats && \is_array($this->tableStats)) {
                $n = 0;
                foreach ($this->tableStats as $item) {
                    $res['TableStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalFreeStorageSize) {
            $res['TotalFreeStorageSize'] = $this->totalFreeStorageSize;
        }
        if (null !== $this->totalStorageSize) {
            $res['TotalStorageSize'] = $this->totalStorageSize;
        }
        if (null !== $this->totalUsedStorageSize) {
            $res['TotalUsedStorageSize'] = $this->totalUsedStorageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageAnalysisResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisErrorType'])) {
            $model->analysisErrorType = $map['AnalysisErrorType'];
        }
        if (isset($map['AnalysisSuccess'])) {
            $model->analysisSuccess = $map['AnalysisSuccess'];
        }
        if (isset($map['DailyIncrement'])) {
            $model->dailyIncrement = $map['DailyIncrement'];
        }
        if (isset($map['EstimateAvailableDays'])) {
            $model->estimateAvailableDays = $map['EstimateAvailableDays'];
        }
        if (isset($map['NeedOptimizeItemList'])) {
            if (!empty($map['NeedOptimizeItemList'])) {
                $model->needOptimizeItemList = [];
                $n                           = 0;
                foreach ($map['NeedOptimizeItemList'] as $item) {
                    $model->needOptimizeItemList[$n++] = null !== $item ? needOptimizeItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableStats'])) {
            if (!empty($map['TableStats'])) {
                $model->tableStats = [];
                $n                 = 0;
                foreach ($map['TableStats'] as $item) {
                    $model->tableStats[$n++] = null !== $item ? tableStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalFreeStorageSize'])) {
            $model->totalFreeStorageSize = $map['TotalFreeStorageSize'];
        }
        if (isset($map['TotalStorageSize'])) {
            $model->totalStorageSize = $map['TotalStorageSize'];
        }
        if (isset($map['TotalUsedStorageSize'])) {
            $model->totalUsedStorageSize = $map['TotalUsedStorageSize'];
        }

        return $model;
    }
}
