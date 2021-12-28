<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetSaTokenRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $needRefresh;

    /**
     * @var string
     */
    public $serviceAccountName;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'namespace'          => 'Namespace',
        'needRefresh'        => 'NeedRefresh',
        'serviceAccountName' => 'ServiceAccountName',
        'serviceMeshId'      => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->needRefresh) {
            $res['NeedRefresh'] = $this->needRefresh;
        }
        if (null !== $this->serviceAccountName) {
            $res['ServiceAccountName'] = $this->serviceAccountName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NeedRefresh'])) {
            $model->needRefresh = $map['NeedRefresh'];
        }
        if (isset($map['ServiceAccountName'])) {
            $model->serviceAccountName = $map['ServiceAccountName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
