<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductRequest\productVersionParameters;

class CreateProductRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var productVersionParameters
     */
    public $productVersionParameters;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'description' => 'Description',
        'productName' => 'ProductName',
        'productType' => 'ProductType',
        'productVersionParameters' => 'ProductVersionParameters',
        'providerName' => 'ProviderName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (null !== $this->productVersionParameters) {
            $this->productVersionParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ProductVersionParameters'] = null !== $this->productVersionParameters ? $this->productVersionParameters->toArray($noStream) : $this->productVersionParameters;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
