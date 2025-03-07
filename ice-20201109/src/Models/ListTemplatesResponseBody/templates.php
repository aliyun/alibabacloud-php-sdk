<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The clip parameters.
     *
     * @example {"Media1":"mediaId","Text1":"text"}
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The template configurations.
     *
     * @example 参考Timeline模板配置详解
     *
     * @var string
     */
    public $config;

    /**
     * @description The thumbnail URL.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/cover.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The source from which the template was created.
     *
     * Valid values:
     *
     *   AliyunConsole
     *   WebSDK
     *   OpenAPI
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The time when the template was created.
     *
     * @example 2020-12-26T04:11:10Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The source from which the template was modified.
     *
     * Valid values:
     *
     *   AliyunConsole
     *   WebSDK
     *   OpenAPI
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @description The time when the template was last modified.
     *
     * @example 2020-12-26T04:11:10Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The template name.
     *
     * @example 视频添加水印模板
     *
     * @var string
     */
    public $name;

    /**
     * @description The preview media asset.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description The state of the preview media asset.
     *
     * Valid values:
     *
     *   PrepareFail
     *   Init
     *   Normal
     *   Preparing
     *
     * @example Normal
     *
     * @var string
     */
    public $previewMediaStatus;

    /**
     * @description The template state.
     *
     * Valid values:
     *
     *   UploadFailed: Failed to upload the video.
     *   ProcessFailed: Failed to process the advanced template.
     *   Available: The template is available.
     *   Uploading: The video is being uploaded.
     *   Created: The template is created but not ready for use.
     *   Processing: The advanced template is being processed.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The template ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template type.
     *
     * Valid values:
     *
     *   Timeline: regular template.
     *   VETemplate: advanced template.
     *
     * @example Timeline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clipsParam'         => 'ClipsParam',
        'config'             => 'Config',
        'coverURL'           => 'CoverURL',
        'createSource'       => 'CreateSource',
        'creationTime'       => 'CreationTime',
        'modifiedSource'     => 'ModifiedSource',
        'modifiedTime'       => 'ModifiedTime',
        'name'               => 'Name',
        'previewMedia'       => 'PreviewMedia',
        'previewMediaStatus' => 'PreviewMediaStatus',
        'status'             => 'Status',
        'templateId'         => 'TemplateId',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->previewMediaStatus) {
            $res['PreviewMediaStatus'] = $this->previewMediaStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['PreviewMediaStatus'])) {
            $model->previewMediaStatus = $map['PreviewMediaStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
