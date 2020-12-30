<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class ValidateConfigSettingRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $optionSettings;
    protected $_name = [
        'envId'          => 'EnvId',
        'templateId'     => 'TemplateId',
        'stackId'        => 'StackId',
        'optionSettings' => 'OptionSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->optionSettings) {
            $res['OptionSettings'] = $this->optionSettings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateConfigSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['OptionSettings'])) {
            $model->optionSettings = $map['OptionSettings'];
        }

        return $model;
    }
}
