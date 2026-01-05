<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateProductVersionRequest extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $guidance;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productVersionName;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'active' => 'Active',
        'description' => 'Description',
        'guidance' => 'Guidance',
        'productId' => 'ProductId',
        'productVersionName' => 'ProductVersionName',
        'templateType' => 'TemplateType',
        'templateUrl' => 'TemplateUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->guidance) {
            $res['Guidance'] = $this->guidance;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->templateUrl) {
            $res['TemplateUrl'] = $this->templateUrl;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Guidance'])) {
            $model->guidance = $map['Guidance'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['TemplateUrl'])) {
            $model->templateUrl = $map['TemplateUrl'];
        }

        return $model;
    }
}
