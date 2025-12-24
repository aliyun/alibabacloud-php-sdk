<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobsResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $appName;

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
    public $childJobId;

    /**
     * @var string
     */
    public $cleanMode;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $currentExecuteStatus;

    /**
     * @var int
     */
    public $dataOffset;

    /**
     * @var int
     */
    public $dependentStrategy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executorBlockStrategy;

    /**
     * @var string
     */
    public $jobHandler;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $lastExecuteEndTime;

    /**
     * @var int
     */
    public $lastExecuteStatus;

    /**
     * @var int
     */
    public $maxAttempt;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $noticeConfig;

    /**
     * @var string
     */
    public $noticeContacts;

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
    public $routeStrategy;

    /**
     * @var string
     */
    public $script;

    /**
     * @var int
     */
    public $startTimeType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $timeExpression;

    /**
     * @var int
     */
    public $timeType;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $updater;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var int
     */
    public $workflowId;

    /**
     * @var string
     */
    public $xattrs;
    protected $_name = [
        'appName' => 'AppName',
        'attemptInterval' => 'AttemptInterval',
        'calendar' => 'Calendar',
        'childJobId' => 'ChildJobId',
        'cleanMode' => 'CleanMode',
        'creator' => 'Creator',
        'currentExecuteStatus' => 'CurrentExecuteStatus',
        'dataOffset' => 'DataOffset',
        'dependentStrategy' => 'DependentStrategy',
        'description' => 'Description',
        'executorBlockStrategy' => 'ExecutorBlockStrategy',
        'jobHandler' => 'JobHandler',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'lastExecuteEndTime' => 'LastExecuteEndTime',
        'lastExecuteStatus' => 'LastExecuteStatus',
        'maxAttempt' => 'MaxAttempt',
        'maxConcurrency' => 'MaxConcurrency',
        'name' => 'Name',
        'nodeType' => 'NodeType',
        'noticeConfig' => 'NoticeConfig',
        'noticeContacts' => 'NoticeContacts',
        'parameters' => 'Parameters',
        'priority' => 'Priority',
        'routeStrategy' => 'RouteStrategy',
        'script' => 'Script',
        'startTimeType' => 'StartTimeType',
        'status' => 'Status',
        'timeExpression' => 'TimeExpression',
        'timeType' => 'TimeType',
        'timeZone' => 'TimeZone',
        'timezone' => 'Timezone',
        'updater' => 'Updater',
        'weight' => 'Weight',
        'workflowId' => 'WorkflowId',
        'xattrs' => 'Xattrs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->attemptInterval) {
            $res['AttemptInterval'] = $this->attemptInterval;
        }

        if (null !== $this->calendar) {
            $res['Calendar'] = $this->calendar;
        }

        if (null !== $this->childJobId) {
            $res['ChildJobId'] = $this->childJobId;
        }

        if (null !== $this->cleanMode) {
            $res['CleanMode'] = $this->cleanMode;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->currentExecuteStatus) {
            $res['CurrentExecuteStatus'] = $this->currentExecuteStatus;
        }

        if (null !== $this->dataOffset) {
            $res['DataOffset'] = $this->dataOffset;
        }

        if (null !== $this->dependentStrategy) {
            $res['DependentStrategy'] = $this->dependentStrategy;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->executorBlockStrategy) {
            $res['ExecutorBlockStrategy'] = $this->executorBlockStrategy;
        }

        if (null !== $this->jobHandler) {
            $res['JobHandler'] = $this->jobHandler;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->lastExecuteEndTime) {
            $res['LastExecuteEndTime'] = $this->lastExecuteEndTime;
        }

        if (null !== $this->lastExecuteStatus) {
            $res['LastExecuteStatus'] = $this->lastExecuteStatus;
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

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->noticeConfig) {
            $res['NoticeConfig'] = $this->noticeConfig;
        }

        if (null !== $this->noticeContacts) {
            $res['NoticeContacts'] = $this->noticeContacts;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->routeStrategy) {
            $res['RouteStrategy'] = $this->routeStrategy;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->startTimeType) {
            $res['StartTimeType'] = $this->startTimeType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }

        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->updater) {
            $res['Updater'] = $this->updater;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        if (null !== $this->xattrs) {
            $res['Xattrs'] = $this->xattrs;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AttemptInterval'])) {
            $model->attemptInterval = $map['AttemptInterval'];
        }

        if (isset($map['Calendar'])) {
            $model->calendar = $map['Calendar'];
        }

        if (isset($map['ChildJobId'])) {
            $model->childJobId = $map['ChildJobId'];
        }

        if (isset($map['CleanMode'])) {
            $model->cleanMode = $map['CleanMode'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CurrentExecuteStatus'])) {
            $model->currentExecuteStatus = $map['CurrentExecuteStatus'];
        }

        if (isset($map['DataOffset'])) {
            $model->dataOffset = $map['DataOffset'];
        }

        if (isset($map['DependentStrategy'])) {
            $model->dependentStrategy = $map['DependentStrategy'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExecutorBlockStrategy'])) {
            $model->executorBlockStrategy = $map['ExecutorBlockStrategy'];
        }

        if (isset($map['JobHandler'])) {
            $model->jobHandler = $map['JobHandler'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['LastExecuteEndTime'])) {
            $model->lastExecuteEndTime = $map['LastExecuteEndTime'];
        }

        if (isset($map['LastExecuteStatus'])) {
            $model->lastExecuteStatus = $map['LastExecuteStatus'];
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

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['NoticeConfig'])) {
            $model->noticeConfig = $map['NoticeConfig'];
        }

        if (isset($map['NoticeContacts'])) {
            $model->noticeContacts = $map['NoticeContacts'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RouteStrategy'])) {
            $model->routeStrategy = $map['RouteStrategy'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['StartTimeType'])) {
            $model->startTimeType = $map['StartTimeType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }

        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['Updater'])) {
            $model->updater = $map['Updater'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        if (isset($map['Xattrs'])) {
            $model->xattrs = $map['Xattrs'];
        }

        return $model;
    }
}
