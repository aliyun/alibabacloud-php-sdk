<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var mixed[][]
     */
    public $intentTags;

    /**
     * @var string[]
     */
    public $personalityTags;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateType;
    protected $_name = [
        'intentTags' => 'IntentTags',
        'personalityTags' => 'PersonalityTags',
        'properties' => 'Properties',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (\is_array($this->intentTags)) {
            Model::validateArray($this->intentTags);
        }
        if (\is_array($this->personalityTags)) {
            Model::validateArray($this->personalityTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intentTags) {
            if (\is_array($this->intentTags)) {
                $res['IntentTags'] = [];
                $n1 = 0;
                foreach ($this->intentTags as $item1) {
                    if (\is_array($item1)) {
                        $res['IntentTags'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['IntentTags'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->personalityTags) {
            if (\is_array($this->personalityTags)) {
                $res['PersonalityTags'] = [];
                $n1 = 0;
                foreach ($this->personalityTags as $item1) {
                    $res['PersonalityTags'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = [];
                $n1 = 0;
                foreach ($map['IntentTags'] as $item1) {
                    if (!empty($item1)) {
                        $model->intentTags[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->intentTags[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['PersonalityTags'])) {
            if (!empty($map['PersonalityTags'])) {
                $model->personalityTags = [];
                $n1 = 0;
                foreach ($map['PersonalityTags'] as $item1) {
                    $model->personalityTags[$n1++] = $item1;
                }
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
