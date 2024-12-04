<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @example {     "metadata": {       "name": "实验名称",       "id": "pai_exp_xxxdfafafasfa",       "desc": "实验描述",     },     "nodes": [     ],     "edges": [     ],     "globalParams": [     ],     "globalSettings":[     ]  }
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detail;

    /**
     * @example URL://xxx
     *
     * @var string
     */
    public $docLink;

    /**
     * @example URL://xxx
     *
     * @var string
     */
    public $imageLink;

    /**
     * @var mixed[][]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @example template-12345
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'content'      => 'Content',
        'description'  => 'Description',
        'detail'       => 'Detail',
        'docLink'      => 'DocLink',
        'imageLink'    => 'ImageLink',
        'labels'       => 'Labels',
        'name'         => 'Name',
        'requestId'    => 'RequestId',
        'sourceId'     => 'SourceId',
        'sourceType'   => 'SourceType',
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->docLink) {
            $res['DocLink'] = $this->docLink;
        }
        if (null !== $this->imageLink) {
            $res['ImageLink'] = $this->imageLink;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DocLink'])) {
            $model->docLink = $map['DocLink'];
        }
        if (isset($map['ImageLink'])) {
            $model->imageLink = $map['ImageLink'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
