<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateIstioInjectionConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable Istio automatic sidecar injection.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIstioInjection;

    /**
     * @description Specifies whether to enable automatic sidecar injection by using SidecarSet.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSidecarSetInjection;

    /**
     * @var string
     */
    public $istioRev;

    /**
     * @description The namespace for which you want to modify the sidecar injection setting.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the ASM instance.
     *
     * @example ce2cdbb9d013f447180cf5ca8bb******
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'enableIstioInjection'      => 'EnableIstioInjection',
        'enableSidecarSetInjection' => 'EnableSidecarSetInjection',
        'istioRev'                  => 'IstioRev',
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
