<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult\needOptimizeItemList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult\tableStats;

class storageAnalysisResult extends Model
{
    /**
     * @var string
     */
    public $analysisErrorType;

    /**
     * @var bool
     */
    public $analysisSuccess;

    /**
     * @var int
     */
    public $dailyIncrement;

    /**
     * @var int
     */
    public $estimateAvailableDays;

    /**
     * @var needOptimizeItemList[]
     */
    public $needOptimizeItemList;

    /**
     * @var tableStats[]
     */
    public $tableStats;

    /**
     * @var int
     */
    public $totalFreeStorageSize;

    /**
     * @var int
     */
    public $totalStorageSize;

    /**
     * @var int
     */
    public $totalUsedStorageSize;
    protected $_name = [
        'analysisErrorType' => 'AnalysisErrorType',
        'analysisSuccess' => 'AnalysisSuccess',
        'dailyIncrement' => 'DailyIncrement',
        'estimateAvailableDays' => 'EstimateAvailableDays',
        'needOptimizeItemList' => 'NeedOptimizeItemList',
        'tableStats' => 'TableStats',
        'totalFreeStorageSize' => 'TotalFreeStorageSize',
        'totalStorageSize' => 'TotalStorageSize',
        'totalUsedStorageSize' => 'TotalUsedStorageSize',
    ];

    public function validate()
    {
        if (\is_array($this->needOptimizeItemList)) {
            Model::validateArray($this->needOptimizeItemList);
        }
        if (\is_array($this->tableStats)) {
            Model::validateArray($this->tableStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->needOptimizeItemList)) {
                $res['NeedOptimizeItemList'] = [];
                $n1 = 0;
                foreach ($this->needOptimizeItemList as $item1) {
                    $res['NeedOptimizeItemList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableStats) {
            if (\is_array($this->tableStats)) {
                $res['TableStats'] = [];
                $n1 = 0;
                foreach ($this->tableStats as $item1) {
                    $res['TableStats'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['NeedOptimizeItemList'] as $item1) {
                    $model->needOptimizeItemList[$n1++] = needOptimizeItemList::fromMap($item1);
                }
            }
        }

        if (isset($map['TableStats'])) {
            if (!empty($map['TableStats'])) {
                $model->tableStats = [];
                $n1 = 0;
                foreach ($map['TableStats'] as $item1) {
                    $model->tableStats[$n1++] = tableStats::fromMap($item1);
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
