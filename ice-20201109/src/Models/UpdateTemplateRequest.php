<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @example 参见模板Config文档
     *
     * @var string
     */
    public $config;

    /**
     * @description The URL of the template thumbnail.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/cover.jpg
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description The name of the online editing template.
     *
     * @example 视频添加水印模板
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the preview video.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description The IDs of the materials associated with the template for use by the regular template editor.
     *
     * @example {"video":["******c04f1d4a06996144cc1a******","******cb7db64841b159b4f2ea******"],"audio":["******c04f1d4a06996144cc1a******"],"image":["******c04f1d4a06996144cc1a******"]}
     *
     * @var string
     */
    public $relatedMediaids;

    /**
     * @description The source from which the template is modified. Default value: OpenAPI. Valid values:
     *
     *   AliyunConsole
     *   OpenAPI
     *   WebSDK
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $source;

    /**
     * @description The template state. Valid values:
     *
     *   Available: The template is available.
     *   Created: The template is created but not ready for use.
     *   Uploading: The video is being uploaded.
     *   Processing: The advanced template is being processed.
     *   UploadFailed: Failed to upload the video.
     *   ProcessFailed: Failed to process the advanced template.
     *
     * >  After an advanced template is created, it enters the Processing state. In this case, the template is unavailable. The template can be used only when it is in the Available state. The time required for template processing varies based on the size of the template file. Generally, it ranges from 10 seconds to 5 minutes.
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the online editing template. You can obtain the template ID in the [Intelligent Media Services (IMS) console](https://ice.console.aliyun.com/production/template/list/common) or the response parameters of the [AddTemplate](https://help.aliyun.com/document_detail/441161.html) operation.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'config'          => 'Config',
        'coverUrl'        => 'CoverUrl',
        'name'            => 'Name',
        'previewMedia'    => 'PreviewMedia',
        'relatedMediaids' => 'RelatedMediaids',
        'source'          => 'Source',
        'status'          => 'Status',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->relatedMediaids) {
            $res['RelatedMediaids'] = $this->relatedMediaids;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['RelatedMediaids'])) {
            $model->relatedMediaids = $map['RelatedMediaids'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
