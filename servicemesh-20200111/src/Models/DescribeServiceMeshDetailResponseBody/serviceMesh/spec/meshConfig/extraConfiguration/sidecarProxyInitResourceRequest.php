<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class sidecarProxyInitResourceRequest extends Model
{
    /**
     * @description The number of CPU cores that are requested by the istio-init container.
     *
     * @example 10m
     *
     * @var string
     */
    public $resourceCPURequest;

    /**
     * @description The size of the memory that is requested by the istio-init container.
     *
     * @example 10Mi
     *
     * @var string
     */
    public $resourceMemoryRequest;
    protected $_name = [
        'resourceCPURequest'    => 'ResourceCPURequest',
        'resourceMemoryRequest' => 'ResourceMemoryRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCPURequest) {
            $res['ResourceCPURequest'] = $this->resourceCPURequest;
        }
        if (null !== $this->resourceMemoryRequest) {
            $res['ResourceMemoryRequest'] = $this->resourceMemoryRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sidecarProxyInitResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCPURequest'])) {
            $model->resourceCPURequest = $map['ResourceCPURequest'];
        }
        if (isset($map['ResourceMemoryRequest'])) {
            $model->resourceMemoryRequest = $map['ResourceMemoryRequest'];
        }

        return $model;
    }
}
