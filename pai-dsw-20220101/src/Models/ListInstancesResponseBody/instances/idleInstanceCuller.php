<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class idleInstanceCuller extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $cpuPercentThreshold;

    /**
     * @example 10
     *
     * @var int
     */
    public $gpuPercentThreshold;

    /**
     * @example 30
     *
     * @var int
     */
    public $idleTimeInMinutes;

    /**
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 60
     *
     * @var int
     */
    public $maxIdleTimeInMinutes;
    protected $_name = [
        'cpuPercentThreshold'  => 'CpuPercentThreshold',
        'gpuPercentThreshold'  => 'GpuPercentThreshold',
        'idleTimeInMinutes'    => 'IdleTimeInMinutes',
        'instanceId'           => 'InstanceId',
        'maxIdleTimeInMinutes' => 'MaxIdleTimeInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idleInstanceCuller
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
        if (isset($map['IdleTimeInMinutes'])) {
            $model->idleTimeInMinutes = $map['IdleTimeInMinutes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxIdleTimeInMinutes'])) {
            $model->maxIdleTimeInMinutes = $map['MaxIdleTimeInMinutes'];
        }

        return $model;
    }
}
