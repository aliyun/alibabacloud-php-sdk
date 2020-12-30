<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class jobDetail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $executorResourceSpec;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createTimeValue;

    /**
     * @var string
     */
    public $driverResourceSpec;

    /**
     * @var string
     */
    public $updateTimeValue;

    /**
     * @var string
     */
    public $sparkUI;

    /**
     * @var string
     */
    public $submitTimeValue;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $executorInstances;

    /**
     * @var string
     */
    public $vcName;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'status'               => 'Status',
        'updateTime'           => 'UpdateTime',
        'executorResourceSpec' => 'ExecutorResourceSpec',
        'createTime'           => 'CreateTime',
        'createTimeValue'      => 'CreateTimeValue',
        'driverResourceSpec'   => 'DriverResourceSpec',
        'updateTimeValue'      => 'UpdateTimeValue',
        'sparkUI'              => 'SparkUI',
        'submitTimeValue'      => 'SubmitTimeValue',
        'jobName'              => 'JobName',
        'jobId'                => 'JobId',
        'executorInstances'    => 'ExecutorInstances',
        'vcName'               => 'VcName',
        'submitTime'           => 'SubmitTime',
        'detail'               => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->executorResourceSpec) {
            $res['ExecutorResourceSpec'] = $this->executorResourceSpec;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeValue) {
            $res['CreateTimeValue'] = $this->createTimeValue;
        }
        if (null !== $this->driverResourceSpec) {
            $res['DriverResourceSpec'] = $this->driverResourceSpec;
        }
        if (null !== $this->updateTimeValue) {
            $res['UpdateTimeValue'] = $this->updateTimeValue;
        }
        if (null !== $this->sparkUI) {
            $res['SparkUI'] = $this->sparkUI;
        }
        if (null !== $this->submitTimeValue) {
            $res['SubmitTimeValue'] = $this->submitTimeValue;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->executorInstances) {
            $res['ExecutorInstances'] = $this->executorInstances;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ExecutorResourceSpec'])) {
            $model->executorResourceSpec = $map['ExecutorResourceSpec'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeValue'])) {
            $model->createTimeValue = $map['CreateTimeValue'];
        }
        if (isset($map['DriverResourceSpec'])) {
            $model->driverResourceSpec = $map['DriverResourceSpec'];
        }
        if (isset($map['UpdateTimeValue'])) {
            $model->updateTimeValue = $map['UpdateTimeValue'];
        }
        if (isset($map['SparkUI'])) {
            $model->sparkUI = $map['SparkUI'];
        }
        if (isset($map['SubmitTimeValue'])) {
            $model->submitTimeValue = $map['SubmitTimeValue'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ExecutorInstances'])) {
            $model->executorInstances = $map['ExecutorInstances'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
