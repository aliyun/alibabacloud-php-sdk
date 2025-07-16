<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateAlidingAssistantRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateAlidingAssistantRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
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
     * @example fallbackContent
     *
     * @var string
     */
    public $fallbackContent;

    /**
     * @var string[]
     */
    public $feature;

    /**
     * @example @lADPDetfgMsFFUvNAkjNAkg
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['AssistantId'] = $this->assistantId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->fallbackContent) {
            $res['FallbackContent'] = $this->fallbackContent;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
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
            $res['RecommendPrompts'] = $this->recommendPrompts;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->welcomeContent) {
            $res['WelcomeContent'] = $this->welcomeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlidingAssistantRequest
     */
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
            $model->ext = $map['Ext'];
        }
        if (isset($map['FallbackContent'])) {
            $model->fallbackContent = $map['FallbackContent'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
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
                $model->recommendPrompts = $map['RecommendPrompts'];
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
