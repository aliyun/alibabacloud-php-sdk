<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector\initCNIConfiguration;

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
     * @var int
     */
    public $sidecarInjectorNum;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;
    protected $_name = [
        'autoInjectionPolicyEnabled' => 'AutoInjectionPolicyEnabled',
        'enableNamespacesByDefault' => 'EnableNamespacesByDefault',
        'initCNIConfiguration' => 'InitCNIConfiguration',
        'limitCPU' => 'LimitCPU',
        'limitMemory' => 'LimitMemory',
        'requestCPU' => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
        'sidecarInjectorNum' => 'SidecarInjectorNum',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
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
