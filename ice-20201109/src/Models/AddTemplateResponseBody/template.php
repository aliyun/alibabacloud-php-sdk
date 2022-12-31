<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
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
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $modifiedSource;

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
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example ****01bf24bf41c78b2754cb3187****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example Timeline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'         => 'Config',
        'coverUrl'       => 'CoverUrl',
        'createSource'   => 'CreateSource',
        'modifiedSource' => 'ModifiedSource',
        'name'           => 'Name',
        'previewMedia'   => 'PreviewMedia',
        'status'         => 'Status',
        'templateId'     => 'TemplateId',
        'type'           => 'Type',
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
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
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
     * @return template
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
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
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
