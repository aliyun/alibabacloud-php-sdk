<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncRunResponseBody\data\summary;

class data extends Model
{
    /**
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $cancelRequestedAt;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var int
     */
    public $jobConfigVersion;

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
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $pluginRef;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $scheduledAt;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var string
     */
    public $trigger;
    protected $_name = [
        'attempt' => 'Attempt',
        'cancelRequestedAt' => 'CancelRequestedAt',
        'dryRun' => 'DryRun',
        'finishedAt' => 'FinishedAt',
        'jobConfigVersion' => 'JobConfigVersion',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'lastError' => 'LastError',
        'pluginRef' => 'PluginRef',
        'requestId' => 'RequestId',
        'runId' => 'RunId',
        'scheduledAt' => 'ScheduledAt',
        'startedAt' => 'StartedAt',
        'status' => 'Status',
        'summary' => 'Summary',
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempt) {
            $res['Attempt'] = $this->attempt;
        }

        if (null !== $this->cancelRequestedAt) {
            $res['CancelRequestedAt'] = $this->cancelRequestedAt;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->jobConfigVersion) {
            $res['JobConfigVersion'] = $this->jobConfigVersion;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->lastError) {
            $res['LastError'] = $this->lastError;
        }

        if (null !== $this->pluginRef) {
            $res['PluginRef'] = $this->pluginRef;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->scheduledAt) {
            $res['ScheduledAt'] = $this->scheduledAt;
        }

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
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
        if (isset($map['Attempt'])) {
            $model->attempt = $map['Attempt'];
        }

        if (isset($map['CancelRequestedAt'])) {
            $model->cancelRequestedAt = $map['CancelRequestedAt'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['JobConfigVersion'])) {
            $model->jobConfigVersion = $map['JobConfigVersion'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LastError'])) {
            $model->lastError = $map['LastError'];
        }

        if (isset($map['PluginRef'])) {
            $model->pluginRef = $map['PluginRef'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['ScheduledAt'])) {
            $model->scheduledAt = $map['ScheduledAt'];
        }

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }

        return $model;
    }
}
