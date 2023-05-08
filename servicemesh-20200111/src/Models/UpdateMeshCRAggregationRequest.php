<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshCRAggregationRequest extends Model
{
    /**
     * @description The maximum number of CPU cores that are available for the components installed in the ACK cluster on the data plane if you enable the Kubernetes API to access Istio resources in the ASM instance. You can specify the parameter value in the standard quantity representation used by Kubernetes.
     *
     * @example 1
     *
     * @var string
     */
    public $CPULimit;

    /**
     * @description The number of CPU cores that are requested by the components installed in the Container Service for Kubernetes (ACK) cluster on the data plane if you enable the Kubernetes API to access Istio resources in the ASM instance. You can specify the parameter value in the standard quantity representation used by Kubernetes.
     *
     * @example 1
     *
     * @var string
     */
    public $CPURequirement;

    /**
     * @description Specifies whether to enable the Kubernetes API on the data plane to access Istio resources in the ASM instance. Valid values:
     *
     *   `true`: enables the Kubernetes API to access Istio resources in the ASM instance.
     *   `false`: does not enable the Kubernetes API to access Istio resources in the ASM instance.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The maximum size of the memory that is available for the components installed in the ACK cluster on the data plane if you enable the Kubernetes API to access Istio resources in the ASM instance. You can specify the parameter value in the standard quantity representation used by Kubernetes. 1 Mi equals 1,024 KB.
     *
     * @example 500Mi
     *
     * @var string
     */
    public $memoryLimit;

    /**
     * @description The size of the memory that is requested by the components installed in the ACK cluster on the data plane if you enable the Kubernetes API to access Istio resources in the ASM instance. You can specify the parameter value in the standard quantity representation used by Kubernetes. 1 Mi equals 1,024 KB.
     *
     * @example 500Mi
     *
     * @var string
     */
    public $memoryRequirement;

    /**
     * @description The ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description Specifies whether the Kubernetes API on the data plane uses the public endpoint of the API server to access Istio resources in the ASM instance. Valid values:
     *
     *   `true`: The Kubernetes API on the data plane uses the public endpoint of the API server to access Istio resources in the ASM instance.
     *   `false`: The Kubernetes API on the data plane uses the private endpoint of the API server to access Istio resources in the ASM instance.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $usePublicApiServer;
    protected $_name = [
        'CPULimit'           => 'CPULimit',
        'CPURequirement'     => 'CPURequirement',
        'enabled'            => 'Enabled',
        'memoryLimit'        => 'MemoryLimit',
        'memoryRequirement'  => 'MemoryRequirement',
        'serviceMeshId'      => 'ServiceMeshId',
        'usePublicApiServer' => 'UsePublicApiServer',
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
        if (null !== $this->usePublicApiServer) {
            $res['UsePublicApiServer'] = $this->usePublicApiServer;
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
        if (isset($map['UsePublicApiServer'])) {
            $model->usePublicApiServer = $map['UsePublicApiServer'];
        }

        return $model;
    }
}
