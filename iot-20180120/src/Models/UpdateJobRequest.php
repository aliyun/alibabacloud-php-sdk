<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
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
     * @var mixed[]
     */
    public $timeoutConfig;

    /**
     * @var mixed[]
     */
    public $rolloutConfig;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'description'   => 'Description',
        'timeoutConfig' => 'TimeoutConfig',
        'rolloutConfig' => 'RolloutConfig',
        'jobId'         => 'JobId',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
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
        if (null !== $this->timeoutConfig) {
            $res['TimeoutConfig'] = $this->timeoutConfig;
        }
        if (null !== $this->rolloutConfig) {
            $res['RolloutConfig'] = $this->rolloutConfig;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfig = $map['TimeoutConfig'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfig = $map['RolloutConfig'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
