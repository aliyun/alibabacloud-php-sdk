<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\mapTaskXAttrs;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\timeConfig;
use AlibabaCloud\Tea\Model;

class jobConfigInfo extends Model
{
    /**
     * @description The interval at which the system retried to run the job after a job failure. Default value: 30. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @description The full path of the job interface class. This parameter is returned only for jobs whose job type is Java.
     *
     * @example com.alibaba.test.helloword
     *
     * @var string
     */
    public $className;

    /**
     * @description The script of a script job.
     *
     * @example echo "clear" > /home/admin/edas-container/logs/catalina.out
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the job.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution mode of the job. Valid values:
     *
     *   **Stand-alone operation**
     *   **Broadcast run**
     *   **Visual MapReduce**
     *   **MapReduce**
     *   ****
     *   **Shard run**
     *
     * @example standalone
     *
     * @var string
     */
    public $executeMode;

    /**
     * @description The full path used to upload files to Object Storage Service (OSS).
     *
     * If you use a JAR package, you can upload the JAR package to this OSS path.
     * @example https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar
     *
     * @var string
     */
    public $jarUrl;

    /**
     * @description The job ID.
     *
     * @example 538039
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
     * @description The job type.
     *
     * @example java
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The advanced configurations of the job.
     *
     * @var mapTaskXAttrs
     */
    public $mapTaskXAttrs;

    /**
     * @description The maximum number of retries after a job failure. This parameter was specified based on your business requirements. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @description The maximum number of concurrent instances. Default value: 1. The default value indicates that if the last triggered instance is running, the next instance is not triggered even if the scheduled point in time for running the next instance is reached.
     *
     * @example 1
     *
     * @var string
     */
    public $maxConcurrency;

    /**
     * @description The job name.
     *
     * @example helloworld
     *
     * @var string
     */
    public $name;

    /**
     * @description The user-defined parameters that you can obtain when the job is running.
     *
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @description Indicates whether the job was enabled. Valid values:
     *
     *   **1**: The job was enabled and could be triggered.
     *   **0**: The job was disabled and could not be triggered.
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
     * @return jobConfigInfo
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
