<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes;

class DescribeServiceMeshesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceMeshes[]
     */
    public $serviceMeshes;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceMeshes' => 'ServiceMeshes',
    ];

    public function validate()
    {
        if (\is_array($this->serviceMeshes)) {
            Model::validateArray($this->serviceMeshes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceMeshes) {
            if (\is_array($this->serviceMeshes)) {
                $res['ServiceMeshes'] = [];
                $n1 = 0;
                foreach ($this->serviceMeshes as $item1) {
                    $res['ServiceMeshes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ServiceMeshes'])) {
            if (!empty($map['ServiceMeshes'])) {
                $model->serviceMeshes = [];
                $n1 = 0;
                foreach ($map['ServiceMeshes'] as $item1) {
                    $model->serviceMeshes[$n1] = serviceMeshes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
