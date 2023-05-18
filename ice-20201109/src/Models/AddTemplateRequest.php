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
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/cover.jpg
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 视频添加水印模板
     *
     * @var string
     */
    public $name;

    /**
     * @example ****01bf24bf41c78b2754cb3187****
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @example {"video":["1805a0c6ca544fb395a06ca683619655"]}
     *
     * @var string
     */
    public $relatedMediaids;

    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $source;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
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
