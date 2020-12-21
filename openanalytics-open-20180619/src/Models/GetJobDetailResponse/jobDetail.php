<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponse;

use AlibabaCloud\Tea\Model;

class jobDetail extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $sparkUI;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $createTimeValue;

    /**
     * @var string
     */
    public $updateTimeValue;

    /**
     * @var string
     */
    public $submitTimeValue;

    /**
     * @var string
     */
    public $vcName;

    /**
     * @var string
     */
    public $driverResourceSpec;

    /**
     * @var string
     */
    public $executorResourceSpec;

    /**
     * @var string
     */
    public $executorInstances;
    protected $_name = [
        'jobId'                => 'JobId',
        'jobName'              => 'JobName',
        'status'               => 'Status',
        'detail'               => 'Detail',
        'sparkUI'              => 'SparkUI',
        'createTime'           => 'CreateTime',
        'updateTime'           => 'UpdateTime',
        'submitTime'           => 'SubmitTime',
        'createTimeValue'      => 'CreateTimeValue',
        'updateTimeValue'      => 'UpdateTimeValue',
        'submitTimeValue'      => 'SubmitTimeValue',
        'vcName'               => 'VcName',
        'driverResourceSpec'   => 'DriverResourceSpec',
        'executorResourceSpec' => 'ExecutorResourceSpec',
        'executorInstances'    => 'ExecutorInstances',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('jobName', $this->jobName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('detail', $this->detail, true);
        Model::validateRequired('sparkUI', $this->sparkUI, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('submitTime', $this->submitTime, true);
        Model::validateRequired('createTimeValue', $this->createTimeValue, true);
        Model::validateRequired('updateTimeValue', $this->updateTimeValue, true);
        Model::validateRequired('submitTimeValue', $this->submitTimeValue, true);
        Model::validateRequired('vcName', $this->vcName, true);
        Model::validateRequired('driverResourceSpec', $this->driverResourceSpec, true);
        Model::validateRequired('executorResourceSpec', $this->executorResourceSpec, true);
        Model::validateRequired('executorInstances', $this->executorInstances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->sparkUI) {
            $res['SparkUI'] = $this->sparkUI;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->createTimeValue) {
            $res['CreateTimeValue'] = $this->createTimeValue;
        }
        if (null !== $this->updateTimeValue) {
            $res['UpdateTimeValue'] = $this->updateTimeValue;
        }
        if (null !== $this->submitTimeValue) {
            $res['SubmitTimeValue'] = $this->submitTimeValue;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }
        if (null !== $this->driverResourceSpec) {
            $res['DriverResourceSpec'] = $this->driverResourceSpec;
        }
        if (null !== $this->executorResourceSpec) {
            $res['ExecutorResourceSpec'] = $this->executorResourceSpec;
        }
        if (null !== $this->executorInstances) {
            $res['ExecutorInstances'] = $this->executorInstances;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['SparkUI'])) {
            $model->sparkUI = $map['SparkUI'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['CreateTimeValue'])) {
            $model->createTimeValue = $map['CreateTimeValue'];
        }
        if (isset($map['UpdateTimeValue'])) {
            $model->updateTimeValue = $map['UpdateTimeValue'];
        }
        if (isset($map['SubmitTimeValue'])) {
            $model->submitTimeValue = $map['SubmitTimeValue'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }
        if (isset($map['DriverResourceSpec'])) {
            $model->driverResourceSpec = $map['DriverResourceSpec'];
        }
        if (isset($map['ExecutorResourceSpec'])) {
            $model->executorResourceSpec = $map['ExecutorResourceSpec'];
        }
        if (isset($map['ExecutorInstances'])) {
            $model->executorInstances = $map['ExecutorInstances'];
        }

        return $model;
    }
}
