<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateInput\resourceTags;

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
     * @var resourceTags[]
     */
    public $resourceTags;

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
        'resourceTags' => 'resourceTags',
        'runtimeConfig' => 'runtimeConfig',
        'teamID' => 'teamID',
    ];

    public function validate()
    {
        if (null !== $this->buildConfig) {
            $this->buildConfig->validate();
        }
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
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

        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['resourceTags'] = [];
                $n1 = 0;
                foreach ($this->resourceTags as $item1) {
                    $res['resourceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['resourceTags'])) {
            if (!empty($map['resourceTags'])) {
                $model->resourceTags = [];
                $n1 = 0;
                foreach ($map['resourceTags'] as $item1) {
                    $model->resourceTags[$n1] = resourceTags::fromMap($item1);
                    ++$n1;
                }
            }
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
