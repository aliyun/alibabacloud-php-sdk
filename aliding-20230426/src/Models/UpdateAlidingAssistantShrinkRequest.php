<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlidingAssistantShrinkRequest extends Model
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
     * @var string
     */
    public $extShrink;

    /**
     * @var string
     */
    public $fallbackContent;

    /**
     * @var string
     */
    public $featureShrink;

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
     * @var string
     */
    public $recommendPromptsShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $welcomeContent;
    protected $_name = [
        'assistantId' => 'AssistantId',
        'description' => 'Description',
        'extShrink' => 'Ext',
        'fallbackContent' => 'FallbackContent',
        'featureShrink' => 'Feature',
        'icon' => 'Icon',
        'instructions' => 'Instructions',
        'name' => 'Name',
        'recommendPromptsShrink' => 'RecommendPrompts',
        'tenantContextShrink' => 'TenantContext',
        'welcomeContent' => 'WelcomeContent',
    ];

    public function validate()
    {
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

        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
        }

        if (null !== $this->fallbackContent) {
            $res['FallbackContent'] = $this->fallbackContent;
        }

        if (null !== $this->featureShrink) {
            $res['Feature'] = $this->featureShrink;
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

        if (null !== $this->recommendPromptsShrink) {
            $res['RecommendPrompts'] = $this->recommendPromptsShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->extShrink = $map['Ext'];
        }

        if (isset($map['FallbackContent'])) {
            $model->fallbackContent = $map['FallbackContent'];
        }

        if (isset($map['Feature'])) {
            $model->featureShrink = $map['Feature'];
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
            $model->recommendPromptsShrink = $map['RecommendPrompts'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WelcomeContent'])) {
            $model->welcomeContent = $map['WelcomeContent'];
        }

        return $model;
    }
}
