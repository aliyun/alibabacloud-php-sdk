<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobRequest\contactInfo;
use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
{
    /**
     * @description The interval of retries after a job failure. Default value: 30. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @description If you set TimeType to 1 (cron), you can specify calendar days.
     *
     * @example Business days
     *
     * @var string
     */
    public $calendar;

    /**
     * @description The full path of the job interface class.
     *
     * This field is available only when you set the job type to java. In this case, you must enter a full path.
     * @example com.alibaba.test.helloworld
     *
     * @var string
     */
    public $className;

    /**
     * @description The number of threads that are triggered by a single worker at a time. Default value: 5. This parameter is an advanced configuration item of the MapReduce job.
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
     * @description The script content. This parameter is required when you set the job type to python, shell, go, or k8s.
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
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of task distribution threads. Default value: 5. This parameter is an advanced configuration item of the MapReduce job.
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
     * @example standalone
     *
     * @var string
     */
    public $executeMode;

    /**
     * @description Specifies whether to turn on Failure alarm. If the switch is turned on, an alert will be generated upon a failure. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $failEnable;

    /**
     * @description The number of consecutive failures. An alert will be received if the number of consecutive failures reaches the value of this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $failTimes;

    /**
     * @description The application ID. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The job ID. You can obtain the job ID on the Task Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The maximum number of retries after a job failure. This parameter is specified based on your business requirements.
     *
     * @example 0
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @description The maximum number of concurrent instances. Default value: 1. The default value indicates that only one instance is allowed to run at a time. When an instance is running, another instance is not triggered even if the scheduled time for running the instance is reached.
     *
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description Specifies whether to turn on No machine alarm available. If the switch is turned on, an alert will be generated when no machine is available for running the job. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @description The job name.
     *
     * @example helloword
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The namespace source. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The number of tasks that can be pulled at a time. Default value: 100. This parameter is an advanced configuration item of the MapReduce job.
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
     * @description The maximum number of tasks that can be queued. Default value: 10000. This parameter is an advanced configuration item of the MapReduce job.
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The method that is used to send alerts. Only Short Message Service (SMS) is supported.
     *
     * @example sms
     *
     * @var string
     */
    public $sendChannel;

    /**
     * @description Specifies whether to turn on Successful notice. If the switch is turned on, a notice will be sent when a job succeeds.
     *
     * @example false
     *
     * @var bool
     */
    public $successNoticeEnable;

    /**
     * @description The interval of retries after a task failure. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 0
     *
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @description The job mode. Valid values: push and pull. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example push
     *
     * @var string
     */
    public $taskDispatchMode;

    /**
     * @description The number of retries after a task failure. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 0
     *
     * @var int
     */
    public $taskMaxAttempt;

    /**
     * @var string
     */
    public $template;

    /**
     * @description The time expression. Specify the time expression based on the value of TimeType:
     *
     *   If you set TimeType to **1** (cron), specify this parameter to a standard CRON expression.
     *   If you set TimeType to **100** (api), no time expression is required.
     *   If you set TimeType to **3** (fixed_rate), specify this parameter to a fixed frequency in seconds. For example, if you set this parameter to 30, the system triggers a job every 30 seconds.
     *   If you set TimeType to **4** (second_delay), specify this parameter to a fixed delay after which the job is triggered. Valid values: 1 to 60. Unit: seconds.
     *
     * @example 30
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The time type. Valid values:
     *
     *   **1**: cron
     *   **3**: fix_rate
     *   **4**: second_delay
     *   **100**: api
     *
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @description The timeout threshold. Unit: seconds.
     *
     * @example 7200
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Specifies whether to turn on Timeout alarm. If the switch is turned on, an alert will be generated upon a timeout. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @description Specifies whether to turn on Timeout termination. If the switch is turned on, the job will be terminated upon a timeout. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
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
     * @example {"resource":"shell","fileFormat":"unix","templateType":"customTemplate"}
     *
     * @var string
     */
    public $XAttrs;
    protected $_name = [
        'attemptInterval'     => 'AttemptInterval',
        'calendar'            => 'Calendar',
        'className'           => 'ClassName',
        'consumerSize'        => 'ConsumerSize',
        'contactInfo'         => 'ContactInfo',
        'content'             => 'Content',
        'dataOffset'          => 'DataOffset',
        'description'         => 'Description',
        'dispatcherSize'      => 'DispatcherSize',
        'executeMode'         => 'ExecuteMode',
        'failEnable'          => 'FailEnable',
        'failTimes'           => 'FailTimes',
        'groupId'             => 'GroupId',
        'jobId'               => 'JobId',
        'maxAttempt'          => 'MaxAttempt',
        'maxConcurrency'      => 'MaxConcurrency',
        'missWorkerEnable'    => 'MissWorkerEnable',
        'name'                => 'Name',
        'namespace'           => 'Namespace',
        'namespaceSource'     => 'NamespaceSource',
        'pageSize'            => 'PageSize',
        'parameters'          => 'Parameters',
        'queueSize'           => 'QueueSize',
        'regionId'            => 'RegionId',
        'sendChannel'         => 'SendChannel',
        'successNoticeEnable' => 'SuccessNoticeEnable',
        'taskAttemptInterval' => 'TaskAttemptInterval',
        'taskDispatchMode'    => 'TaskDispatchMode',
        'taskMaxAttempt'      => 'TaskMaxAttempt',
        'template'            => 'Template',
        'timeExpression'      => 'TimeExpression',
        'timeType'            => 'TimeType',
        'timeout'             => 'Timeout',
        'timeoutEnable'       => 'TimeoutEnable',
        'timeoutKillEnable'   => 'TimeoutKillEnable',
        'timezone'            => 'Timezone',
        'XAttrs'              => 'XAttrs',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->queueSize) {
            $res['QueueSize'] = $this->queueSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sendChannel) {
            $res['SendChannel'] = $this->sendChannel;
        }
        if (null !== $this->successNoticeEnable) {
            $res['SuccessNoticeEnable'] = $this->successNoticeEnable;
        }
        if (null !== $this->taskAttemptInterval) {
            $res['TaskAttemptInterval'] = $this->taskAttemptInterval;
        }
        if (null !== $this->taskDispatchMode) {
            $res['TaskDispatchMode'] = $this->taskDispatchMode;
        }
        if (null !== $this->taskMaxAttempt) {
            $res['TaskMaxAttempt'] = $this->taskMaxAttempt;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
     * @return UpdateJobRequest
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
                $n                  = 0;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
        if (isset($map['QueueSize'])) {
            $model->queueSize = $map['QueueSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SendChannel'])) {
            $model->sendChannel = $map['SendChannel'];
        }
        if (isset($map['SuccessNoticeEnable'])) {
            $model->successNoticeEnable = $map['SuccessNoticeEnable'];
        }
        if (isset($map['TaskAttemptInterval'])) {
            $model->taskAttemptInterval = $map['TaskAttemptInterval'];
        }
        if (isset($map['TaskDispatchMode'])) {
            $model->taskDispatchMode = $map['TaskDispatchMode'];
        }
        if (isset($map['TaskMaxAttempt'])) {
            $model->taskMaxAttempt = $map['TaskMaxAttempt'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
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
