<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Tea\Model;

class specificationMappings extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example yuncode5767800001
     *
     * @var string
     */
    public $specificationCode;

    /**
     * @description 套餐名称
     *
     * @example Type, value：
     *
     * **Custom**
     * **ComputeNestBill**
     * **ComputeNestPrometheus**
     * **ComputeNestTime**
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description 模板名称
     *
     * @example Product Specifications and Template/specification mapping Relationships (Cloud Marketplace - Subscription/Permanent Use)
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
