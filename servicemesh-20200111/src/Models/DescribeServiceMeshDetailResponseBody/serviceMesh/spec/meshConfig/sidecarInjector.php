<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector\initCNIConfiguration;
use AlibabaCloud\Tea\Model;

class sidecarInjector extends Model
{
    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var initCNIConfiguration
     */
    public $initCNIConfiguration;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;
    protected $_name = [
        'enableNamespacesByDefault'    => 'EnableNamespacesByDefault',
        'requestMemory'                => 'RequestMemory',
        'limitMemory'                  => 'LimitMemory',
        'requestCPU'                   => 'RequestCPU',
        'autoInjectionPolicyEnabled'   => 'AutoInjectionPolicyEnabled',
        'limitCPU'                     => 'LimitCPU',
        'initCNIConfiguration'         => 'InitCNIConfiguration',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->initCNIConfiguration) {
            $res['InitCNIConfiguration'] = null !== $this->initCNIConfiguration ? $this->initCNIConfiguration->toMap() : null;
        }
        if (null !== $this->sidecarInjectorWebhookAsYaml) {
            $res['SidecarInjectorWebhookAsYaml'] = $this->sidecarInjectorWebhookAsYaml;
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
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['InitCNIConfiguration'])) {
            $model->initCNIConfiguration = initCNIConfiguration::fromMap($map['InitCNIConfiguration']);
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }

        return $model;
    }
}
