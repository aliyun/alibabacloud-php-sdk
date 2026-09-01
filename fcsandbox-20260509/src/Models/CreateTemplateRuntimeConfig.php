<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateRuntimeConfig extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var bool
     */
    public $internetAccess;

    /**
     * @var CreateTemplateLogConfig
     */
    public $logConfig;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var CreateTemplateSandboxConfig
     */
    public $sandboxConfig;

    /**
     * @var CreateTemplateVPCConfig
     */
    public $vpcConfig;
    protected $_name = [
        'cpu' => 'cpu',
        'diskSize' => 'diskSize',
        'internetAccess' => 'internetAccess',
        'logConfig' => 'logConfig',
        'memorySize' => 'memorySize',
        'sandboxConfig' => 'sandboxConfig',
        'vpcConfig' => 'vpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->sandboxConfig) {
            $this->sandboxConfig->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }

        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }

        if (null !== $this->sandboxConfig) {
            $res['sandboxConfig'] = null !== $this->sandboxConfig ? $this->sandboxConfig->toArray($noStream) : $this->sandboxConfig;
        }

        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }

        if (isset($map['internetAccess'])) {
            $model->internetAccess = $map['internetAccess'];
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = CreateTemplateLogConfig::fromMap($map['logConfig']);
        }

        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }

        if (isset($map['sandboxConfig'])) {
            $model->sandboxConfig = CreateTemplateSandboxConfig::fromMap($map['sandboxConfig']);
        }

        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = CreateTemplateVPCConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
