<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Dara\Model;

class sidecarProxyInitResourceRequest extends Model
{
    /**
     * @var string
     */
    public $resourceCPURequest;

    /**
     * @var string
     */
    public $resourceMemoryRequest;
    protected $_name = [
        'resourceCPURequest' => 'ResourceCPURequest',
        'resourceMemoryRequest' => 'ResourceMemoryRequest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
