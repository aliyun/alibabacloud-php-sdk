<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data\jobFile;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data\rolloutConfig;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data\targetConfig;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data\timeoutConfig;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $scheduledTime;

    /**
     * @var string
     */
    public $status;

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

    /**
     * @var jobFile
     */
    public $jobFile;

    /**
     * @var rolloutConfig
     */
    public $rolloutConfig;

    /**
     * @var targetConfig
     */
    public $targetConfig;

    /**
     * @var timeoutConfig
     */
    public $timeoutConfig;
    protected $_name = [
        'description'   => 'Description',
        'jobDocument'   => 'JobDocument',
        'jobId'         => 'JobId',
        'jobName'       => 'JobName',
        'scheduledTime' => 'ScheduledTime',
        'status'        => 'Status',
        'type'          => 'Type',
        'utcCreate'     => 'UtcCreate',
        'utcModified'   => 'UtcModified',
        'jobFile'       => 'JobFile',
        'rolloutConfig' => 'RolloutConfig',
        'targetConfig'  => 'TargetConfig',
        'timeoutConfig' => 'TimeoutConfig',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('jobDocument', $this->jobDocument, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('jobName', $this->jobName, true);
        Model::validateRequired('scheduledTime', $this->scheduledTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
        Model::validateRequired('jobFile', $this->jobFile, true);
        Model::validateRequired('rolloutConfig', $this->rolloutConfig, true);
        Model::validateRequired('targetConfig', $this->targetConfig, true);
        Model::validateRequired('timeoutConfig', $this->timeoutConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->jobFile) {
            $res['JobFile'] = null !== $this->jobFile ? $this->jobFile->toMap() : null;
        }
        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = null !== $this->rolloutConfig ? $this->rolloutConfig->toMap() : null;
        }
        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = null !== $this->targetConfig ? $this->targetConfig->toMap() : null;
        }
        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = null !== $this->timeoutConfig ? $this->timeoutConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['JobFile'])) {
            $model->jobFile = jobFile::fromMap($map['JobFile']);
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = rolloutConfig::fromMap($map['RolloutConfig']);
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfig = targetConfig::fromMap($map['TargetConfig']);
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = timeoutConfig::fromMap($map['TimeoutConfig']);
        }

        return $model;
    }
}
