<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeConfigurationPriceRequest extends Model
{
    /**
     * @var string
     */
    public $bestEffortType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $gpuA10;

    /**
     * @var string
     */
    public $gpuPpu810e;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $newSaeVersion;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $workload;
    protected $_name = [
        'bestEffortType' => 'BestEffortType',
        'cpu' => 'Cpu',
        'gpuA10' => 'GpuA10',
        'gpuPpu810e' => 'GpuPpu810e',
        'memory' => 'Memory',
        'newSaeVersion' => 'NewSaeVersion',
        'resourceType' => 'ResourceType',
        'workload' => 'Workload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bestEffortType) {
            $res['BestEffortType'] = $this->bestEffortType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gpuA10) {
            $res['GpuA10'] = $this->gpuA10;
        }

        if (null !== $this->gpuPpu810e) {
            $res['GpuPpu810e'] = $this->gpuPpu810e;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->newSaeVersion) {
            $res['NewSaeVersion'] = $this->newSaeVersion;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
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
        if (isset($map['BestEffortType'])) {
            $model->bestEffortType = $map['BestEffortType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['GpuA10'])) {
            $model->gpuA10 = $map['GpuA10'];
        }

        if (isset($map['GpuPpu810e'])) {
            $model->gpuPpu810e = $map['GpuPpu810e'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NewSaeVersion'])) {
            $model->newSaeVersion = $map['NewSaeVersion'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
