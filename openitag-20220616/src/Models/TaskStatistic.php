<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class TaskStatistic extends Model
{
    /**
     * @var float
     */
    public $acceptItemCount;

    /**
     * @var float
     */
    public $checkAbandon;

    /**
     * @var float
     */
    public $checkAccuracy;

    /**
     * @var float
     */
    public $checkEfficiency;

    /**
     * @var float
     */
    public $checkedAccuracy;

    /**
     * @var float
     */
    public $checkedError;

    /**
     * @var float
     */
    public $checkedRejectCount;

    /**
     * @var float
     */
    public $finalAbandonCount;

    /**
     * @var int
     */
    public $finishedItemCount;

    /**
     * @var int
     */
    public $finishedSubtaskCount;

    /**
     * @var float
     */
    public $markEfficiency;

    /**
     * @var float
     */
    public $preMarkFixedCount;

    /**
     * @var float
     */
    public $sampledAccuracy;

    /**
     * @var float
     */
    public $sampledErrorCount;

    /**
     * @var float
     */
    public $sampledRejectCount;

    /**
     * @var float
     */
    public $samplingAccuracy;

    /**
     * @var float
     */
    public $totalCheckCount;

    /**
     * @var float
     */
    public $totalCheckTime;

    /**
     * @var float
     */
    public $totalCheckedCount;

    /**
     * @var int
     */
    public $totalItemCount;

    /**
     * @var float
     */
    public $totalMarkTime;

    /**
     * @var float
     */
    public $totalSampledCount;

    /**
     * @var float
     */
    public $totalSamplingCount;

    /**
     * @var int
     */
    public $totalSubtaskCount;

    /**
     * @var float
     */
    public $totalWorkTime;
    protected $_name = [
        'acceptItemCount'      => 'AcceptItemCount',
        'checkAbandon'         => 'CheckAbandon',
        'checkAccuracy'        => 'CheckAccuracy',
        'checkEfficiency'      => 'CheckEfficiency',
        'checkedAccuracy'      => 'CheckedAccuracy',
        'checkedError'         => 'CheckedError',
        'checkedRejectCount'   => 'CheckedRejectCount',
        'finalAbandonCount'    => 'FinalAbandonCount',
        'finishedItemCount'    => 'FinishedItemCount',
        'finishedSubtaskCount' => 'FinishedSubtaskCount',
        'markEfficiency'       => 'MarkEfficiency',
        'preMarkFixedCount'    => 'PreMarkFixedCount',
        'sampledAccuracy'      => 'SampledAccuracy',
        'sampledErrorCount'    => 'SampledErrorCount',
        'sampledRejectCount'   => 'SampledRejectCount',
        'samplingAccuracy'     => 'SamplingAccuracy',
        'totalCheckCount'      => 'TotalCheckCount',
        'totalCheckTime'       => 'TotalCheckTime',
        'totalCheckedCount'    => 'TotalCheckedCount',
        'totalItemCount'       => 'TotalItemCount',
        'totalMarkTime'        => 'TotalMarkTime',
        'totalSampledCount'    => 'TotalSampledCount',
        'totalSamplingCount'   => 'TotalSamplingCount',
        'totalSubtaskCount'    => 'TotalSubtaskCount',
        'totalWorkTime'        => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptItemCount) {
            $res['AcceptItemCount'] = $this->acceptItemCount;
        }
        if (null !== $this->checkAbandon) {
            $res['CheckAbandon'] = $this->checkAbandon;
        }
        if (null !== $this->checkAccuracy) {
            $res['CheckAccuracy'] = $this->checkAccuracy;
        }
        if (null !== $this->checkEfficiency) {
            $res['CheckEfficiency'] = $this->checkEfficiency;
        }
        if (null !== $this->checkedAccuracy) {
            $res['CheckedAccuracy'] = $this->checkedAccuracy;
        }
        if (null !== $this->checkedError) {
            $res['CheckedError'] = $this->checkedError;
        }
        if (null !== $this->checkedRejectCount) {
            $res['CheckedRejectCount'] = $this->checkedRejectCount;
        }
        if (null !== $this->finalAbandonCount) {
            $res['FinalAbandonCount'] = $this->finalAbandonCount;
        }
        if (null !== $this->finishedItemCount) {
            $res['FinishedItemCount'] = $this->finishedItemCount;
        }
        if (null !== $this->finishedSubtaskCount) {
            $res['FinishedSubtaskCount'] = $this->finishedSubtaskCount;
        }
        if (null !== $this->markEfficiency) {
            $res['MarkEfficiency'] = $this->markEfficiency;
        }
        if (null !== $this->preMarkFixedCount) {
            $res['PreMarkFixedCount'] = $this->preMarkFixedCount;
        }
        if (null !== $this->sampledAccuracy) {
            $res['SampledAccuracy'] = $this->sampledAccuracy;
        }
        if (null !== $this->sampledErrorCount) {
            $res['SampledErrorCount'] = $this->sampledErrorCount;
        }
        if (null !== $this->sampledRejectCount) {
            $res['SampledRejectCount'] = $this->sampledRejectCount;
        }
        if (null !== $this->samplingAccuracy) {
            $res['SamplingAccuracy'] = $this->samplingAccuracy;
        }
        if (null !== $this->totalCheckCount) {
            $res['TotalCheckCount'] = $this->totalCheckCount;
        }
        if (null !== $this->totalCheckTime) {
            $res['TotalCheckTime'] = $this->totalCheckTime;
        }
        if (null !== $this->totalCheckedCount) {
            $res['TotalCheckedCount'] = $this->totalCheckedCount;
        }
        if (null !== $this->totalItemCount) {
            $res['TotalItemCount'] = $this->totalItemCount;
        }
        if (null !== $this->totalMarkTime) {
            $res['TotalMarkTime'] = $this->totalMarkTime;
        }
        if (null !== $this->totalSampledCount) {
            $res['TotalSampledCount'] = $this->totalSampledCount;
        }
        if (null !== $this->totalSamplingCount) {
            $res['TotalSamplingCount'] = $this->totalSamplingCount;
        }
        if (null !== $this->totalSubtaskCount) {
            $res['TotalSubtaskCount'] = $this->totalSubtaskCount;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptItemCount'])) {
            $model->acceptItemCount = $map['AcceptItemCount'];
        }
        if (isset($map['CheckAbandon'])) {
            $model->checkAbandon = $map['CheckAbandon'];
        }
        if (isset($map['CheckAccuracy'])) {
            $model->checkAccuracy = $map['CheckAccuracy'];
        }
        if (isset($map['CheckEfficiency'])) {
            $model->checkEfficiency = $map['CheckEfficiency'];
        }
        if (isset($map['CheckedAccuracy'])) {
            $model->checkedAccuracy = $map['CheckedAccuracy'];
        }
        if (isset($map['CheckedError'])) {
            $model->checkedError = $map['CheckedError'];
        }
        if (isset($map['CheckedRejectCount'])) {
            $model->checkedRejectCount = $map['CheckedRejectCount'];
        }
        if (isset($map['FinalAbandonCount'])) {
            $model->finalAbandonCount = $map['FinalAbandonCount'];
        }
        if (isset($map['FinishedItemCount'])) {
            $model->finishedItemCount = $map['FinishedItemCount'];
        }
        if (isset($map['FinishedSubtaskCount'])) {
            $model->finishedSubtaskCount = $map['FinishedSubtaskCount'];
        }
        if (isset($map['MarkEfficiency'])) {
            $model->markEfficiency = $map['MarkEfficiency'];
        }
        if (isset($map['PreMarkFixedCount'])) {
            $model->preMarkFixedCount = $map['PreMarkFixedCount'];
        }
        if (isset($map['SampledAccuracy'])) {
            $model->sampledAccuracy = $map['SampledAccuracy'];
        }
        if (isset($map['SampledErrorCount'])) {
            $model->sampledErrorCount = $map['SampledErrorCount'];
        }
        if (isset($map['SampledRejectCount'])) {
            $model->sampledRejectCount = $map['SampledRejectCount'];
        }
        if (isset($map['SamplingAccuracy'])) {
            $model->samplingAccuracy = $map['SamplingAccuracy'];
        }
        if (isset($map['TotalCheckCount'])) {
            $model->totalCheckCount = $map['TotalCheckCount'];
        }
        if (isset($map['TotalCheckTime'])) {
            $model->totalCheckTime = $map['TotalCheckTime'];
        }
        if (isset($map['TotalCheckedCount'])) {
            $model->totalCheckedCount = $map['TotalCheckedCount'];
        }
        if (isset($map['TotalItemCount'])) {
            $model->totalItemCount = $map['TotalItemCount'];
        }
        if (isset($map['TotalMarkTime'])) {
            $model->totalMarkTime = $map['TotalMarkTime'];
        }
        if (isset($map['TotalSampledCount'])) {
            $model->totalSampledCount = $map['TotalSampledCount'];
        }
        if (isset($map['TotalSamplingCount'])) {
            $model->totalSamplingCount = $map['TotalSamplingCount'];
        }
        if (isset($map['TotalSubtaskCount'])) {
            $model->totalSubtaskCount = $map['TotalSubtaskCount'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
