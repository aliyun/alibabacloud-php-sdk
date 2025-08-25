<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $descInfo;

    /**
     * @var string
     */
    public $iconUrls;

    /**
     * @var string
     */
    public $imageUrls;

    /**
     * @var int
     */
    public $jumpAction;

    /**
     * @var int
     */
    public $pushStyle;

    /**
     * @var int
     */
    public $showStyle;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $variables;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'content' => 'Content',
        'descInfo' => 'DescInfo',
        'iconUrls' => 'IconUrls',
        'imageUrls' => 'ImageUrls',
        'jumpAction' => 'JumpAction',
        'pushStyle' => 'PushStyle',
        'showStyle' => 'ShowStyle',
        'templateName' => 'TemplateName',
        'tenantId' => 'TenantId',
        'title' => 'Title',
        'uri' => 'Uri',
        'variables' => 'Variables',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->descInfo) {
            $res['DescInfo'] = $this->descInfo;
        }

        if (null !== $this->iconUrls) {
            $res['IconUrls'] = $this->iconUrls;
        }

        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }

        if (null !== $this->jumpAction) {
            $res['JumpAction'] = $this->jumpAction;
        }

        if (null !== $this->pushStyle) {
            $res['PushStyle'] = $this->pushStyle;
        }

        if (null !== $this->showStyle) {
            $res['ShowStyle'] = $this->showStyle;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DescInfo'])) {
            $model->descInfo = $map['DescInfo'];
        }

        if (isset($map['IconUrls'])) {
            $model->iconUrls = $map['IconUrls'];
        }

        if (isset($map['ImageUrls'])) {
            $model->imageUrls = $map['ImageUrls'];
        }

        if (isset($map['JumpAction'])) {
            $model->jumpAction = $map['JumpAction'];
        }

        if (isset($map['PushStyle'])) {
            $model->pushStyle = $map['PushStyle'];
        }

        if (isset($map['ShowStyle'])) {
            $model->showStyle = $map['ShowStyle'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
