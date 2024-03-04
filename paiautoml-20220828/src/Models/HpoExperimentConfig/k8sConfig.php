<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class k8sConfig extends Model
{
    /**
     * @var string
     */
    public $nniContainerCpuLimit;

    /**
     * @var string
     */
    public $nniContainerMemoryLimit;

    /**
     * @var string
     */
    public $nniContainerRequestedCpu;

    /**
     * @var string
     */
    public $nniContainerRequestedMemory;
    protected $_name = [
        'nniContainerCpuLimit'        => 'nni_container_cpu_limit',
        'nniContainerMemoryLimit'     => 'nni_container_memory_limit',
        'nniContainerRequestedCpu'    => 'nni_container_requested_cpu',
        'nniContainerRequestedMemory' => 'nni_container_requested_memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nniContainerCpuLimit) {
            $res['nni_container_cpu_limit'] = $this->nniContainerCpuLimit;
        }
        if (null !== $this->nniContainerMemoryLimit) {
            $res['nni_container_memory_limit'] = $this->nniContainerMemoryLimit;
        }
        if (null !== $this->nniContainerRequestedCpu) {
            $res['nni_container_requested_cpu'] = $this->nniContainerRequestedCpu;
        }
        if (null !== $this->nniContainerRequestedMemory) {
            $res['nni_container_requested_memory'] = $this->nniContainerRequestedMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nni_container_cpu_limit'])) {
            $model->nniContainerCpuLimit = $map['nni_container_cpu_limit'];
        }
        if (isset($map['nni_container_memory_limit'])) {
            $model->nniContainerMemoryLimit = $map['nni_container_memory_limit'];
        }
        if (isset($map['nni_container_requested_cpu'])) {
            $model->nniContainerRequestedCpu = $map['nni_container_requested_cpu'];
        }
        if (isset($map['nni_container_requested_memory'])) {
            $model->nniContainerRequestedMemory = $map['nni_container_requested_memory'];
        }

        return $model;
    }
}
