<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicUpdateTemplateInput extends Model
{
    /**
     * @var PublicUpdateTemplateBuildConfig
     */
    public $buildConfig;

    /**
     * @var PublicUpdateTemplateRuntimeConfig
     */
    public $runtimeConfig;
    protected $_name = [
        'buildConfig' => 'buildConfig',
        'runtimeConfig' => 'runtimeConfig',
    ];

    public function validate()
    {
        if (null !== $this->buildConfig) {
            $this->buildConfig->validate();
        }
        if (null !== $this->runtimeConfig) {
            $this->runtimeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildConfig) {
            $res['buildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->runtimeConfig) {
            $res['runtimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toArray($noStream) : $this->runtimeConfig;
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
        if (isset($map['buildConfig'])) {
            $model->buildConfig = PublicUpdateTemplateBuildConfig::fromMap($map['buildConfig']);
        }

        if (isset($map['runtimeConfig'])) {
            $model->runtimeConfig = PublicUpdateTemplateRuntimeConfig::fromMap($map['runtimeConfig']);
        }

        return $model;
    }
}
