<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshCRAggregationRequest extends Model
{
    /**
     * @var string
     */
    public $CPULimit;

    /**
     * @var string
     */
    public $CPURequirement;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $memoryRequirement;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var bool
     */
    public $updatePermission;
    protected $_name = [
        'CPULimit'          => 'CPULimit',
        'CPURequirement'    => 'CPURequirement',
        'enabled'           => 'Enabled',
        'memoryLimit'       => 'MemoryLimit',
        'memoryRequirement' => 'MemoryRequirement',
        'serviceMeshId'     => 'ServiceMeshId',
        'updatePermission'  => 'UpdatePermission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPULimit) {
            $res['CPULimit'] = $this->CPULimit;
        }
        if (null !== $this->CPURequirement) {
            $res['CPURequirement'] = $this->CPURequirement;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequirement) {
            $res['MemoryRequirement'] = $this->memoryRequirement;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->updatePermission) {
            $res['UpdatePermission'] = $this->updatePermission;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeshCRAggregationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPULimit'])) {
            $model->CPULimit = $map['CPULimit'];
        }
        if (isset($map['CPURequirement'])) {
            $model->CPURequirement = $map['CPURequirement'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRequirement'])) {
            $model->memoryRequirement = $map['MemoryRequirement'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['UpdatePermission'])) {
            $model->updatePermission = $map['UpdatePermission'];
        }

        return $model;
    }
}
