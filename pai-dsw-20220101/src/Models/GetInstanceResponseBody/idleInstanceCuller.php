<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class idleInstanceCuller extends Model
{
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
    protected $_name = [
        'cpuPercentThreshold' => 'CpuPercentThreshold',
        'gpuPercentThreshold' => 'GpuPercentThreshold',
        'idleTimeInMinutes' => 'IdleTimeInMinutes',
        'instanceId' => 'InstanceId',
        'maxIdleTimeInMinutes' => 'MaxIdleTimeInMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
