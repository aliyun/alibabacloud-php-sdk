<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpdateIstioInjectionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $dataPlaneMode;

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
    public $istioRev;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'dataPlaneMode' => 'DataPlaneMode',
        'enableIstioInjection' => 'EnableIstioInjection',
        'enableSidecarSetInjection' => 'EnableSidecarSetInjection',
        'istioRev' => 'IstioRev',
        'namespace' => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPlaneMode) {
            $res['DataPlaneMode'] = $this->dataPlaneMode;
        }

        if (null !== $this->enableIstioInjection) {
            $res['EnableIstioInjection'] = $this->enableIstioInjection;
        }

        if (null !== $this->enableSidecarSetInjection) {
            $res['EnableSidecarSetInjection'] = $this->enableSidecarSetInjection;
        }

        if (null !== $this->istioRev) {
            $res['IstioRev'] = $this->istioRev;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['DataPlaneMode'])) {
            $model->dataPlaneMode = $map['DataPlaneMode'];
        }

        if (isset($map['EnableIstioInjection'])) {
            $model->enableIstioInjection = $map['EnableIstioInjection'];
        }

        if (isset($map['EnableSidecarSetInjection'])) {
            $model->enableSidecarSetInjection = $map['EnableSidecarSetInjection'];
        }

        if (isset($map['IstioRev'])) {
            $model->istioRev = $map['IstioRev'];
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
