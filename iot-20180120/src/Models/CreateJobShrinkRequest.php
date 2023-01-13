<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
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
     * @var string
     */
    public $jobFileShrink;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $rolloutConfigShrink;

    /**
     * @var int
     */
    public $scheduledTime;

    /**
     * @var string
     */
    public $targetConfigShrink;

    /**
     * @var string
     */
    public $timeoutConfigShrink;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description'         => 'Description',
        'iotInstanceId'       => 'IotInstanceId',
        'jobDocument'         => 'JobDocument',
        'jobFileShrink'       => 'JobFile',
        'jobName'             => 'JobName',
        'rolloutConfigShrink' => 'RolloutConfig',
        'scheduledTime'       => 'ScheduledTime',
        'targetConfigShrink'  => 'TargetConfig',
        'timeoutConfigShrink' => 'TimeoutConfig',
        'type'                => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('jobDocument', $this->jobDocument, true);
        Model::validateRequired('jobName', $this->jobName, true);
        Model::validateRequired('targetConfigShrink', $this->targetConfigShrink, true);
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
        if (null !== $this->jobFileShrink) {
            $res['JobFile'] = $this->jobFileShrink;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->rolloutConfigShrink) {
            $res['RolloutConfig'] = $this->rolloutConfigShrink;
        }
        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }
        if (null !== $this->targetConfigShrink) {
            $res['TargetConfig'] = $this->targetConfigShrink;
        }
        if (null !== $this->timeoutConfigShrink) {
            $res['TimeoutConfig'] = $this->timeoutConfigShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
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
            $model->jobFileShrink = $map['JobFile'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfigShrink = $map['RolloutConfig'];
        }
        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfigShrink = $map['TargetConfig'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfigShrink = $map['TimeoutConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
