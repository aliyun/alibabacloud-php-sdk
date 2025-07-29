<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateJobRequest\contactInfo;
use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @description The time interval between retry attempts in case of a job failure. Unit: seconds. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @description If you set TimeType to 1 (cron), you can specify calendar days.
     *
     * @example This parameter is not supported. You do not need to specify this parameter.
     *
     * @var string
     */
    public $calendar;

    /**
     * @description The full path of the job interface class.
     *
     * This parameter is available only when you set JobType to java. You must enter a full path.
     *
     * @example com.alibaba.schedulerx.test.helloworld
     *
     * @var string
     */
    public $className;

    /**
     * @description The number of threads that a single worker triggers simultaneously. You can specify this parameter for MapReduce jobs. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $consumerSize;

    /**
     * @description The information about the alert contact.
     *
     * @var contactInfo[]
     */
    public $contactInfo;

    /**
     * @description The script content. This parameter is required when you set JobType to python, shell, go, or k8s.
     *
     * @example echo \\"hello\\"
     *
     * @var string
     */
    public $content;

    /**
     * @description If you set TimeType to 1 (cron), you can specify a time offset. Unit: seconds.
     *
     * @example 2400
     *
     * @var int
     */
    public $dataOffset;

    /**
     * @description The job description.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of task distribution threads. This parameter is an advanced configuration item of the MapReduce job. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $dispatcherSize;

    /**
     * @description The execution mode of the job. Valid values:
     *
     *   **Stand-alone operation**
     *   **Broadcast run**
     *   **Visual MapReduce**
     *   **MapReduce**
     *   **Shard run**
     *
     * This parameter is required.
     *
     * @example standalone
     *
     * @var string
     */
    public $executeMode;

    /**
     * @description Specifies whether to trigger an alert when a job fails. Valid values:
     *
     *   **true**: triggers an alert when a job fails.
     *   **false**: does not trigger an alert when a job fails.
     *
     * @example false
     *
     * @var bool
     */
    public $failEnable;

    /**
     * @description The maximum number of consecutive failures before an alert is triggered. An alert will be triggered if the number of consecutive failures reaches the value of this parameter.
     *
     * @example 2
     *
     * @var int
     */
    public $failTimes;

    /**
     * @description The application ID. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The job type. Valid values:
     *
     *   java
     *   python
     *   shell
     *   go
     *   http
     *   xxljob
     *   dataworks
     *   k8s
     *   springschedule
     *
     * This parameter is required.
     *
     * @example java
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The maximum number of retry attempts in case of a job failure. Specify this parameter based on your business requirements. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @description The maximum number of concurrent instances. By default, only one instance can run at a time. When an instance is running, the next instance is not triggered even if the scheduled start time arrives.
     *
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description Specifies whether to generate an alert if no machines are available to run the job. Valid values:
     *
     *   **true**: generates an alert if no machines are available to run the job.
     *   **false**: does not generate an alert if no machines are available to run the job.
     *
     * @example false
     *
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @description The job name.
     *
     * This parameter is required.
     *
     * @example helloworld
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. You must specify this parameter only if the namespace is provided by a third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The number of entries per page. You can specify this parameter for MapReduce jobs. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The user-defined parameters that you can obtain when the job is running.
     *
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $priority;

    /**
     * @description The maximum capacity of the task queue. You can specify this parameter for MapReduce jobs. Default value: 10000.
     *
     * @example 10000
     *
     * @var int
     */
    public $queueSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The method that is used to send alerts. Set the value to sms. Default value: sms.
     *
     * @example sms
     *
     * @var string
     */
    public $sendChannel;

    /**
     * @description Specifies whether to enable the job. If this parameter is set to 0, the job is disabled. If this parameter is set to 1, the job is enabled. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description Specifies whether to send notifications for successfully running the job.
     *
     * @example false
     *
     * @var bool
     */
    public $successNoticeEnable;

    /**
     * @description The time interval between retry attempts in case of a job failure. This parameter is an advanced configuration item of the MapReduce job. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @description The maximum number of retry attempts in case of a job failure. This parameter is an advanced configuration item of the MapReduce job. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $taskMaxAttempt;

    /**
     * @description The time expression. Specify the time expression based on the value of TimeType:
     *
     *   If you set TimeType to **1** (cron), specify this parameter to a standard CRON expression.
     *   If you set TimeType to **100** (api), no time expression is required.
     *   If you set TimeType to **3** (fixed_rate), specify this parameter to a fixed frequency in seconds. For example, if you set this parameter to 30, the system triggers a job every 30 seconds.
     *   If you set TimeType to **4** (second_delay), specify this parameter to a fixed delay after which the job is triggered. Valid values: 1 to 60. Unit: seconds.
     *   If you set TimeType to **5** (one_time), specify this parameter to a specific time point at which the job is triggered. The time is in the format of yyyy-MM-dd HH:mm:ss, such as 2022-10-10 10:10:00, or a timestamp in milliseconds.
     *
     * @example 0 0/10 * * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The time type. Valid values:
     *
     *   **1**: cron
     *   **3**: fixed_rate
     *   **4**: second_delay
     *   **5**: one_time
     *   **100**: api
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @description The timeout threshold. Unit: seconds. Default value: 7200.
     *
     * @example 7200
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Specifies whether to enable the timeout alert feature. If the feature is enabled, an alert will be triggered upon a timeout. Valid values:
     *
     *   **true**: enables the timeout alert feature.
     *   **false**: disables the timeout alert feature.
     *
     * @example false
     *
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @description Specifies whether to enable the timeout termination feature. If the feature is enabled, a job will automatically be terminated if it times out. Valid values:
     *
     *   **true**: enables the timeout termination feature.
     *   **false**: disables the timeout termination feature.
     *
     * @example false
     *
     * @var bool
     */
    public $timeoutKillEnable;

    /**
     * @description Time zone.
     *
     * @example GMT+8
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The extended attributes. If you set JobType to k8s, this parameter is required. For a job whose resource type is Job-YAML, set this parameter to {"resource":"job"}. For a job whose resource type is Shell-Script, set this parameter to {"image":"busybox","resource":"shell"}.
     *
     * @example {"resource":"job"}
     *
     * @var string
     */
    public $XAttrs;
    protected $_name = [
        'attemptInterval' => 'AttemptInterval',
        'calendar' => 'Calendar',
        'className' => 'ClassName',
        'consumerSize' => 'ConsumerSize',
        'contactInfo' => 'ContactInfo',
        'content' => 'Content',
        'dataOffset' => 'DataOffset',
        'description' => 'Description',
        'dispatcherSize' => 'DispatcherSize',
        'executeMode' => 'ExecuteMode',
        'failEnable' => 'FailEnable',
        'failTimes' => 'FailTimes',
        'groupId' => 'GroupId',
        'jobType' => 'JobType',
        'maxAttempt' => 'MaxAttempt',
        'maxConcurrency' => 'MaxConcurrency',
        'missWorkerEnable' => 'MissWorkerEnable',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'pageSize' => 'PageSize',
        'parameters' => 'Parameters',
        'priority' => 'Priority',
        'queueSize' => 'QueueSize',
        'regionId' => 'RegionId',
        'sendChannel' => 'SendChannel',
        'status' => 'Status',
        'successNoticeEnable' => 'SuccessNoticeEnable',
        'taskAttemptInterval' => 'TaskAttemptInterval',
        'taskMaxAttempt' => 'TaskMaxAttempt',
        'timeExpression' => 'TimeExpression',
        'timeType' => 'TimeType',
        'timeout' => 'Timeout',
        'timeoutEnable' => 'TimeoutEnable',
        'timeoutKillEnable' => 'TimeoutKillEnable',
        'timezone' => 'Timezone',
        'XAttrs' => 'XAttrs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptInterval) {
            $res['AttemptInterval'] = $this->attemptInterval;
        }
        if (null !== $this->calendar) {
            $res['Calendar'] = $this->calendar;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->consumerSize) {
            $res['ConsumerSize'] = $this->consumerSize;
        }
        if (null !== $this->contactInfo) {
            $res['ContactInfo'] = [];
            if (null !== $this->contactInfo && \is_array($this->contactInfo)) {
                $n = 0;
                foreach ($this->contactInfo as $item) {
                    $res['ContactInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataOffset) {
            $res['DataOffset'] = $this->dataOffset;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dispatcherSize) {
            $res['DispatcherSize'] = $this->dispatcherSize;
        }
        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }
        if (null !== $this->failEnable) {
            $res['FailEnable'] = $this->failEnable;
        }
        if (null !== $this->failTimes) {
            $res['FailTimes'] = $this->failTimes;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxAttempt) {
            $res['MaxAttempt'] = $this->maxAttempt;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->missWorkerEnable) {
            $res['MissWorkerEnable'] = $this->missWorkerEnable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queueSize) {
            $res['QueueSize'] = $this->queueSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sendChannel) {
            $res['SendChannel'] = $this->sendChannel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successNoticeEnable) {
            $res['SuccessNoticeEnable'] = $this->successNoticeEnable;
        }
        if (null !== $this->taskAttemptInterval) {
            $res['TaskAttemptInterval'] = $this->taskAttemptInterval;
        }
        if (null !== $this->taskMaxAttempt) {
            $res['TaskMaxAttempt'] = $this->taskMaxAttempt;
        }
        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->timeoutEnable) {
            $res['TimeoutEnable'] = $this->timeoutEnable;
        }
        if (null !== $this->timeoutKillEnable) {
            $res['TimeoutKillEnable'] = $this->timeoutKillEnable;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->XAttrs) {
            $res['XAttrs'] = $this->XAttrs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptInterval'])) {
            $model->attemptInterval = $map['AttemptInterval'];
        }
        if (isset($map['Calendar'])) {
            $model->calendar = $map['Calendar'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['ConsumerSize'])) {
            $model->consumerSize = $map['ConsumerSize'];
        }
        if (isset($map['ContactInfo'])) {
            if (!empty($map['ContactInfo'])) {
                $model->contactInfo = [];
                $n = 0;
                foreach ($map['ContactInfo'] as $item) {
                    $model->contactInfo[$n++] = null !== $item ? contactInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataOffset'])) {
            $model->dataOffset = $map['DataOffset'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DispatcherSize'])) {
            $model->dispatcherSize = $map['DispatcherSize'];
        }
        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }
        if (isset($map['FailEnable'])) {
            $model->failEnable = $map['FailEnable'];
        }
        if (isset($map['FailTimes'])) {
            $model->failTimes = $map['FailTimes'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxAttempt'])) {
            $model->maxAttempt = $map['MaxAttempt'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['MissWorkerEnable'])) {
            $model->missWorkerEnable = $map['MissWorkerEnable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['QueueSize'])) {
            $model->queueSize = $map['QueueSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SendChannel'])) {
            $model->sendChannel = $map['SendChannel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessNoticeEnable'])) {
            $model->successNoticeEnable = $map['SuccessNoticeEnable'];
        }
        if (isset($map['TaskAttemptInterval'])) {
            $model->taskAttemptInterval = $map['TaskAttemptInterval'];
        }
        if (isset($map['TaskMaxAttempt'])) {
            $model->taskMaxAttempt = $map['TaskMaxAttempt'];
        }
        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TimeoutEnable'])) {
            $model->timeoutEnable = $map['TimeoutEnable'];
        }
        if (isset($map['TimeoutKillEnable'])) {
            $model->timeoutKillEnable = $map['TimeoutKillEnable'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['XAttrs'])) {
            $model->XAttrs = $map['XAttrs'];
        }

        return $model;
    }
}
