<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

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
        'description' => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'jobDocument' => 'JobDocument',
        'jobFile' => 'JobFile',
        'jobName' => 'JobName',
        'rolloutConfig' => 'RolloutConfig',
        'scheduledTime' => 'ScheduledTime',
        'targetConfig' => 'TargetConfig',
        'timeoutConfig' => 'TimeoutConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->jobFile)) {
            Model::validateArray($this->jobFile);
        }
        if (\is_array($this->rolloutConfig)) {
            Model::validateArray($this->rolloutConfig);
        }
        if (\is_array($this->targetConfig)) {
            Model::validateArray($this->targetConfig);
        }
        if (\is_array($this->timeoutConfig)) {
            Model::validateArray($this->timeoutConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->jobFile)) {
                $res['JobFile'] = [];
                foreach ($this->jobFile as $key1 => $value1) {
                    $res['JobFile'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->rolloutConfig) {
            if (\is_array($this->rolloutConfig)) {
                $res['RolloutConfig'] = [];
                foreach ($this->rolloutConfig as $key1 => $value1) {
                    $res['RolloutConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }

        if (null !== $this->targetConfig) {
            if (\is_array($this->targetConfig)) {
                $res['TargetConfig'] = [];
                foreach ($this->targetConfig as $key1 => $value1) {
                    $res['TargetConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeoutConfig) {
            if (\is_array($this->timeoutConfig)) {
                $res['TimeoutConfig'] = [];
                foreach ($this->timeoutConfig as $key1 => $value1) {
                    $res['TimeoutConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }

        if (isset($map['JobFile'])) {
            if (!empty($map['JobFile'])) {
                $model->jobFile = [];
                foreach ($map['JobFile'] as $key1 => $value1) {
                    $model->jobFile[$key1] = $value1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['RolloutConfig'])) {
            if (!empty($map['RolloutConfig'])) {
                $model->rolloutConfig = [];
                foreach ($map['RolloutConfig'] as $key1 => $value1) {
                    $model->rolloutConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }

        if (isset($map['TargetConfig'])) {
            if (!empty($map['TargetConfig'])) {
                $model->targetConfig = [];
                foreach ($map['TargetConfig'] as $key1 => $value1) {
                    $model->targetConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['TimeoutConfig'])) {
            if (!empty($map['TimeoutConfig'])) {
                $model->timeoutConfig = [];
                foreach ($map['TimeoutConfig'] as $key1 => $value1) {
                    $model->timeoutConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
