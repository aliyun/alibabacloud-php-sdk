<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\jobFile;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\rolloutConfig;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\timeoutConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobDocument;

    /**
     * @var jobFile
     */
    public $jobFile;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var rolloutConfig
     */
    public $rolloutConfig;

    /**
     * @var int
     */
    public $scheduledTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var targetConfig
     */
    public $targetConfig;

    /**
     * @var timeoutConfig
     */
    public $timeoutConfig;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'description' => 'Description',
        'jobDocument' => 'JobDocument',
        'jobFile' => 'JobFile',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'rolloutConfig' => 'RolloutConfig',
        'scheduledTime' => 'ScheduledTime',
        'status' => 'Status',
        'targetConfig' => 'TargetConfig',
        'timeoutConfig' => 'TimeoutConfig',
        'type' => 'Type',
        'utcCreate' => 'UtcCreate',
        'utcModified' => 'UtcModified',
    ];

    public function validate()
    {
        if (null !== $this->jobFile) {
            $this->jobFile->validate();
        }
        if (null !== $this->rolloutConfig) {
            $this->rolloutConfig->validate();
        }
        if (null !== $this->targetConfig) {
            $this->targetConfig->validate();
        }
        if (null !== $this->timeoutConfig) {
            $this->timeoutConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }

        if (null !== $this->jobFile) {
            $res['JobFile'] = null !== $this->jobFile ? $this->jobFile->toArray($noStream) : $this->jobFile;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = null !== $this->rolloutConfig ? $this->rolloutConfig->toArray($noStream) : $this->rolloutConfig;
        }

        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = null !== $this->targetConfig ? $this->targetConfig->toArray($noStream) : $this->targetConfig;
        }

        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = null !== $this->timeoutConfig ? $this->timeoutConfig->toArray($noStream) : $this->timeoutConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }

        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }

        if (isset($map['JobFile'])) {
            $model->jobFile = jobFile::fromMap($map['JobFile']);
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = rolloutConfig::fromMap($map['RolloutConfig']);
        }

        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetConfig'])) {
            $model->targetConfig = targetConfig::fromMap($map['TargetConfig']);
        }

        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = timeoutConfig::fromMap($map['TimeoutConfig']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
