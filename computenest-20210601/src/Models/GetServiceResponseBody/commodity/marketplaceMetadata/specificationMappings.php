<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\marketplaceMetadata;

use AlibabaCloud\Tea\Model;

class specificationMappings extends Model
{
    /**
     * @description The specification code of the service in Alibaba Cloud Marketplace.
     *
     * @example cmjj00****
     *
     * @var string
     */
    public $specificationCode;

    /**
     * @description The package name.
     *
     * @example Package one.
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description The template name.
     *
     * @example Template one.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'specificationCode' => 'SpecificationCode',
        'specificationName' => 'SpecificationName',
        'templateName'      => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return specificationMappings
     */
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
