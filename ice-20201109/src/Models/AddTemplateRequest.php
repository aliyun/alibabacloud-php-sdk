<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddTemplateRequest extends Model
{
    /**
     * @example 参见Timeline模板Config文档
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
     * @description The name of the custom template.
     *
     * @example 视频添加水印模板
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the template preview video.
     *
     * @example ****01bf24bf41c78b2754cb3187****
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description The IDs of the materials associated with the template for use by the regular template editor.
     *
     * @example {"video":["1805a0c6ca544fb395a06ca683619655"]}
     *
     * @var string
     */
    public $relatedMediaids;

    /**
     * @description The source from which the template is created. Valid values:
     *
     *   OpenAPI
     *   AliyunConsole
     *   WebSDK
     *
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
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The template type. Valid values:
     *
     *   Timeline: a regular template created based on the timeline of a video editing project, in which multiple materials are arranged in sequence across multiple layers. It can be used to convert text and images into videos, create photo albums, add opening and closing parts, and apply the default watermark.
     *   VETemplate: an advanced template created using effects of Adobe After Effects (AE). It can be used to produce complex animations and advanced media effects.
     *
     *
     * @example Timeline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'          => 'Config',
        'coverUrl'        => 'CoverUrl',
        'name'            => 'Name',
        'previewMedia'    => 'PreviewMedia',
        'relatedMediaids' => 'RelatedMediaids',
        'source'          => 'Source',
        'status'          => 'Status',
        'type'            => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTemplateRequest
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
