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
    public $autoInjectionPolicyEnabled;

    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var initCNIConfiguration
     */
    public $initCNIConfiguration;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;
    protected $_name = [
        'autoInjectionPolicyEnabled'   => 'AutoInjectionPolicyEnabled',
        'enableNamespacesByDefault'    => 'EnableNamespacesByDefault',
        'initCNIConfiguration'         => 'InitCNIConfiguration',
        'limitCPU'                     => 'LimitCPU',
        'limitMemory'                  => 'LimitMemory',
        'requestCPU'                   => 'RequestCPU',
        'requestMemory'                => 'RequestMemory',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
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
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
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
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }
        if (isset($map['InitCNIConfiguration'])) {
            $model->initCNIConfiguration = initCNIConfiguration::fromMap($map['InitCNIConfiguration']);
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }

        return $model;
    }
}
