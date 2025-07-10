<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateAlidingAssistantRequest\tenantContext;

class UpdateAlidingAssistantRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $ext;

    /**
     * @var string
     */
    public $fallbackContent;

    /**
     * @var string[]
     */
    public $feature;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $recommendPrompts;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $welcomeContent;
    protected $_name = [
        'assistantId' => 'AssistantId',
        'description' => 'Description',
        'ext' => 'Ext',
        'fallbackContent' => 'FallbackContent',
        'feature' => 'Feature',
        'icon' => 'Icon',
        'instructions' => 'Instructions',
        'name' => 'Name',
        'recommendPrompts' => 'RecommendPrompts',
        'tenantContext' => 'TenantContext',
        'welcomeContent' => 'WelcomeContent',
    ];

    public function validate()
    {
        if (\is_array($this->ext)) {
            Model::validateArray($this->ext);
        }
        if (\is_array($this->feature)) {
            Model::validateArray($this->feature);
        }
        if (\is_array($this->recommendPrompts)) {
            Model::validateArray($this->recommendPrompts);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['AssistantId'] = $this->assistantId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ext) {
            if (\is_array($this->ext)) {
                $res['Ext'] = [];
                foreach ($this->ext as $key1 => $value1) {
                    $res['Ext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->fallbackContent) {
            $res['FallbackContent'] = $this->fallbackContent;
        }

        if (null !== $this->feature) {
            if (\is_array($this->feature)) {
                $res['Feature'] = [];
                foreach ($this->feature as $key1 => $value1) {
                    $res['Feature'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->instructions) {
            $res['Instructions'] = $this->instructions;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recommendPrompts) {
            if (\is_array($this->recommendPrompts)) {
                $res['RecommendPrompts'] = [];
                $n1 = 0;
                foreach ($this->recommendPrompts as $item1) {
                    $res['RecommendPrompts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->welcomeContent) {
            $res['WelcomeContent'] = $this->welcomeContent;
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
        if (isset($map['AssistantId'])) {
            $model->assistantId = $map['AssistantId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Ext'])) {
            if (!empty($map['Ext'])) {
                $model->ext = [];
                foreach ($map['Ext'] as $key1 => $value1) {
                    $model->ext[$key1] = $value1;
                }
            }
        }

        if (isset($map['FallbackContent'])) {
            $model->fallbackContent = $map['FallbackContent'];
        }

        if (isset($map['Feature'])) {
            if (!empty($map['Feature'])) {
                $model->feature = [];
                foreach ($map['Feature'] as $key1 => $value1) {
                    $model->feature[$key1] = $value1;
                }
            }
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Instructions'])) {
            $model->instructions = $map['Instructions'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecommendPrompts'])) {
            if (!empty($map['RecommendPrompts'])) {
                $model->recommendPrompts = [];
                $n1 = 0;
                foreach ($map['RecommendPrompts'] as $item1) {
                    $model->recommendPrompts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['WelcomeContent'])) {
            $model->welcomeContent = $map['WelcomeContent'];
        }

        return $model;
    }
}
