<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetIdleInstanceCullerResponseBody extends Model
{
    /**
     * @description The status code. Valid values:
     *
     *   InternalError: an internal error. All errors, except for parameter validation errors, are classified as internal errors.
     *   ValidationError: a parameter validation error.
     *
     * @example ValidationError
     *
     * @var string
     */
    public $code;

    /**
     * @description The CPU utilization threshold. Unit: percentage. Valid values: 1 to 100. If the CPU utilization of the instance is lower than this threshold, the instance is considered idle.
     *
     * @example 20
     *
     * @var int
     */
    public $cpuPercentThreshold;

    /**
     * @description The GPU utilization threshold. Unit: percentage. Valid values: 1 to 100. This parameter takes effect only if the instance is of the GPU instance type. If both CPU and GPU utilization is lower than the thresholds, the instance is considered idle.
     *
     * @example 10
     *
     * @var int
     */
    public $gpuPercentThreshold;

    /**
     * @description The time duration for which the instance is idle. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $idleTimeInMinutes;

    /**
     * @description The instance ID.
     *
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum time duration for which the instance is idle. Unit: minutes. If the time duration for which the instance is idle exceeds this value, the system automatically stops the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $maxIdleTimeInMinutes;

    /**
     * @description The error message.
     *
     * @example "XXX"
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example E7D55162-4489-1619-AAF5-3F97D5FCA948
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     *   true
     *   false
     *
     * @example true
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetIdleInstanceCullerResponseBody
     */
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
