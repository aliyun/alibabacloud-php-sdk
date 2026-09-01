<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateInput extends Model
{
    /**
     * @var CreateTemplateBuildConfig
     */
    public $buildConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var CreateTemplateRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @var string
     */
    public $teamID;
    protected $_name = [
        'buildConfig' => 'buildConfig',
        'name' => 'name',
        'runtimeConfig' => 'runtimeConfig',
        'teamID' => 'teamID',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->runtimeConfig) {
            $res['runtimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toArray($noStream) : $this->runtimeConfig;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
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
            $model->buildConfig = CreateTemplateBuildConfig::fromMap($map['buildConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['runtimeConfig'])) {
            $model->runtimeConfig = CreateTemplateRuntimeConfig::fromMap($map['runtimeConfig']);
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        return $model;
    }
}
