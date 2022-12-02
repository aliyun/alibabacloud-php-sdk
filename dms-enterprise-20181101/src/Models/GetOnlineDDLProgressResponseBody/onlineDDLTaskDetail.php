<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOnlineDDLProgressResponseBody;

use AlibabaCloud\Tea\Model;

class onlineDDLTaskDetail extends Model
{
    /**
     * @var string
     */
    public $cleanStrategy;

    /**
     * @var string
     */
    public $copyChunkMode;

    /**
     * @var int
     */
    public $copyChunkSize;

    /**
     * @var int
     */
    public $copyCount;

    /**
     * @var int
     */
    public $copyTotal;

    /**
     * @var int
     */
    public $cutoverFailRetryTimes;

    /**
     * @var int
     */
    public $cutoverLockTimeSeconds;

    /**
     * @var string
     */
    public $cutoverWindowEndTime;

    /**
     * @var string
     */
    public $cutoverWindowStartTime;

    /**
     * @var int
     */
    public $delaySeconds;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $progressRatio;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'cleanStrategy'          => 'CleanStrategy',
        'copyChunkMode'          => 'CopyChunkMode',
        'copyChunkSize'          => 'CopyChunkSize',
        'copyCount'              => 'CopyCount',
        'copyTotal'              => 'CopyTotal',
        'cutoverFailRetryTimes'  => 'CutoverFailRetryTimes',
        'cutoverLockTimeSeconds' => 'CutoverLockTimeSeconds',
        'cutoverWindowEndTime'   => 'CutoverWindowEndTime',
        'cutoverWindowStartTime' => 'CutoverWindowStartTime',
        'delaySeconds'           => 'DelaySeconds',
        'jobStatus'              => 'JobStatus',
        'progressRatio'          => 'ProgressRatio',
        'statusDesc'             => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanStrategy) {
            $res['CleanStrategy'] = $this->cleanStrategy;
        }
        if (null !== $this->copyChunkMode) {
            $res['CopyChunkMode'] = $this->copyChunkMode;
        }
        if (null !== $this->copyChunkSize) {
            $res['CopyChunkSize'] = $this->copyChunkSize;
        }
        if (null !== $this->copyCount) {
            $res['CopyCount'] = $this->copyCount;
        }
        if (null !== $this->copyTotal) {
            $res['CopyTotal'] = $this->copyTotal;
        }
        if (null !== $this->cutoverFailRetryTimes) {
            $res['CutoverFailRetryTimes'] = $this->cutoverFailRetryTimes;
        }
        if (null !== $this->cutoverLockTimeSeconds) {
            $res['CutoverLockTimeSeconds'] = $this->cutoverLockTimeSeconds;
        }
        if (null !== $this->cutoverWindowEndTime) {
            $res['CutoverWindowEndTime'] = $this->cutoverWindowEndTime;
        }
        if (null !== $this->cutoverWindowStartTime) {
            $res['CutoverWindowStartTime'] = $this->cutoverWindowStartTime;
        }
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->progressRatio) {
            $res['ProgressRatio'] = $this->progressRatio;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineDDLTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanStrategy'])) {
            $model->cleanStrategy = $map['CleanStrategy'];
        }
        if (isset($map['CopyChunkMode'])) {
            $model->copyChunkMode = $map['CopyChunkMode'];
        }
        if (isset($map['CopyChunkSize'])) {
            $model->copyChunkSize = $map['CopyChunkSize'];
        }
        if (isset($map['CopyCount'])) {
            $model->copyCount = $map['CopyCount'];
        }
        if (isset($map['CopyTotal'])) {
            $model->copyTotal = $map['CopyTotal'];
        }
        if (isset($map['CutoverFailRetryTimes'])) {
            $model->cutoverFailRetryTimes = $map['CutoverFailRetryTimes'];
        }
        if (isset($map['CutoverLockTimeSeconds'])) {
            $model->cutoverLockTimeSeconds = $map['CutoverLockTimeSeconds'];
        }
        if (isset($map['CutoverWindowEndTime'])) {
            $model->cutoverWindowEndTime = $map['CutoverWindowEndTime'];
        }
        if (isset($map['CutoverWindowStartTime'])) {
            $model->cutoverWindowStartTime = $map['CutoverWindowStartTime'];
        }
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['ProgressRatio'])) {
            $model->progressRatio = $map['ProgressRatio'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
