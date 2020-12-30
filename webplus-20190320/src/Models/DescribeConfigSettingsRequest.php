<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigSettingsRequest extends Model
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
    public $pathName;

    /**
     * @var string
     */
    public $optionName;
    protected $_name = [
        'envId'      => 'EnvId',
        'templateId' => 'TemplateId',
        'pathName'   => 'PathName',
        'optionName' => 'OptionName',
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
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }
        if (null !== $this->optionName) {
            $res['OptionName'] = $this->optionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigSettingsRequest
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
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }
        if (isset($map['OptionName'])) {
            $model->optionName = $map['OptionName'];
        }

        return $model;
    }
}
