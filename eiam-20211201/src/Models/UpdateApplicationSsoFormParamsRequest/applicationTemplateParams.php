<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationSsoFormParamsRequest;

use AlibabaCloud\Dara\Model;

class applicationTemplateParams extends Model
{
    /**
     * @var string
     */
    public $templateParamName;

    /**
     * @var string
     */
    public $templateParamValue;
    protected $_name = [
        'templateParamName' => 'TemplateParamName',
        'templateParamValue' => 'TemplateParamValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateParamName) {
            $res['TemplateParamName'] = $this->templateParamName;
        }

        if (null !== $this->templateParamValue) {
            $res['TemplateParamValue'] = $this->templateParamValue;
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
        if (isset($map['TemplateParamName'])) {
            $model->templateParamName = $map['TemplateParamName'];
        }

        if (isset($map['TemplateParamValue'])) {
            $model->templateParamValue = $map['TemplateParamValue'];
        }

        return $model;
    }
}
