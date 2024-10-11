<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptResponseBody\dataResult;

use AlibabaCloud\Tea\Model;

class jobAttemptList extends Model
{
    /**
     * @example 2021-05-27 23:22:08
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1622128928000
     *
     * @var string
     */
    public $createTimeValue;

    /**
     * @example {"xxx":"xxx"}
     *
     * @var string
     */
    public $detail;

    /**
     * @example 00:01:12
     *
     * @var string
     */
    public $durationTime;

    /**
     * @example 72000
     *
     * @var string
     */
    public $durationTimeValue;

    /**
     * @example j202105272322hangzhou5d64f1560000128-0001
     *
     * @var string
     */
    public $jobAttemptId;

    /**
     * @example j202105272322hangzhou5d64f1560000128
     *
     * @var string
     */
    public $jobId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $jobName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $sparkUI;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-05-27 23:23:20
     *
     * @var string
     */
    public $terminatedTime;

    /**
     * @example 1622129000000
     *
     * @var string
     */
    public $terminatedTimeValue;

    /**
     * @example release-test
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'createTimeValue'     => 'CreateTimeValue',
        'detail'              => 'Detail',
        'durationTime'        => 'DurationTime',
        'durationTimeValue'   => 'DurationTimeValue',
        'jobAttemptId'        => 'JobAttemptId',
        'jobId'               => 'JobId',
        'jobName'             => 'JobName',
        'sparkUI'             => 'SparkUI',
        'status'              => 'Status',
        'terminatedTime'      => 'TerminatedTime',
        'terminatedTimeValue' => 'TerminatedTimeValue',
        'vcName'              => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeValue) {
            $res['CreateTimeValue'] = $this->createTimeValue;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->durationTime) {
            $res['DurationTime'] = $this->durationTime;
        }
        if (null !== $this->durationTimeValue) {
            $res['DurationTimeValue'] = $this->durationTimeValue;
        }
        if (null !== $this->jobAttemptId) {
            $res['JobAttemptId'] = $this->jobAttemptId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->sparkUI) {
            $res['SparkUI'] = $this->sparkUI;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->terminatedTime) {
            $res['TerminatedTime'] = $this->terminatedTime;
        }
        if (null !== $this->terminatedTimeValue) {
            $res['TerminatedTimeValue'] = $this->terminatedTimeValue;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobAttemptList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeValue'])) {
            $model->createTimeValue = $map['CreateTimeValue'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DurationTime'])) {
            $model->durationTime = $map['DurationTime'];
        }
        if (isset($map['DurationTimeValue'])) {
            $model->durationTimeValue = $map['DurationTimeValue'];
        }
        if (isset($map['JobAttemptId'])) {
            $model->jobAttemptId = $map['JobAttemptId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['SparkUI'])) {
            $model->sparkUI = $map['SparkUI'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TerminatedTime'])) {
            $model->terminatedTime = $map['TerminatedTime'];
        }
        if (isset($map['TerminatedTimeValue'])) {
            $model->terminatedTimeValue = $map['TerminatedTimeValue'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
