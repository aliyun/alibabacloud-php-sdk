<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListStrategyStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class strategies extends Model
{
    /**
     * @var int
     */
    public $assetCount;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $strategyId;
    /**
     * @var string
     */
    public $strategyName;
    /**
     * @var int
     */
    public $studyTime;
    /**
     * @var int
     */
    public $suspiciousProcCount;
    /**
     * @var int
     */
    public $trustProcCount;
    /**
     * @var int
     */
    public $virusProcCount;
    protected $_name = [
        'assetCount'          => 'AssetCount',
        'progress'            => 'Progress',
        'status'              => 'Status',
        'strategyId'          => 'StrategyId',
        'strategyName'        => 'StrategyName',
        'studyTime'           => 'StudyTime',
        'suspiciousProcCount' => 'SuspiciousProcCount',
        'trustProcCount'      => 'TrustProcCount',
        'virusProcCount'      => 'VirusProcCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->studyTime) {
            $res['StudyTime'] = $this->studyTime;
        }

        if (null !== $this->suspiciousProcCount) {
            $res['SuspiciousProcCount'] = $this->suspiciousProcCount;
        }

        if (null !== $this->trustProcCount) {
            $res['TrustProcCount'] = $this->trustProcCount;
        }

        if (null !== $this->virusProcCount) {
            $res['VirusProcCount'] = $this->virusProcCount;
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
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['StudyTime'])) {
            $model->studyTime = $map['StudyTime'];
        }

        if (isset($map['SuspiciousProcCount'])) {
            $model->suspiciousProcCount = $map['SuspiciousProcCount'];
        }

        if (isset($map['TrustProcCount'])) {
            $model->trustProcCount = $map['TrustProcCount'];
        }

        if (isset($map['VirusProcCount'])) {
            $model->virusProcCount = $map['VirusProcCount'];
        }

        return $model;
    }
}
