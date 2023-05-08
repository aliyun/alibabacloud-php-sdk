<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector;

use AlibabaCloud\Tea\Model;

class initCNIConfiguration extends Model
{
    /**
     * @description Indicates whether elevated privileges are required for the istio-init container when you perform traffic redirection for the istio-proxy container. Valid values:
     *
     *   `true`: Elevated privileges are required for the istio-init container.
     *   `false`: Elevated privileges are not required for the istio-init container.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The namespace for which sidecar injection is disabled.
     *
     * @example default,foo
     *
     * @var string
     */
    public $excludeNamespaces;
    protected $_name = [
        'enabled'           => 'Enabled',
        'excludeNamespaces' => 'ExcludeNamespaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->excludeNamespaces) {
            $res['ExcludeNamespaces'] = $this->excludeNamespaces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initCNIConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExcludeNamespaces'])) {
            $model->excludeNamespaces = $map['ExcludeNamespaces'];
        }

        return $model;
    }
}
