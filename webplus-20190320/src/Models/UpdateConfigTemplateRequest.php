<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $optionSettings;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'templateDescription' => 'TemplateDescription',
        'templateId'          => 'TemplateId',
        'optionSettings'      => 'OptionSettings',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->optionSettings) {
            $res['OptionSettings'] = $this->optionSettings;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['OptionSettings'])) {
            $model->optionSettings = $map['OptionSettings'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
