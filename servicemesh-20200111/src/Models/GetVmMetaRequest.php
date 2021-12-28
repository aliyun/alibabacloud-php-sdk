<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetVmMetaRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceAccount;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $trustDomain;
    protected $_name = [
        'namespace'      => 'Namespace',
        'serviceAccount' => 'ServiceAccount',
        'serviceMeshId'  => 'ServiceMeshId',
        'trustDomain'    => 'TrustDomain',
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
        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->trustDomain) {
            $res['TrustDomain'] = $this->trustDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVmMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['TrustDomain'])) {
            $model->trustDomain = $map['TrustDomain'];
        }

        return $model;
    }
}
