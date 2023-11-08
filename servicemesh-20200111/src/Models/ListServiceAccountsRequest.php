<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class ListServiceAccountsRequest extends Model
{
    /**
     * @example ce3c25e247da24f3aab9b7edfae83****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example ce134b0727aa2492db69f6c3880e1****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'namespace'     => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
