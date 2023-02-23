<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\UpdateJobRequest\contactInfo;
use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
{
    /**
     * @description The interval at which the system attempts to rerun a job. Default value: 30. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $attemptInterval;

    /**
     * @description When the Time type parameter is set to cron, you can specify a custom calendar.
     *
     * @example Business days
     *
     * @var string
     */
    public $calendar;

    /**
     * @description The full path of the job interface class.
     *
     * This field is available only when you select a java job. In this case, you must enter a full path.
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
     * @description The information of the job contact.
     *
     * @var contactInfo[]
     */
    public $contactInfo;

    /**
     * @description The script code content that is required when you set the job type to **python**, **shell**, or **go**.
     *
     * @example echo \"hello\"
     *
     * @var string
     */
    public $content;

    /**
     * @description When the Time type parameter is set to cron, you can specify a time offset. Unit: seconds.
     *
     * @example 2400
     *
     * @var int
     */
    public $dataOffset;

    /**
     * @description The description of the job.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Default value: 5. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 5
     *
     * @var int
     */
    public $dispatcherSize;

    /**
     * @description The execution mode of the job. The following execution modes are supported:
     *
     *   **standalone**: The job runs in standalone mode.
     *   **broadcast**: The job runs in broadcast mode.
     *   **parallel**: The job runs in parallel computing mode.
     *   **grid**: The job runs in memory grid mode.
     *   **batch**: The job runs in grid computing mode.
     *   **sharding**: The job runs in sharding mode.
     *
     * @example standalone
     *
     * @var string
     */
    public $executeMode;

    /**
     * @description Specifies whether to turn on Failure alarm. Valid values:
     *
     *   **true**: Turn on Failure alarm.
     *   **false**: Turn off Failure alarm.
     *
     * @example true
     *
     * @var bool
     */
    public $failEnable;

    /**
     * @var int
     */
    public $failTimes;

    /**
     * @description The ID of the application. You can obtain the application ID on the Application Management page in Distributed Task Scheduling Platform.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the job. You can obtain the job ID on the Task Management page in Distributed Task Scheduling Platform.
     *
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The maximum number of attempts that the system can make when an error occurs on a job. You can specify this parameter based on your business requirements.
     *
     * @example 0
     *
     * @var int
     */
    public $maxAttempt;

    /**
     * @description The maximum number of instances that the system can run at the same time. Default value: 1. When you set this parameter to 1, if the current job does not end, the system will not run the next job even if the runtime is reached.
     *
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description Specifies whether to turn on No machine alarm available when no worker is available.
     *
     *   **true**: Turn on No machine alarm available when no worker is available.
     *   **false**: Turn off No machine alarm available when no worker is available.
     *
     * @example true
     *
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @description The name of the job.
     *
     * @example helloword
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace. You can obtain the ID of the namespace on the Namespace page in Distributed Task Scheduling Platform.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The number of subtasks that can be pulled at a time. Default value: 100. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The user-defined parameters that you can obtain when you run the job.
     *
     * @example test
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The maximum number of subtask queues that you can cache. Default value: 10000. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 10000
     *
     * @var int
     */
    public $queueSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The channel for sending alerts. Only SMS messages are supported.
     *
     * @example sms
     *
     * @var string
     */
    public $sendChannel;

    /**
     * @var bool
     */
    public $successNoticeEnable;

    /**
     * @description The interval at which the system can rerun the subtask when the subtask fails. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 0
     *
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @var string
     */
    public $taskDispatchMode;

    /**
     * @description The number of retries that the system can perform when the subtask fails. This parameter is an advanced configuration item of the MapReduce job.
     *
     * @example 0
     *
     * @var int
     */
    public $taskMaxAttempt;

    /**
     * @description The time expression. You can set the time expression according to the selected time type.
     *
     *   **cron**: Specify a standard Cron expression. You can verify the expression online after you specify the expression.
     *   **api**: No time expression is available.
     *   **fixed_rate**: Specify a fixed frequency value. Unit: seconds. For example, if you set this parameter to 30, the system triggers a job every 30 seconds.
     *   **second_delay**: Specify a delay after which you can run a job. You can specify a value from 1 to 60. Unit: seconds.
     *
     * @example 30
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The type of time. The following time types are supported:
     *
     *   **cron**: 1
     *   **fix_rate**: 3
     *   **second_delay**: 4
     *   **api**: 100
     *
     * @example 1
     *
     * @var int
     */
    public $timeType;

    /**
     * @description The timeout threshold. Default value: 7200. Unit: seconds.
     *
     * @example 7200
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Specifies whether to turn on Timeout alarm. Valid values:
     *
     *   **true**: Turn on Timeout alarm.
     *   **false**: Turn off Timeout alarm.
     *
     * @example true
     *
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @description Specifies whether to turn on Timeout termination. Valid values:
     *
     *   **true**: Turn on Timeout termination.
     *   **false**: Turn off Timeout termination.
     *
     * @example true
     *
     * @var bool
     */
    public $timeoutKillEnable;
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
        'timeExpression'      => 'TimeExpression',
        'timeType'            => 'TimeType',
        'timeout'             => 'Timeout',
        'timeoutEnable'       => 'TimeoutEnable',
        'timeoutKillEnable'   => 'TimeoutKillEnable',
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

        return $model;
    }
}
