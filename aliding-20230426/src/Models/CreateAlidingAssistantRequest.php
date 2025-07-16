<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateAlidingAssistantRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateAlidingAssistantRequest extends Model
{
    /**
     * @example f5cb37a0fb44441ab7b74c6f4a679dd3
     *
     * @var string
     */
    public $appCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $ext;

    /**
     * @description This parameter is required.
     *
     * @example @lADPDetfgMsFFUvNAkjNAkg
     *
     * @var string
     */
    public $icon;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instructions;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $recommendPrompts;

    /**
     * @description This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $source;

    /**
     * @example chatBot-123
     *
     * @var string
     */
    public $sourceIdentityId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $welcomeContent;
    protected $_name = [
        'appCode' => 'AppCode',
        'description' => 'Description',
        'ext' => 'Ext',
        'icon' => 'Icon',
        'instructions' => 'Instructions',
        'name' => 'Name',
        'recommendPrompts' => 'RecommendPrompts',
        'source' => 'Source',
        'sourceIdentityId' => 'SourceIdentityId',
        'tenantContext' => 'TenantContext',
        'welcomeContent' => 'WelcomeContent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIdentityId) {
            $res['SourceIdentityId'] = $this->sourceIdentityId;
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
     * @return CreateAlidingAssistantRequest
     */
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
            $model->ext = $map['Ext'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIdentityId'])) {
            $model->sourceIdentityId = $map['SourceIdentityId'];
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
