<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Dara\Model;

class specificationMappings extends Model
{
    /**
     * @var string
     */
    public $specificationCode;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'specificationCode' => 'SpecificationCode',
        'specificationName' => 'SpecificationName',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specificationCode) {
            $res['SpecificationCode'] = $this->specificationCode;
        }

        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['SpecificationCode'])) {
            $model->specificationCode = $map['SpecificationCode'];
        }

        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
