<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector\initCNIConfiguration;

class sidecarInjector extends Model
{
    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var initCNIConfiguration
     */
    public $initCNIConfiguration;
    protected $_name = [
        'autoInjectionPolicyEnabled' => 'AutoInjectionPolicyEnabled',
        'enableNamespacesByDefault' => 'EnableNamespacesByDefault',
        'initCNIConfiguration' => 'InitCNIConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->initCNIConfiguration) {
            $this->initCNIConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }

        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }

        if (null !== $this->initCNIConfiguration) {
            $res['InitCNIConfiguration'] = null !== $this->initCNIConfiguration ? $this->initCNIConfiguration->toArray($noStream) : $this->initCNIConfiguration;
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
