<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent\templateConfig;
use AlibabaCloud\Tea\Model;

class templateContent extends Model
{
    /**
     * @description The category of the template. Valid values:
     *
     *   system
     *   customized
     *
     * @example customized
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the template was created.
     *
     * @example 2022-07-25T06:15:14Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the template.
     *
     * @example my-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The configuration of the template.
     *
     * @var templateConfig
     */
    public $templateConfig;

    /**
     * @description The template ID.
     *
     * @example bcfa57950bc649b2abfb476ecd36ea4f
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The type of the template.
     *
     * @example normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'       => 'Category',
        'createTime'     => 'CreateTime',
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
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
     * @return templateContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = templateConfig::fromMap($map['TemplateConfig']);
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
