<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomTemplateRequest extends Model
{
    /**
     * @description The template name.
     *
     * @example test-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The [template parameters](https://help.aliyun.com/document_detail/448291.html).
     *
     * @example {"param": "sample"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The template ID.
     *
     * This parameter is required.
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
