<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector;

use AlibabaCloud\Tea\Model;

class initCNIConfiguration extends Model
{
    /**
     * @description Indicates whether the CNI plug-in is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The namespaces to exclude. The CNI plug-in ignores pods in the excluded namespaces.
     *
     * @example kube-system,istio-system
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
