<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreateMdsCubeResourceRequest extends Model
{
    /**
     * @var string
     */
    public $androidMaxVersion;

    /**
     * @var string
     */
    public $androidMinVersion;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $iosMaxVersion;

    /**
     * @var string
     */
    public $iosMinVersion;

    /**
     * @var string
     */
    public $mockDataUrl;

    /**
     * @var bool
     */
    public $onexFlag;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $previewPictureUrl;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateResourceDesc;

    /**
     * @var string
     */
    public $templateResourceVersion;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'androidMaxVersion' => 'AndroidMaxVersion',
        'androidMinVersion' => 'AndroidMinVersion',
        'appId' => 'AppId',
        'extendInfo' => 'ExtendInfo',
        'fileUrl' => 'FileUrl',
        'iosMaxVersion' => 'IosMaxVersion',
        'iosMinVersion' => 'IosMinVersion',
        'mockDataUrl' => 'MockDataUrl',
        'onexFlag' => 'OnexFlag',
        'platform' => 'Platform',
        'previewPictureUrl' => 'PreviewPictureUrl',
        'templateId' => 'TemplateId',
        'templateResourceDesc' => 'TemplateResourceDesc',
        'templateResourceVersion' => 'TemplateResourceVersion',
        'tenantId' => 'TenantId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidMaxVersion) {
            $res['AndroidMaxVersion'] = $this->androidMaxVersion;
        }

        if (null !== $this->androidMinVersion) {
            $res['AndroidMinVersion'] = $this->androidMinVersion;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->iosMaxVersion) {
            $res['IosMaxVersion'] = $this->iosMaxVersion;
        }

        if (null !== $this->iosMinVersion) {
            $res['IosMinVersion'] = $this->iosMinVersion;
        }

        if (null !== $this->mockDataUrl) {
            $res['MockDataUrl'] = $this->mockDataUrl;
        }

        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->previewPictureUrl) {
            $res['PreviewPictureUrl'] = $this->previewPictureUrl;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateResourceDesc) {
            $res['TemplateResourceDesc'] = $this->templateResourceDesc;
        }

        if (null !== $this->templateResourceVersion) {
            $res['TemplateResourceVersion'] = $this->templateResourceVersion;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AndroidMaxVersion'])) {
            $model->androidMaxVersion = $map['AndroidMaxVersion'];
        }

        if (isset($map['AndroidMinVersion'])) {
            $model->androidMinVersion = $map['AndroidMinVersion'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['IosMaxVersion'])) {
            $model->iosMaxVersion = $map['IosMaxVersion'];
        }

        if (isset($map['IosMinVersion'])) {
            $model->iosMinVersion = $map['IosMinVersion'];
        }

        if (isset($map['MockDataUrl'])) {
            $model->mockDataUrl = $map['MockDataUrl'];
        }

        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PreviewPictureUrl'])) {
            $model->previewPictureUrl = $map['PreviewPictureUrl'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateResourceDesc'])) {
            $model->templateResourceDesc = $map['TemplateResourceDesc'];
        }

        if (isset($map['TemplateResourceVersion'])) {
            $model->templateResourceVersion = $map['TemplateResourceVersion'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
