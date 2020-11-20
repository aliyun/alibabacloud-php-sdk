<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class sidecarInjector extends Model
{
    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

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
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;
    protected $_name = [
        'enableNamespacesByDefault'    => 'EnableNamespacesByDefault',
        'autoInjectionPolicyEnabled'   => 'AutoInjectionPolicyEnabled',
        'requestCPU'                   => 'RequestCPU',
        'requestMemory'                => 'RequestMemory',
        'limitCPU'                     => 'LimitCPU',
        'limitMemory'                  => 'LimitMemory',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
    ];

    public function validate()
    {
        Model::validateRequired('enableNamespacesByDefault', $this->enableNamespacesByDefault, true);
        Model::validateRequired('autoInjectionPolicyEnabled', $this->autoInjectionPolicyEnabled, true);
        Model::validateRequired('requestCPU', $this->requestCPU, true);
        Model::validateRequired('requestMemory', $this->requestMemory, true);
        Model::validateRequired('limitCPU', $this->limitCPU, true);
        Model::validateRequired('limitMemory', $this->limitMemory, true);
        Model::validateRequired('sidecarInjectorWebhookAsYaml', $this->sidecarInjectorWebhookAsYaml, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
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
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }

        return $model;
    }
}
