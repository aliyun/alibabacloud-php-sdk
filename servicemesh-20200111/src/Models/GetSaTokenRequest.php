<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetSaTokenRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceAccountName;

    /**
     * @var bool
     */
    public $needRefresh;
    protected $_name = [
        'serviceMeshId'      => 'ServiceMeshId',
        'namespace'          => 'Namespace',
        'serviceAccountName' => 'ServiceAccountName',
        'needRefresh'        => 'NeedRefresh',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceAccountName) {
            $res['ServiceAccountName'] = $this->serviceAccountName;
        }
        if (null !== $this->needRefresh) {
            $res['NeedRefresh'] = $this->needRefresh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSaTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceAccountName'])) {
            $model->serviceAccountName = $map['ServiceAccountName'];
        }
        if (isset($map['NeedRefresh'])) {
            $model->needRefresh = $map['NeedRefresh'];
        }

        return $model;
    }
}
