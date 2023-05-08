<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class sidecarProxyInitResourceLimit extends Model
{
    /**
     * @description The maximum number of CPU cores that are available to the istio-init container.
     *
     * @example 2000m
     *
     * @var string
     */
    public $resourceCPULimit;

    /**
     * @description The maximum size of the memory that is available to the istio-init container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $resourceMemoryLimit;
    protected $_name = [
        'resourceCPULimit'    => 'ResourceCPULimit',
        'resourceMemoryLimit' => 'ResourceMemoryLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCPULimit) {
            $res['ResourceCPULimit'] = $this->resourceCPULimit;
        }
        if (null !== $this->resourceMemoryLimit) {
            $res['ResourceMemoryLimit'] = $this->resourceMemoryLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sidecarProxyInitResourceLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCPULimit'])) {
            $model->resourceCPULimit = $map['ResourceCPULimit'];
        }
        if (isset($map['ResourceMemoryLimit'])) {
            $model->resourceMemoryLimit = $map['ResourceMemoryLimit'];
        }

        return $model;
    }
}
