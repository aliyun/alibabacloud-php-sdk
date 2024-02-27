<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductRequest\productVersionParameters;
use AlibabaCloud\Tea\Model;

class CreateProductRequest extends Model
{
    /**
     * @description The description of the product.
     *
     * The value must be 1 to 128 characters in length.
     * @example The description of the product.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the product.
     *
     * The value must be 1 to 128 characters in length.
     * @example DEMO-Create an ECS instance
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the product.
     *
     * Set the value to Ros, which specifies Resource Orchestration Service (ROS).
     * @example Ros
     *
     * @var string
     */
    public $productType;

    /**
     * @description The information about the product version.
     *
     * @var productVersionParameters
     */
    public $productVersionParameters;

    /**
     * @description The provider of the product.
     *
     * The value must be 1 to 128 characters in length.
     * @example IT team
     *
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'description'              => 'Description',
        'productName'              => 'ProductName',
        'productType'              => 'ProductType',
        'productVersionParameters' => 'ProductVersionParameters',
        'providerName'             => 'ProviderName',
        'templateType'             => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->productVersionParameters) {
            $res['ProductVersionParameters'] = null !== $this->productVersionParameters ? $this->productVersionParameters->toMap() : null;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProductVersionParameters'])) {
            $model->productVersionParameters = productVersionParameters::fromMap($map['ProductVersionParameters']);
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
