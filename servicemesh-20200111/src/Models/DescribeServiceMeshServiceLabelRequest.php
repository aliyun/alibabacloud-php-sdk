<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshServiceLabelRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $serviceNames;

    /**
     * @var string
     */
    public $serviceNamespaces;
    protected $_name = [
        'serviceMeshId'     => 'ServiceMeshId',
        'serviceNames'      => 'ServiceNames',
        'serviceNamespaces' => 'ServiceNamespaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->serviceNames) {
            $res['ServiceNames'] = $this->serviceNames;
        }
        if (null !== $this->serviceNamespaces) {
            $res['ServiceNamespaces'] = $this->serviceNamespaces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshServiceLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServiceNames'])) {
            $model->serviceNames = $map['ServiceNames'];
        }
        if (isset($map['ServiceNamespaces'])) {
            $model->serviceNamespaces = $map['ServiceNamespaces'];
        }

        return $model;
    }
}
