<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class RemoveClusterFromServiceMeshRequest extends Model
{
    /**
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 移除集群时，保留istio-system 命名空间
     *
     * @example false
     *
     * @var bool
     */
    public $reserveNamespace;

    /**
     * @example ce3c25e247da24f3aab9b7edfae83****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'reserveNamespace' => 'ReserveNamespace',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->reserveNamespace) {
            $res['ReserveNamespace'] = $this->reserveNamespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveClusterFromServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ReserveNamespace'])) {
            $model->reserveNamespace = $map['ReserveNamespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
