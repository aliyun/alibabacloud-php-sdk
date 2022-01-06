<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $rolloutConfig;

    /**
     * @var string
     */
    public $timeoutConfig;
    protected $_name = [
        'description'   => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
        'rolloutConfig' => 'RolloutConfig',
        'timeoutConfig' => 'TimeoutConfig',
    ];

    public function validate()
    {
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = $this->rolloutConfig;
        }
        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = $this->timeoutConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJobRequest
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = $map['RolloutConfig'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = $map['TimeoutConfig'];
        }

        return $model;
    }
}
