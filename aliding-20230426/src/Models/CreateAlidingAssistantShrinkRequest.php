<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateAlidingAssistantShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

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
     * @var int
     */
    public $source;

    /**
     * @var string
     */
    public $sourceIdentityId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $welcomeContent;
    protected $_name = [
        'appCode' => 'AppCode',
        'description' => 'Description',
        'extShrink' => 'Ext',
        'icon' => 'Icon',
        'instructions' => 'Instructions',
        'name' => 'Name',
        'recommendPromptsShrink' => 'RecommendPrompts',
        'source' => 'Source',
        'sourceIdentityId' => 'SourceIdentityId',
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
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
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

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceIdentityId) {
            $res['SourceIdentityId'] = $this->sourceIdentityId;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Ext'])) {
            $model->extShrink = $map['Ext'];
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

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceIdentityId'])) {
            $model->sourceIdentityId = $map['SourceIdentityId'];
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
