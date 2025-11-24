<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh;

class DescribeServiceMeshDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceMesh
     */
    public $serviceMesh;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceMesh' => 'ServiceMesh',
    ];

    public function validate()
    {
        if (null !== $this->serviceMesh) {
            $this->serviceMesh->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceMesh) {
            $res['ServiceMesh'] = null !== $this->serviceMesh ? $this->serviceMesh->toArray($noStream) : $this->serviceMesh;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceMesh'])) {
            $model->serviceMesh = serviceMesh::fromMap($map['ServiceMesh']);
        }

        return $model;
    }
}
