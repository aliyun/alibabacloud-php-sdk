<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class GetIdleInstanceCullerResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $cpuPercentThreshold;

    /**
     * @var int
     */
    public $gpuPercentThreshold;

    /**
     * @var int
     */
    public $idleTimeInMinutes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxIdleTimeInMinutes;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'cpuPercentThreshold' => 'CpuPercentThreshold',
        'gpuPercentThreshold' => 'GpuPercentThreshold',
        'idleTimeInMinutes' => 'IdleTimeInMinutes',
        'instanceId' => 'InstanceId',
        'maxIdleTimeInMinutes' => 'MaxIdleTimeInMinutes',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cpuPercentThreshold) {
            $res['CpuPercentThreshold'] = $this->cpuPercentThreshold;
        }

        if (null !== $this->gpuPercentThreshold) {
            $res['GpuPercentThreshold'] = $this->gpuPercentThreshold;
        }

        if (null !== $this->idleTimeInMinutes) {
            $res['IdleTimeInMinutes'] = $this->idleTimeInMinutes;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxIdleTimeInMinutes) {
            $res['MaxIdleTimeInMinutes'] = $this->maxIdleTimeInMinutes;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CpuPercentThreshold'])) {
            $model->cpuPercentThreshold = $map['CpuPercentThreshold'];
        }

        if (isset($map['GpuPercentThreshold'])) {
            $model->gpuPercentThreshold = $map['GpuPercentThreshold'];
        }

        if (isset($map['IdleTimeInMinutes'])) {
            $model->idleTimeInMinutes = $map['IdleTimeInMinutes'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxIdleTimeInMinutes'])) {
            $model->maxIdleTimeInMinutes = $map['MaxIdleTimeInMinutes'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
