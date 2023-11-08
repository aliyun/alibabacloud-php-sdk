<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class RevokeKubeconfigRequest extends Model
{
    /**
     * @description Specifies whether to return the kubeconfig file for private access.
     *
     *   `true`: returns the kubeconfig file for private access.
     *   `false`: returns the kubeconfig file for public access.
     *
     * @example false
     *
     * @var bool
     */
    public $privateIpAddress;

    /**
     * @description The ID of the ASM instance for which you want to revoke its kubeconfig file.
     *
     * @example cf08a11940e8c46c48bc791fcdb3****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeKubeconfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
