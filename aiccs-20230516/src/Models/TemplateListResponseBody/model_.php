<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description 意向标签
     *
     * @var mixed[][]
     */
    public $intentTags;

    /**
     * @description 个性标签
     *
     * @var string[]
     */
    public $personalityTags;

    /**
     * @description 话术所需参数
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $properties;

    /**
     * @description AI话术ID
     *
     * @example 59
     *
     * @var int
     */
    public $templateId;

    /**
     * @description 话术模板名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @description 模板类型
     *
     * @example 55
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'intentTags'      => 'IntentTags',
        'personalityTags' => 'PersonalityTags',
        'properties'      => 'Properties',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateType'    => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentTags) {
            $res['IntentTags'] = $this->intentTags;
        }
        if (null !== $this->personalityTags) {
            $res['PersonalityTags'] = $this->personalityTags;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = $map['IntentTags'];
            }
        }
        if (isset($map['PersonalityTags'])) {
            if (!empty($map['PersonalityTags'])) {
                $model->personalityTags = $map['PersonalityTags'];
            }
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
