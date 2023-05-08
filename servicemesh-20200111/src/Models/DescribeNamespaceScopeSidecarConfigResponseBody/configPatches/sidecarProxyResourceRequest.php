<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Tea\Model;

class sidecarProxyResourceRequest extends Model
{
    /**
     * @description The minimum number of CPU cores.
     *
     * @example 60 m
     *
     * @var string
     */
    public $resourceCPURequest;

    /**
     * @description The minimum size of the memory.
     *
     * @example 30 Mi
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
     * @return sidecarProxyResourceRequest
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
