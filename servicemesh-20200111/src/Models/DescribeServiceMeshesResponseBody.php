<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the ASM instances.
     *
     * @var serviceMeshes[]
     */
    public $serviceMeshes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'serviceMeshes' => 'ServiceMeshes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceMeshes) {
            $res['ServiceMeshes'] = [];
            if (null !== $this->serviceMeshes && \is_array($this->serviceMeshes)) {
                $n = 0;
                foreach ($this->serviceMeshes as $item) {
                    $res['ServiceMeshes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceMeshes'])) {
            if (!empty($map['ServiceMeshes'])) {
                $model->serviceMeshes = [];
                $n                    = 0;
                foreach ($map['ServiceMeshes'] as $item) {
                    $model->serviceMeshes[$n++] = null !== $item ? serviceMeshes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
