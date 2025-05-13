<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateJobRequest\contactInfo;

class CreateJobRequest extends Model
{
    /**
     * @var int
     */
    public $attemptInterval;

    /**
     * @var string
     */
    public $calendar;

    /**
     * @var string
     */
    public $className;

    /**
     * @var int
     */
    public $consumerSize;

    /**
     * @var contactInfo[]
     */
    public $contactInfo;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $dataOffset;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dispatcherSize;

    /**
     * @var string
     */
    public $executeMode;

    /**
     * @var bool
     */
    public $failEnable;

    /**
     * @var int
     */
    public $failTimes;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $maxAttempt;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $queueSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sendChannel;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $successNoticeEnable;

    /**
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @var int
     */
    public $taskMaxAttempt;

    /**
     * @var string
     */
    public $timeExpression;

    /**
     * @var int
     */
    public $timeType;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @var bool
     */
    public $timeoutKillEnable;

    /**
     * @var string
     */
    public $timezone;

    /**
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

    public function validate()
    {
        if (\is_array($this->contactInfo)) {
            Model::validateArray($this->contactInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->contactInfo)) {
                $res['ContactInfo'] = [];
                $n1 = 0;
                foreach ($this->contactInfo as $item1) {
                    $res['ContactInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ContactInfo'] as $item1) {
                    $model->contactInfo[$n1++] = contactInfo::fromMap($item1);
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
