<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class jobDetail extends Model
{
    /**
     * @example 2020-10-27 16:23:16
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1603786996000
     *
     * @var string
     */
    public $createTimeValue;

    /**
     * @example {\\"args\\":[\\"100\\"],\\"name\\":\\"SparkPi\\",\\"className\\":\\"org.apache.spark.examples.SparkPi\\",\\"conf\\":{\\"spark.driver.resourceSpec\\":\\"medium\\",\\"spark.executor.instances\\":5,\\"spark.executor.resourceSpec\\":\\"medium\\"},\\"file\\":\\"local:///tmp/spark-examples.jar\\"}
     *
     * @var string
     */
    public $detail;

    /**
     * @example small
     *
     * @var string
     */
    public $driverResourceSpec;

    /**
     * @example 1
     *
     * @var string
     */
    public $executorInstances;

    /**
     * @example small
     *
     * @var string
     */
    public $executorResourceSpec;

    /**
     * @example j202010271622hangzhouf742a4330000923
     *
     * @var string
     */
    public $jobId;

    /**
     * @example SparkPi
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 202105251618hzslot9906b0b40000005-0001
     *
     * @var string
     */
    public $lastJobAttemptId;

    /**
     * @example https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx
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
     * @example 2020-10-27 16:23:16
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example 1603786996000
     *
     * @var string
     */
    public $submitTimeValue;

    /**
     * @example 2020-10-27 16:23:16
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1603786996000
     *
     * @var string
     */
    public $updateTimeValue;

    /**
     * @example MyCluster
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'createTimeValue'      => 'CreateTimeValue',
        'detail'               => 'Detail',
        'driverResourceSpec'   => 'DriverResourceSpec',
        'executorInstances'    => 'ExecutorInstances',
        'executorResourceSpec' => 'ExecutorResourceSpec',
        'jobId'                => 'JobId',
        'jobName'              => 'JobName',
        'lastJobAttemptId'     => 'LastJobAttemptId',
        'sparkUI'              => 'SparkUI',
        'status'               => 'Status',
        'submitTime'           => 'SubmitTime',
        'submitTimeValue'      => 'SubmitTimeValue',
        'updateTime'           => 'UpdateTime',
        'updateTimeValue'      => 'UpdateTimeValue',
        'vcName'               => 'VcName',
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
        if (null !== $this->driverResourceSpec) {
            $res['DriverResourceSpec'] = $this->driverResourceSpec;
        }
        if (null !== $this->executorInstances) {
            $res['ExecutorInstances'] = $this->executorInstances;
        }
        if (null !== $this->executorResourceSpec) {
            $res['ExecutorResourceSpec'] = $this->executorResourceSpec;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->lastJobAttemptId) {
            $res['LastJobAttemptId'] = $this->lastJobAttemptId;
        }
        if (null !== $this->sparkUI) {
            $res['SparkUI'] = $this->sparkUI;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->submitTimeValue) {
            $res['SubmitTimeValue'] = $this->submitTimeValue;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimeValue) {
            $res['UpdateTimeValue'] = $this->updateTimeValue;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeValue'])) {
            $model->createTimeValue = $map['CreateTimeValue'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DriverResourceSpec'])) {
            $model->driverResourceSpec = $map['DriverResourceSpec'];
        }
        if (isset($map['ExecutorInstances'])) {
            $model->executorInstances = $map['ExecutorInstances'];
        }
        if (isset($map['ExecutorResourceSpec'])) {
            $model->executorResourceSpec = $map['ExecutorResourceSpec'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['LastJobAttemptId'])) {
            $model->lastJobAttemptId = $map['LastJobAttemptId'];
        }
        if (isset($map['SparkUI'])) {
            $model->sparkUI = $map['SparkUI'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['SubmitTimeValue'])) {
            $model->submitTimeValue = $map['SubmitTimeValue'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimeValue'])) {
            $model->updateTimeValue = $map['UpdateTimeValue'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
