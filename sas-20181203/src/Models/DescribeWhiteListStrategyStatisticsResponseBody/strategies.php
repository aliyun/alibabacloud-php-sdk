<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListStrategyStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @description The number of the servers on which the policy takes effect.
     *
     * @example 9
     *
     * @var int
     */
    public $assetCount;

    /**
     * @description The learning progress of the policy. Unit: percent (%).
     *
     * @example 80
     *
     * @var int
     */
    public $progress;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: learning
     *   **2**: paused
     *   **3**: learning completed
     *   **4**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the policy.
     *
     * @example 11906
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the policy.
     *
     * @example win
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The intelligent learning duration. Unit: hour.
     *
     * @example 9
     *
     * @var int
     */
    public $studyTime;

    /**
     * @description The number of suspicious processes.
     *
     * @example 1
     *
     * @var int
     */
    public $suspiciousProcCount;

    /**
     * @description The number of trusted processes.
     *
     * @example 2
     *
     * @var int
     */
    public $trustProcCount;

    /**
     * @description The number of malicious processes.
     *
     * @example 2
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return strategies
     */
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
