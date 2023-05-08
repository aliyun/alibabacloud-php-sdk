<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector\initCNIConfiguration;
use AlibabaCloud\Tea\Model;

class sidecarInjector extends Model
{
    /**
     * @description Indicates whether automatic sidecar injection can be enabled by using pod annotations. Valid values:
     *
     *   `true`: Automatic sidecar injection can be enabled by using pod annotations.
     *   `false`: Automatic sidecar injection cannot be enabled by using pod annotations.
     *
     * @example true
     *
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @description Indicates whether automatic sidecar injection is enabled for all namespaces. Valid values:
     *
     *   `true`: Automatic sidecar injection is enabled for all namespaces.
     *   `false`: Automatic sidecar injection is not enabled for all namespaces.
     *
     * @example false
     *
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @description The configurations of Container Network Interface (CNI).
     *
     * @var initCNIConfiguration
     */
    public $initCNIConfiguration;

    /**
     * @description The maximum number of CPU cores that are available to the sidecar injector pod.
     *
     * @example 4000m
     *
     * @var string
     */
    public $limitCPU;

    /**
     * @description The maximum size of the memory that is available to the sidecar injector pod.
     *
     * @example 2048Mi
     *
     * @var string
     */
    public $limitMemory;

    /**
     * @description The number of CPU cores that are requested by the sidecar injector pod.
     *
     * @example 1000m
     *
     * @var string
     */
    public $requestCPU;

    /**
     * @description The size of the memory that is requested by the sidecar injector pod.
     *
     * @example 512Mi
     *
     * @var string
     */
    public $requestMemory;

    /**
     * @description The number of component replicas that are used for sidecar injection. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $sidecarInjectorNum;

    /**
     * @description Other configurations of automatic sidecar injection, in the YAML format. For more information, see [Enable automatic sidecar injection by using multiple methods](~~186136~~).
     *
     * @example {"injectedAnnotations":{"test/istio-init":"runtime/default2","test/istio-proxy":"runtime/default"},"replicaCount":2,"nodeSelector":{"beta.kubernetes.io/os":"linux"}}
     *
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
        'sidecarInjectorNum'           => 'SidecarInjectorNum',
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
        if (null !== $this->sidecarInjectorNum) {
            $res['SidecarInjectorNum'] = $this->sidecarInjectorNum;
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
        if (isset($map['SidecarInjectorNum'])) {
            $model->sidecarInjectorNum = $map['SidecarInjectorNum'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }

        return $model;
    }
}
