<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobRequest extends Model
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
    public $jobId;

    /**
     * @var mixed[]
     */
    public $rolloutConfig;

    /**
     * @var mixed[]
     */
    public $timeoutConfig;
    protected $_name = [
        'description' => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'jobId' => 'JobId',
        'rolloutConfig' => 'RolloutConfig',
        'timeoutConfig' => 'TimeoutConfig',
    ];

    public function validate()
    {
        if (\is_array($this->rolloutConfig)) {
            Model::validateArray($this->rolloutConfig);
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

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->rolloutConfig) {
            if (\is_array($this->rolloutConfig)) {
                $res['RolloutConfig'] = [];
                foreach ($this->rolloutConfig as $key1 => $value1) {
                    $res['RolloutConfig'][$key1] = $value1;
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

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RolloutConfig'])) {
            if (!empty($map['RolloutConfig'])) {
                $model->rolloutConfig = [];
                foreach ($map['RolloutConfig'] as $key1 => $value1) {
                    $model->rolloutConfig[$key1] = $value1;
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

        return $model;
    }
}
