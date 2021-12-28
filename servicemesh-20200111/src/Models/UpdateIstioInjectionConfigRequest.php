<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateIstioInjectionConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enableIstioInjection;

    /**
     * @var bool
     */
    public $enableSidecarSetInjection;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'enableIstioInjection'      => 'EnableIstioInjection',
        'enableSidecarSetInjection' => 'EnableSidecarSetInjection',
        'namespace'                 => 'Namespace',
        'serviceMeshId'             => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableIstioInjection) {
            $res['EnableIstioInjection'] = $this->enableIstioInjection;
        }
        if (null !== $this->enableSidecarSetInjection) {
            $res['EnableSidecarSetInjection'] = $this->enableSidecarSetInjection;
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
     * @return UpdateIstioInjectionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableIstioInjection'])) {
            $model->enableIstioInjection = $map['EnableIstioInjection'];
        }
        if (isset($map['EnableSidecarSetInjection'])) {
            $model->enableSidecarSetInjection = $map['EnableSidecarSetInjection'];
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
