<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $previewMedia;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $relatedMediaids;
    protected $_name = [
        'templateId'      => 'TemplateId',
        'name'            => 'Name',
        'type'            => 'Type',
        'config'          => 'Config',
        'coverUrl'        => 'CoverUrl',
        'previewMedia'    => 'PreviewMedia',
        'status'          => 'Status',
        'source'          => 'Source',
        'relatedMediaids' => 'RelatedMediaids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->relatedMediaids) {
            $res['RelatedMediaids'] = $this->relatedMediaids;
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RelatedMediaids'])) {
            $model->relatedMediaids = $map['RelatedMediaids'];
        }

        return $model;
    }
}
