<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOnlineDDLProgressResponseBody;

use AlibabaCloud\Tea\Model;

class onlineDDLTaskDetail extends Model
{
    /**
     * @example DROP
     *
     * @var string
     */
    public $cleanStrategy;

    /**
     * @example AUTO
     *
     * @var string
     */
    public $copyChunkMode;

    /**
     * @example 1000
     *
     * @var int
     */
    public $copyChunkSize;

    /**
     * @example 9
     *
     * @var int
     */
    public $copyCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $copyTotal;

    /**
     * @example 3
     *
     * @var int
     */
    public $cutoverFailRetryTimes;

    /**
     * @example 2
     *
     * @var int
     */
    public $cutoverLockTimeSeconds;

    /**
     * @example 13:00:00
     *
     * @var string
     */
    public $cutoverWindowEndTime;

    /**
     * @example 12:00:00
     *
     * @var string
     */
    public $cutoverWindowStartTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example 90%
     *
     * @var string
     */
    public $progressRatio;

    /**
     * @example Success
     *
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
