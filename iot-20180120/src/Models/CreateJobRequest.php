<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

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
    public $type;

    /**
     * @var string
     */
    public $jobFile;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $timeoutConfig;

    /**
     * @var string
     */
    public $rolloutConfig;

    /**
     * @var string
     */
    public $targetConfig;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'description'   => 'Description',
        'jobDocument'   => 'JobDocument',
        'type'          => 'Type',
        'jobFile'       => 'JobFile',
        'jobName'       => 'JobName',
        'timeoutConfig' => 'TimeoutConfig',
        'rolloutConfig' => 'RolloutConfig',
        'targetConfig'  => 'TargetConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->jobFile) {
            $res['JobFile'] = $this->jobFile;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = $this->timeoutConfig;
        }
        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = $this->rolloutConfig;
        }
        if (null !== $this->targetConfig) {
            $res['TargetConfig'] = $this->targetConfig;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['JobFile'])) {
            $model->jobFile = $map['JobFile'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = $map['TimeoutConfig'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = $map['RolloutConfig'];
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfig = $map['TargetConfig'];
        }

        return $model;
    }
}
