<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\customPromptParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\fieldsParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\serviceInspectionParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\tagCategoryParam;

class instructionTypeParam extends Model
{
    /**
     * @var customPromptParam
     */
    public $customPromptParam;

    /**
     * @var fieldsParam
     */
    public $fieldsParam;

    /**
     * @var serviceInspectionParam
     */
    public $serviceInspectionParam;

    /**
     * @var tagCategoryParam
     */
    public $tagCategoryParam;
    protected $_name = [
        'customPromptParam' => 'CustomPromptParam',
        'fieldsParam' => 'FieldsParam',
        'serviceInspectionParam' => 'ServiceInspectionParam',
        'tagCategoryParam' => 'TagCategoryParam',
    ];

    public function validate()
    {
        if (null !== $this->customPromptParam) {
            $this->customPromptParam->validate();
        }
        if (null !== $this->fieldsParam) {
            $this->fieldsParam->validate();
        }
        if (null !== $this->serviceInspectionParam) {
            $this->serviceInspectionParam->validate();
        }
        if (null !== $this->tagCategoryParam) {
            $this->tagCategoryParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPromptParam) {
            $res['CustomPromptParam'] = null !== $this->customPromptParam ? $this->customPromptParam->toArray($noStream) : $this->customPromptParam;
        }

        if (null !== $this->fieldsParam) {
            $res['FieldsParam'] = null !== $this->fieldsParam ? $this->fieldsParam->toArray($noStream) : $this->fieldsParam;
        }

        if (null !== $this->serviceInspectionParam) {
            $res['ServiceInspectionParam'] = null !== $this->serviceInspectionParam ? $this->serviceInspectionParam->toArray($noStream) : $this->serviceInspectionParam;
        }

        if (null !== $this->tagCategoryParam) {
            $res['TagCategoryParam'] = null !== $this->tagCategoryParam ? $this->tagCategoryParam->toArray($noStream) : $this->tagCategoryParam;
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
        if (isset($map['CustomPromptParam'])) {
            $model->customPromptParam = customPromptParam::fromMap($map['CustomPromptParam']);
        }

        if (isset($map['FieldsParam'])) {
            $model->fieldsParam = fieldsParam::fromMap($map['FieldsParam']);
        }

        if (isset($map['ServiceInspectionParam'])) {
            $model->serviceInspectionParam = serviceInspectionParam::fromMap($map['ServiceInspectionParam']);
        }

        if (isset($map['TagCategoryParam'])) {
            $model->tagCategoryParam = tagCategoryParam::fromMap($map['TagCategoryParam']);
        }

        return $model;
    }
}
