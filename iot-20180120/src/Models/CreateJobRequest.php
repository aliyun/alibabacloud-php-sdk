<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobDocument;

    /**
     * @var mixed[]
     */
    public $jobFile;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var mixed[]
     */
    public $rolloutConfig;

    /**
     * @var int
     */
    public $scheduledTime;

    /**
     * @var mixed[]
     */
    public $targetConfig;

    /**
     * @var mixed[]
     */
    public $timeoutConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description'   => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'jobDocument'   => 'JobDocument',
        'jobFile'       => 'JobFile',
        'jobName'       => 'JobName',
        'rolloutConfig' => 'RolloutConfig',
        'scheduledTime' => 'ScheduledTime',
        'targetConfig'  => 'TargetConfig',
        'timeoutConfig' => 'TimeoutConfig',
        'type'          => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('jobDocument', $this->jobDocument, true);
        Model::validateRequired('jobName', $this->jobName, true);
        Model::validateRequired('targetConfig', $this->targetConfig, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }
        if (null !== $this->jobFile) {
            $res['JobFile'] = $this->jobFile;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = $this->rolloutConfig;
        }
        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }
        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = $this->targetConfig;
        }
        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = $this->timeoutConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }
        if (isset($map['JobFile'])) {
            $model->jobFile = $map['JobFile'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = $map['RolloutConfig'];
        }
        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfig = $map['TargetConfig'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = $map['TimeoutConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
