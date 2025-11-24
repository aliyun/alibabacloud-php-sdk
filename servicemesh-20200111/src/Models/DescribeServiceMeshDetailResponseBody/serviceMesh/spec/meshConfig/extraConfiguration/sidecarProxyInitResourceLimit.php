<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class sidecarProxyInitResourceLimit extends Model
{
    /**
     * @var string
     */
    public $resourceCPULimit;

    /**
     * @var string
     */
    public $resourceMemoryLimit;
    protected $_name = [
        'resourceCPULimit' => 'ResourceCPULimit',
        'resourceMemoryLimit' => 'ResourceMemoryLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
