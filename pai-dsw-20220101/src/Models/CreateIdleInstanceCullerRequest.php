<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateIdleInstanceCullerRequest extends Model
{
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
     * @description The maximum time duration for which the instance is idle. Unit: minutes. If the time duration for which the instance is idle exceeds this value, the system automatically stops the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $maxIdleTimeInMinutes;
    protected $_name = [
        'cpuPercentThreshold' => 'CpuPercentThreshold',
        'gpuPercentThreshold' => 'GpuPercentThreshold',
        'maxIdleTimeInMinutes' => 'MaxIdleTimeInMinutes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuPercentThreshold) {
            $res['CpuPercentThreshold'] = $this->cpuPercentThreshold;
        }
        if (null !== $this->gpuPercentThreshold) {
            $res['GpuPercentThreshold'] = $this->gpuPercentThreshold;
        }
        if (null !== $this->maxIdleTimeInMinutes) {
            $res['MaxIdleTimeInMinutes'] = $this->maxIdleTimeInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIdleInstanceCullerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuPercentThreshold'])) {
            $model->cpuPercentThreshold = $map['CpuPercentThreshold'];
        }
        if (isset($map['GpuPercentThreshold'])) {
            $model->gpuPercentThreshold = $map['GpuPercentThreshold'];
        }
        if (isset($map['MaxIdleTimeInMinutes'])) {
            $model->maxIdleTimeInMinutes = $map['MaxIdleTimeInMinutes'];
        }

        return $model;
    }
}
