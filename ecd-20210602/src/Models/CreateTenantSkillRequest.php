<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;

class CreateTenantSkillRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $envVars;

    /**
     * @var string
     */
    public $iconETag;

    /**
     * @var string
     */
    public $skillChannel;

    /**
     * @var string
     */
    public $skillIcon;

    /**
     * @var string
     */
    public $skillVersion;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $taskKey;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'envVars' => 'EnvVars',
        'iconETag' => 'IconETag',
        'skillChannel' => 'SkillChannel',
        'skillIcon' => 'SkillIcon',
        'skillVersion' => 'SkillVersion',
        'slug' => 'Slug',
        'taskKey' => 'TaskKey',
    ];

    public function validate()
    {
        if (\is_array($this->envVars)) {
            Model::validateArray($this->envVars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->envVars) {
            if (\is_array($this->envVars)) {
                $res['EnvVars'] = [];
                foreach ($this->envVars as $key1 => $value1) {
                    $res['EnvVars'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->iconETag) {
            $res['IconETag'] = $this->iconETag;
        }

        if (null !== $this->skillChannel) {
            $res['SkillChannel'] = $this->skillChannel;
        }

        if (null !== $this->skillIcon) {
            $res['SkillIcon'] = $this->skillIcon;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EnvVars'])) {
            if (!empty($map['EnvVars'])) {
                $model->envVars = [];
                foreach ($map['EnvVars'] as $key1 => $value1) {
                    $model->envVars[$key1] = $value1;
                }
            }
        }

        if (isset($map['IconETag'])) {
            $model->iconETag = $map['IconETag'];
        }

        if (isset($map['SkillChannel'])) {
            $model->skillChannel = $map['SkillChannel'];
        }

        if (isset($map['SkillIcon'])) {
            $model->skillIcon = $map['SkillIcon'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }

        return $model;
    }
}
