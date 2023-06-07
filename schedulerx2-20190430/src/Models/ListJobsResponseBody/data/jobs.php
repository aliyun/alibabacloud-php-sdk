<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\jobMonitorInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\mapTaskXAttrs;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\timeConfig;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The interval at which the system retries to run the job after a job failure. Unit: seconds. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @description The full path of the job interface class. This parameter is returned only for a Java job.
     *
     * @example com.alibaba.schedulerx.test.helloworld
     *
     * @var string
     */
    public $className;

    /**
     * @description The script of the job. This parameter is returned only for a Python, Shell, or Go job.
     *
     * @example echo \"hello\"
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the job.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution mode of the job. Valid values:
     *
     *   **standalone**: The job runs in standalone mode.
     *   **broadcast**: The job runs in broadcast mode.
     *   **parallel**: The job runs in parallel computing mode.
     *   **grid**: The job runs in memory grid mode.
     *   **batch**: The job runs in grid computing mode.
     *   **shard**: The job runs in multipart mode.
     *
     * @example standalone
     *
     * @var string
     */
    public $executeMode;

    /**
     * @description The full path to which a JAR package is uploaded in Object Storage Service (OSS).
     *
     * @example https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar
     *
     * @var string
     */
    public $jarUrl;

    /**
     * @description The ID of the job.
     *
     * @example 99341
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The monitoring information of the job.
     *
     * @var jobMonitorInfo
     */
    public $jobMonitorInfo;

    /**
     * @description The type of the job.
     *
     * @example java
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The advanced configurations of the job. The parameters are returned only if the value of the ExecuteMode parameter is parallel, grid, or batch.
     *
     * @var mapTaskXAttrs
     */
    public $mapTaskXAttrs;

    /**
     * @description The maximum number of retries after a job failure. This parameter is specified based on your business requirements. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @description The maximum number of instances that can concurrently run for the job. Default value: 1. A value of 1 indicates that if the last triggered instance is running, the next instance is not triggered even if the scheduled point in time for running the instance is reached.
     *
     * @example 1
     *
     * @var string
     */
    public $maxConcurrency;

    /**
     * @description The name of the job.
     *
     * @example helloworld
     *
     * @var string
     */
    public $name;

    /**
     * @description The user-defined parameters. These parameters can be obtained when the job is running.
     *
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @description Indicates whether the job is enabled. Valid values:
     *
     *   **1**: The job is enabled and can be triggered.
     *   **0**: The job is disabled and cannot be triggered.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The time configurations.
     *
     * @var timeConfig
     */
    public $timeConfig;

    /**
     * @description The extended fields.
     *
     * @example {"pageSize":5,"queueSize":10,"consumerSize":5,"dispatcherSize":5,"taskMaxAttempt":0,"taskAttemptInterval":0,"globalConsumerSize":1000,"taskDispatchMode":"push"}
     *
     * @var string
     */
    public $XAttrs;
    protected $_name = [
        'attemptInterval' => 'AttemptInterval',
        'className'       => 'ClassName',
        'content'         => 'Content',
        'description'     => 'Description',
        'executeMode'     => 'ExecuteMode',
        'jarUrl'          => 'JarUrl',
        'jobId'           => 'JobId',
        'jobMonitorInfo'  => 'JobMonitorInfo',
        'jobType'         => 'JobType',
        'mapTaskXAttrs'   => 'MapTaskXAttrs',
        'maxAttempt'      => 'MaxAttempt',
        'maxConcurrency'  => 'MaxConcurrency',
        'name'            => 'Name',
        'parameters'      => 'Parameters',
        'status'          => 'Status',
        'timeConfig'      => 'TimeConfig',
        'XAttrs'          => 'XAttrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptInterval) {
            $res['AttemptInterval'] = $this->attemptInterval;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }
        if (null !== $this->jarUrl) {
            $res['JarUrl'] = $this->jarUrl;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobMonitorInfo) {
            $res['JobMonitorInfo'] = null !== $this->jobMonitorInfo ? $this->jobMonitorInfo->toMap() : null;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->mapTaskXAttrs) {
            $res['MapTaskXAttrs'] = null !== $this->mapTaskXAttrs ? $this->mapTaskXAttrs->toMap() : null;
        }
        if (null !== $this->maxAttempt) {
            $res['MaxAttempt'] = $this->maxAttempt;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeConfig) {
            $res['TimeConfig'] = null !== $this->timeConfig ? $this->timeConfig->toMap() : null;
        }
        if (null !== $this->XAttrs) {
            $res['XAttrs'] = $this->XAttrs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptInterval'])) {
            $model->attemptInterval = $map['AttemptInterval'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }
        if (isset($map['JarUrl'])) {
            $model->jarUrl = $map['JarUrl'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobMonitorInfo'])) {
            $model->jobMonitorInfo = jobMonitorInfo::fromMap($map['JobMonitorInfo']);
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MapTaskXAttrs'])) {
            $model->mapTaskXAttrs = mapTaskXAttrs::fromMap($map['MapTaskXAttrs']);
        }
        if (isset($map['MaxAttempt'])) {
            $model->maxAttempt = $map['MaxAttempt'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeConfig'])) {
            $model->timeConfig = timeConfig::fromMap($map['TimeConfig']);
        }
        if (isset($map['XAttrs'])) {
            $model->XAttrs = $map['XAttrs'];
        }

        return $model;
    }
}
