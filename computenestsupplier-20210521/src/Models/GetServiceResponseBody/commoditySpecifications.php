<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class commoditySpecifications extends Model
{
    /**
     * @var string
     */
    public $predefinedParameterName;

    /**
     * @example yuncode4814xxxxxx
     *
     * @var string
     */
    public $specificationCode;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'predefinedParameterName' => 'PredefinedParameterName',
        'specificationCode'       => 'SpecificationCode',
        'templateName'            => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predefinedParameterName) {
            $res['PredefinedParameterName'] = $this->predefinedParameterName;
        }
        if (null !== $this->specificationCode) {
            $res['SpecificationCode'] = $this->specificationCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commoditySpecifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredefinedParameterName'])) {
            $model->predefinedParameterName = $map['PredefinedParameterName'];
        }
        if (isset($map['SpecificationCode'])) {
            $model->specificationCode = $map['SpecificationCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
