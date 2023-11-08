<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector\initCNIConfiguration;
use AlibabaCloud\Tea\Model;

class sidecarInjector extends Model
{
    /**
     * @description Indicates whether automatic sidecar proxy injection is enabled by using annotations.
     *
     * @example true
     *
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @description Indicates whether automatic sidecar proxy injection is enabled for all namespaces. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @description The initial configurations of Container Network Interface (CNI).
     *
     * @var initCNIConfiguration
     */
    public $initCNIConfiguration;
    protected $_name = [
        'autoInjectionPolicyEnabled' => 'AutoInjectionPolicyEnabled',
        'enableNamespacesByDefault'  => 'EnableNamespacesByDefault',
        'initCNIConfiguration'       => 'InitCNIConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }
        if (null !== $this->initCNIConfiguration) {
            $res['InitCNIConfiguration'] = null !== $this->initCNIConfiguration ? $this->initCNIConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sidecarInjector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }
        if (isset($map['InitCNIConfiguration'])) {
            $model->initCNIConfiguration = initCNIConfiguration::fromMap($map['InitCNIConfiguration']);
        }

        return $model;
    }
}
