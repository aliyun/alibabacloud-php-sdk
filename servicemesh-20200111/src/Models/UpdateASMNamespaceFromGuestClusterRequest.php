<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateASMNamespaceFromGuestClusterRequest extends Model
{
    /**
     * @example c6f6d46583def494ba1f2e2937c8*****
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @example cbf9ca9e6d5dc4c87a3ecd0ebf1e*****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'k8sClusterId'  => 'K8sClusterId',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateASMNamespaceFromGuestClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
